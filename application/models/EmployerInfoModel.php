<?php

class EmployerInfoModel extends CI_Model {
    
    public function getCoins ($employerId) {
        $query = $this->db->query("SELECT employer_coins FROM employer_member_log WHERE employer_id ='$employerId'");
        $row = $query->row();
        return $row->employer_coins;
    }
    
    public function getAllData ($employerId) {
        $query = $this->db->get('employer_member');
        return $query->result();
    }
}
