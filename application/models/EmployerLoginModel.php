
<?php

class EmployerLoginModel extends CI_Model {
    
    public function validateLogin ($email, $password){
        
        $query = $this->db->query("SELECT id, employer_firstname, employer_lastname FROM employer_member WHERE employer_email = '$email' AND employer_password = '$password'");
        if ($query->num_rows()==1) {
            $row = $query->row();
            $this->load->library('random');
            $employerToken = $this->random->generateCode();
            
            date_default_timezone_set("Asia/Manila");
            
            $data = array(
                'employer_api_token' => $employerToken,
                'employer_last_login_date' => date('Y-m-d h:i:s'),
                'employer_ip_address' => '192.168.8.67'
            );
            
            $this->db->where('employer_id',$row->id);
            $this->db->update('employer_member_log',$data);
            
            $prepareSession  = array(
                'employerId' => $row->id,
                'employerFirstname' => $row->employer_firstname,
                'employerLastname' => $row->employer_lastname,
                'employerToken' => $employerToken
            );
            return $prepareSession;
            
        } else {
            return false;
        }
    }
}