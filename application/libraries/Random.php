<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Random {
    
    function generateCode ($length = 20){
    $password = "";
    $possible = "abcdifghijklmnop12346789ABCDFGHJKLMNPQRTVWXYZ";
	$maxlength = strlen($possible);
		if ($length > $maxlength) {
			$length = $maxlength;
        }
		$i = 0; 
		while ($i < $length) { 
			$char = substr($possible, mt_rand(0, $maxlength-1), 1);
			if (!strstr($password, $char)) { 
                $password .= $char;
                $i++;
            }
		}
	return $password;
	}
}