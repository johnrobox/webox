<?php

class AdminLoginModel extends CI_Model{
    
    public function __construct() {
        parent::__construct();
        $this->load->library('random');
    }
    
    public function login($adminCred){
        
         $query = $this->db->get_where('admin_user',$adminCred);
         
         if($query->num_rows()==1){
             
            $code = $this->random->generateCode();
             
            $row = $query->row();
            $sessionData = array(
               'AdminId' => $row->id, 
               'AdminFirstname' => $row->admin_firstname,
               'AdminLastname'  => $row->admin_lastname,
               'AdminUsername' =>  $row->admin_username,
               'AdminToken' => $code
            );
             
            date_default_timezone_set("Asia/Manila");
            $updateLogin = array(
                'admin_api_token' => $code,
                'admin_last_login_date' => date('Y-m-d h:i:s'),
                'admin_status' => 1
            );
            $this->db->where('admin_id',$row->id);
            $this->db->update('admin_user_log',$updateLogin);

            $result = array('valid' => true, 'return' => $sessionData);
             
         }else{
             $result = array('valid' => false);
         }
         return $result;
    }
}
