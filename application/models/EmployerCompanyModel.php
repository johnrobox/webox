<?php


class EmployerCompanyModel extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->employerId = $this->session->userdata('EmployerId');
        $this->employerToken = $this->session->userdata('EmployerToken');
    }
    
    public function addCompanyExec($readyData) {
        $response = array();
        $check = $this->checkLogin();
        if ($check) {
            $this->db->insert('company_information',$readyData);
            $result = $this->db->get_where('company_information',$readyData);
            $row = $result->row();
            
            date_default_timezone_set("Asia/Manila");
            
            $log = array(
                'company_id' => $row->id,
                'company_created_by' => $this->employerId,
                'company_created_date' => date('Y-m-d h:i:s'),
                'company_ip_address' => $this->input->ip_address(),
                'company_status' => 1
            );
            $this->db->insert('company_information_log',$log);
            $response = array ( 'valid' =>  true );
        } else {
            $response = array ( 'valid' => false );
        }
        return $response;
    }
    
    public function getCompany() {
        
        $response = array();
        $check = $this->checkLogin();
        if ($check) {
            $getCompanyId = $this->db->query("SELECT company_id FROM company_information_log WHERE company_created_by = '$this->employerId'");
            if ($getCompanyId->num_rows() > 0) {
                $getCompanyId = $getCompanyId->result();
                $i = 0;
                foreach($getCompanyId as $row) {
                    $getCompanyData = $this->db->query("SELECT * FROM company_information WHERE id = '$row->company_id'");
                    $response[$i] = $getCompanyData->result();
                    $i++;
                }
            } else {
               $response['nodata'] = true; 
            }
        } else {
            $response['notlogin'] = false;
        }
        return $response;
        
    }
    
    private function checkLogin () {
        $query = $this->db->query("SELECT employer_id FROM employer_member_log WHERE employer_id = '$this->employerId' AND employer_api_token = '$this->employerToken'");
        return ($query->num_rows() == 1) ? true : false;
    }
}
