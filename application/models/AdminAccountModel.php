<?php

class AdminAccountModel extends CI_Model {


    public function __construct() {
        parent::__construct();
        $this->adminId = $this->session->userdata('AdminId');
        $this->adminToken = $this->session->userdata('AdminToken');
    }
    
    public function checkAccount() {
        $query = $this->db->query("SELECT admin_id FROM admin_user_log WHERE admin_api_token = '$this->adminToken' AND admin_id = '$this->adminId'");
        $result = ($query->num_rows() == 1) ? true : false;
        return $result;
    }
    
    public function getAccountInfo () {
        $response = array();
        $result = $this->checkAccount();
        if ( $result ){
            $this->db->where('id',$this->adminId);

            $getAdminData = $this->db->get('admin_user');
            $row = $getAdminData->row();
            $array = array(
                'adminFirstname' => $row->admin_firstname,
                'adminLastname' => $row->admin_lastname,
                'adminEmail' => $row->admin_email,
                'adminSkype'    => $row->admin_skype,
                'adminContactNo' => $row->admin_contact_no,
                'adminGender' =>  $row->admin_gender,
                'adminBirthDate' => $row->admin_birthdate
            );
            $response = array('valid' => true, $array);
            
        } else {
            $response =  array('valid' => false);
        }
        return $response;
    }
    

    public function updateAccount($data) {
        
        $response = array();
        $result = $this->checkAccount();
        if ($result) {
            $this->db->where('id',$this->adminId);
            $query = $this->db->get('admin_user');
            if ($query->num_rows() == 1) {
                
                $this->db->where('id',$this->adminId);
                $update = $this->db->update('admin_user',$data);
                
                date_default_timezone_set("Asia/Manila");
                $this->db->where('admin_id',$this->adminId);
                $updateLog = $this->db->update('admin_user_log', array('admin_modified_date' => date('Y-m-d h:i:s')));
                
                if ($update) {
                    $response = array('valid' => true);
                }
            } else{
                $response = array('valid' => false);
            }
            
        } else {
            $response = array('valid' => false);
        }
        return $response;
    }
    

}
