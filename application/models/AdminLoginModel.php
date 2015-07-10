<?php

class AdminLoginModel extends CI_Model{
    
    public function login($username,$password){
         $adminCredentials = array(
             'admin_username' => $username,
             'admin_password' => $password
         );
         $query = $this->db->get_where('admin_user',$adminCredentials);
         if($query->num_rows()==1){
             $this->load->library('random');
             $code = $this->random->generateCode();
             foreach($query->result() as $row){
                 $adminId = $row->id;
                 $sessionData = array(
                    'AdminId' => $adminId, 
                    'AdminFirstname' => $row->admin_firstname,
                    'AdminLastname'  => $row->admin_lastname,
                    'AdminUsername' =>  $row->admin_username,
                    'AdminApi' => $code
                );
             }
             $this->session->set_userdata($sessionData);
             date_default_timezone_set("Asia/Manila");
             $updateLogin = array(
                 'admin_api_token' => $code,
                 'admin_last_login_date' => date('Y-m-d h:i:s')
             );
             $this->db->where('admin_id',$adminId);
             $this->db->update('admin_user_log',$updateLogin);
             return true;
         }else{
             return false;
         }
    }
}
