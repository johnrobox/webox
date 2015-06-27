<?php

class AdminLoginModel extends CI_Model{
    
    public function login($username,$password){
         $adminCredentials = array(
             'admin_username' => $username,
             'admin_password' => $password
         );
         $query = $this->db->get_where('admin_user',$adminCredentials);
         if($query->num_rows()==1){
             return $query->result();
         }else{
             return false;
         }
    }
}
