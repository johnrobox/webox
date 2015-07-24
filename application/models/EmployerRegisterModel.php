<?php

class EmployerRegisterModel extends CI_Model {
    
    public function registerEmployer($param){
        $this->db->insert('employer_member',$param);
        $log = $this->registerEmployerLog($param['employer_email']);
        if ($log) {
            return true;
        } else {
            return false;
        }
    }
    
    private function registerEmployerLog($email){
        $query = $this->db->query("SELECT id FROM employer_member WHERE employer_email='$email'");
        if ($query) {
            $row = $query->row();
            date_default_timezone_set("Asia/Manila");
            $data = array(
                'employer_id' => $row->id,
                'employer_coins' => 2000,
                'employer_date_created' => date('Y-m-d h:i:s'),
                'employer_ip_address' => '192.168.1.1'
            );
            $this->db->insert('employer_member_log',$data);
            return true;
        } else {
            return false;
        }
    }
}
