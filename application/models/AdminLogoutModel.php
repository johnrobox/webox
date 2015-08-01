<?php


class AdminLogoutModel extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->adminId = $this->session->userdata('AdminId');
        $this->adminToken = $this->session->userdata('AdminToken');
    }
    
    public function logout() {
        
        $response = array();
        date_default_timezone_set('Asia/Manila');
        $query = $this->db->query("SELECT id FROM admin_user_log WHERE admin_id = '$this->adminId' AND admin_api_token = '$this->adminToken'");
        
        if ($query->num_rows() == 1) {
            $this->db->where('admin_id', $this->adminId);
            $this->db->where('admin_api_token', $this->adminToken);
            $this->db->update('admin_user_log', array( 'admin_last_logout_date' => date('Y-m-d h:i:s') ));
            $response = array('valid' => true);
        } else {
            $response = array('valid' => false);
        }
        return $response;
    }
    
    
    
}