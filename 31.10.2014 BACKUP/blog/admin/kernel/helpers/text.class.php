<?php

/*
 * Nibbleblog -
 * http://www.nibbleblog.com
 * Author Diego Najar

 * All Nibbleblog code is released under the GNU General Public License.
 * See COPYRIGHT.txt and LICENSE.txt.
*/

class Text {

	public static function unserialize($string)
	{
		parse_str($string, $data);

		// Clean magic quotes if this enabled
		if(get_magic_quotes_gpc())
		{
			$data = self::clean_magic_quotes($data);
		}

		return($data);
	}

	public static function ajax_header($tmp)
	{
		$xml = '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>';
		$xml .= '<ajax>';
		$xml .= $tmp;
		$xml .= '</ajax>';
		return( $xml );
	}

	// Clean magic quotes
	public static function clean_magic_quotes($args)
	{
		$tmp_array = array();
		foreach($args as $key => $arg)
		{
			$tmp_array[$key] = stripslashes($arg);
		}

		return($tmp_array);
	}

	public static function cut_text($text, $maxlength)
	{
		return( substr($text,0,strrpos(substr($text,0,$maxlength)," ")) );
	}

	public static function cut_words($text, $count)
	{
		$explode = explode(" ", $text);

		if(count($explode) > $count)
		{
			array_splice($explode, $count);
			$text = implode(' ', $explode);
		}

		return($text);
	}

	// Strip spaces
	public static function replace($search, $replace, $string)
	{
		return( str_replace($search,$replace,$string) );
	}

	// Strip spaces
	public static function strip_spaces($string)
	{
		return( str_replace(' ','',$string) );
	}

	// Strip quotes ' and "
	public static function strip_quotes($text)
	{
		$text = str_replace('\'', '', $text);
		$text = str_replace('"', '', $text);
		return( $text );
	}

	function clean_non_alphanumeric($string)
	{
		$string = preg_replace("/[^A-Za-z0-9 ]/", '', $string);

		return $string;
	}

	// RETURN
	// TRUE - si contiene el substring
	// FALSE - caso contrario
	public static function is_substring($string, $substring)
	{
		return( strpos($string, $substring) !== false );
	}

	// RETURN
	// TRUE - is not empty
	// FALSE - is empty
	public static function not_empty($string)
	{
		return( !self::is_empty($string) );
	}

	public static function is_empty($string)
	{
		$string = self::strip_spaces($string);
		return( empty($string) );
	}

	// Compara 2 cadenas
	// Retorna TRUE si son iguales, FALSE caso contrario
	public static function compare($value1, $value2)
	{
		return( strcmp($value1, $value2) == 0 );
	}
    
    public static function generar_url($link = '') {
        $link = strip_tags($link);
        $buscar = array("á", "é", "í", "ó", "ú", "ä", "ë", "ï", "ö", "ü", "à", "è", "ì", "ò", "ù", "ñ", 'ç', ".", ";", ":", "¡", "!", "¿", "?", "/", "*", "+", "´", "{", "}", "¨", "â", "ê", "î", "ô", "û", "^", "#", "|", "°", "=", "[", "]", "<", ">", "`", "(", ")", "&", "%", "$", "¬", "@", "Á", "É", "Í", "Ó", "Ú", "Ä", "Ë", "Ï", "Ö", "Ü", "Â", "Ê", "Î", "Ô", "Û", "~", "À", "È", "Ì", "Ò", "Ù", "_", "\\", ",", "'", "²", "º", "ª", "\"", "'");
        $rempl = array("a", "e", "i", "o", "u", "a", "e", "i", "o", "u", "a", "e", "i", "o", "u", "n", 'c', " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", "a", "e", "i", "o", "u", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", "A", "E", "I", "O", "U", "A", "E", "I", "O", "U", "A", "E", "I", "O", "U", "", "A", "E", "I", "O", "U", "_", " ", " ", " ", " ", " ", " ", " ", " ");
        $link = str_replace($buscar, $rempl, $link);
        $find = array(' ');
        $link = str_replace($find, '-', $link);
        $link = preg_replace('/--+/', '-', $link);
        $link = trim($link, '-');
        return strtolower($link);
    }

	// Clean text for URL
	public static function clean_url($text, $spaces='-', $translit=false)
	{
		// Delete characters
		$text = self::generar_url($text);

		// Translit
		if($translit!=false)
		{
			$text = str_replace(array_keys($translit),array_values($translit),$text);
		}

		// Replace spaces by $spaces
		$text = str_replace(' ',$spaces,$text);

		// Replace double -- by -
		$text = str_replace(array('---','--'),'-',$text);

		// Make a string lowercase
		$text = self::str2lower($text);

		return $text;
	}

	public static function str2lower($string)
	{
		if(function_exists('mb_strtolower'))
			return mb_strtolower($string, 'UTF-8');

		return strtolower($string);
	}

	public static function random_text($length)
	{
		 $characteres = "1234567890abcdefghijklmnopqrstuvwxyz!@#%^&*";
		 $text = '';
		 for($i=0; $i<$length; $i++)
		 {
			$text .= $characteres{rand(0,41)};
		 }
		 return $text;
	}

	public static function replace_assoc(array $replace, $text)
	{
		return str_replace(array_keys($replace), array_values($replace), $text);
	}

}

?>