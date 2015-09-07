<?php
//ignore_user_abort(true);
set_time_limit(0);
include("../config/config_cronjob.php");
include("twitterfunctions_cronjob.php");
include("twitterconfig_cronjob.php");

$cont_access_token = 0;
$informe_errores = '';

function next_access_token(){
	global $cont_access_token, $code_app, $informe_errores;
	++$cont_access_token;
	if($cont_access_token < count($code_app)){
		sleep(10); //esperamos 10 segundos
	}
	else{
		$cont_access_token = 0;
		$informe_errores .= "
			Inicio SLEEP: ".date("H:i:s");
//echo '<br/>Inicio SLEEP: '.date("H:i:s");
		sleep(120); //esperamos 2 minutos
		$informe_errores .= "
			Fin SLEEP: ".date("H:i:s");
//echo '<br/>Fin SLEEP: '.date("H:i:s");
	}
}

//Eliminamos todos los registros actualizados hoy
$qry = "Delete from owloo_daily_track where owloo_updated_on = '" . Date("Y-m-d") . "' ";
mysql_query($qry);

 //ALL acounts
$qry = "";
$qry .= " SELECT owloo_user_id, owloo_user_twitter_id, owloo_user_name, owloo_screen_name FROM owloo_user_master";
$qry .= " Order By 1";
$qrydata = mysql_query($qry);
$cont = 1;

$informe_errores .= "INICIO: ".date("H:i:s");
//echo '<br/>INICIO: '.date("H:i:s");
$informe_errores .= "
	Twitter user: ".$code_app[$cont_access_token]['user'];
//echo '<br/>Twitter user: '.$code_app[$cont_access_token]['user'];

while ($fetch_cntr = mysql_fetch_array($qrydata)) {

	//Fetch Data From Twitter
	$screenname = $fetch_cntr["owloo_screen_name"];
	$url = "https://api.twitter.com/1.1/users/lookup.json";
	$parameters = "screen_name=" . $screenname;
	
	$ban_success = false;
	while(!$ban_success){
		$retdata = getdata($url, $parameters, $code_app[$cont_access_token]['Consumer_Key'], $code_app[$cont_access_token]['Consumer_Secret'], $code_app[$cont_access_token]['Access_Token'], $code_app[$cont_access_token]['Access_Token_Secret']);
		if ($retdata) {
			$twdatas = json_decode($retdata, true);
			foreach ($twdatas as $twdata) {
				if ($twdata[0]["message"]) {
					$informe_errores .= "
						Twitter code error: ".$twdata[0]["code"]." - ".$twdata[0]["message"]." - ".$fetch_cntr["owloo_screen_name"]." - ".$cont;
//echo '<br/>Twitter code error: '.$twdata[0]["code"].' - '.$twdata[0]["message"].' - '.$fetch_cntr["owloo_screen_name"].' - '.$cont;
					if($twdata[0]["code"] != 34){
						next_access_token();
						$informe_errores .= "
							Twitter user: ".$code_app[$cont_access_token]['user']." - ".$cont;
//echo '<br/>Twitter user: '.$code_app[$cont_access_token]['user'];
					}
					else{
						$ban_success = true;
						$cont++;
					}
						
				} else {
					$followers_count = $twdata["followers_count"];
					$following_count = $twdata["friends_count"];
					$tweetcount = $twdata["statuses_count"];
					$listedcount = $twdata["listed_count"];
					$update_id = $fetch_cntr['owloo_user_id'];
					
					$qry = "";
					$qry = "Update owloo_user_master Set ";
					$qry = $qry . " owloo_followers_count = '" . $followers_count . "',";
					$qry = $qry . " owloo_following_count = '" . $following_count . "',";
					$qry = $qry . " owloo_tweetcount = '" . $tweetcount . "',";
					$qry = $qry . " owloo_listed_count = '" . $listedcount . "',";
					$qry = $qry . " Where owloo_user_id = " . $update_id . ";";
					mysql_query($qry);
					
					$qry = "";
					$qry = " INSERT INTO owloo_daily_track ( owloo_user_twitter_id, owloo_followers_count,";
					$qry = $qry . " owloo_following_count, owloo_tweetcount, owloo_listed_count,";
					$qry = $qry . " owloo_updated_on) VALUES (";
					$qry = $qry . " '" . $update_id . "',";
					$qry = $qry . " '" . $followers_count . "',";
					$qry = $qry . " '" . $following_count . "',";
					$qry = $qry . " '" . $tweetcount . "',";
					$qry = $qry . " '" . $listedcount . "',";
					$qry = $qry . " '" . Date("Y-m-d") . "')";
					mysql_query($qry);
					
					$ban_success = true;
					$cont++;
				}
			}
		} else {
			$informe_errores .= "
				ERROR: ".$fetch_cntr["owloo_screen_name"]." - ".$cont;
//echo '<br/>ERROR: '.$fetch_cntr["owloo_screen_name"].' - '.$cont;
			$ban_success = true;
			$cont++;
		}
	}
}

$informe_errores .= "
	FIN! ".date("H:i:s");

//echo '<br/>FIN!'.date("H:i:s");

//echo $informe_errores;

function informarExito($text){
	//Enviar aviso por email
	$para = 'mmolinas@latamclick.com';
	$titulo = 'Owloo - Twitter seguidores';
	$mensaje = 'El script de captura de seguidores en el twitter se ha ejecutado exitosamente!!!<br><br>'.$text;
	$cabeceras = 'From: dev@owloo.com' . "\r\n";
	mail($para, $titulo, $mensaje, $cabeceras);
}

informarExito($informe_errores);

/*$f = fopen('xxx.txt', 'w+');
fwrite($f, $informe_errores);
fclose($f);*/