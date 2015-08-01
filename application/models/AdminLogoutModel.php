<?php


class AdminLogoutModel extends CI_Model {
    
    
    public function logout($data) {
        
        date_default_timezone_set('Asia/Manila');
        $this->db->where('admin_id', $data['adminId']);
        $this->db->where('admin_api_token', $data['adminToken']);
        $this->db->update('admin_user_log', array( 'admin_last_logout_date' => date('Y-m-d h:i:s') ));
        
    }
    
    
    
}