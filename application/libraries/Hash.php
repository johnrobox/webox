<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Hash {

    public function passwordHash($password){
        $hashPassword = $this->algorithm($password);
        return $hashPassword;
    }
    public function algorithm($password){
        $options = array(
                        'cost' => 11,
                        'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM)
                    );
        $data = 'AdMin'.$password;
        $md5 = md5($data);
        $passwordHash = password_hash($md5, PASSWORD_BCRYPT, $options);
        return $passwordHash;
    }
}
