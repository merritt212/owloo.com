<?php
	require_once('../userMgmt/system/initiater.php');
	if($site->loggedin){
		$site->template_show_avatar_loggedin();
	}else { ?>
        <a class="owloo_btn owloo_btn_blue owloo_login" href="<?=URL_ROOT_HTTPS?>userMgmt/login.php">Iniciar sesión</a>
        <a class="owloo_btn owloo_btn_orange" href="<?=URL_ROOT_HTTPS?>userMgmt/signup.php">Regístrate hoy - GRATIS</a>
    <?php } ?>