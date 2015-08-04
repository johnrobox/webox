<?php

class EmployerInfoModel extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->employerId = $this->session->userdata('EmployerId');
        $this->employerToken = $this->session->userdata('EmployerToken');
    }
    
    public function getCoins () {
        
        $query = $this->customQuery();
        $row = $query->row();
        return ($query->num_rows() == 1) ? $row->employer_coins : false; 
         
    }
    
    public function getOwnData () {
        $query = $this->customQuery();
        if ($query->num_rows() == 1) {
            $row = $query->row();
            $this->db->where('id',$row->employer_id);
            $get = $this->db->get('employer_member');
            return $get->result();
        } else {
            return false;
        }
    }
    
    private function customQuery() {
        $query = $this->db->query("SELECT employer_id, employer_coins FROM employer_member_log WHERE employer_id ='$this->employerId' AND employer_api_token = '$this->employerToken'");
        return $query;
    }
    
}
