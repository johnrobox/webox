<?php


class EmployerCompanyModel extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->employerId = $this->session->userdata('EmployerId');
        $this->employerToken = $this->session->userdata('EmployerToken');
    }
    
    public function addCompanyExec($readyData) {
        $response = array();
        $query = $this->db->query("SELECT employer_id FROM employer_member_log WHERE employer_id = '$this->employerId' AND employer_api_token = '$this->employerToken'");
        if ($query->num_rows() == 1) {
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
            $response = array ( 'valid' =>  true, 'message' => 'Company information successfully added.' );
        } else {
            $response = array ( 'valid' => false, 'message' => 'There is an error of adding company information, Please contact the administrator site.' );
        }
        return $response;
    }
}
