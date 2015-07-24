<?php

class Clean {
    
    public function cleanInput($str) {
	$str = @trim($str);
	if(get_magic_quotes_gpc()) {
            $str = stripslashes($str);
	}
	return mysql_real_escape_string($str);
    }
}
