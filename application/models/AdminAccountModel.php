<?php

class AdminAccountModel extends CI_Model {

    public function getAccountInfo ($adminId, $adminToken) {
        
        $response = array();
        $query = $this->db->query("SELECT admin_id FROM admin_user_log WHERE admin_api_token = '$adminToken' AND admin_id = '$adminId'");
        if ( $query->num_rows() == 1 ){
            $this->db->where('id',$adminId);
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
    
}
