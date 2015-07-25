<?php

class AdminLoginModel extends CI_Model{
    
    public function login($adminCred){
         $query = $this->db->get_where('admin_user',$adminCred);
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
             
             date_default_timezone_set("Asia/Manila");
             $updateLogin = array(
                 'admin_api_token' => $code,
                 'admin_last_login_date' => date('Y-m-d h:i:s')
             );
             $this->db->where('admin_id',$adminId);
             $this->db->update('admin_user_log',$updateLogin);
             
             $result = array('valid' => true, 'return' => $sessionData);
             
         }else{
             $result = array('valid' => false);
         }
         return $result;
    }
}
