<?php

class EmployerUpdateModel extends CI_Model {
    
    public function update($data) {
        $id = $this->session->userdata('employerId');
        $query = $this->db->query("SELECT employer_api_token FROM employer_member_log WHERE employer_id = '$id'");
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $token = $row->employer_api_token;
            if ($this->session->userdata('employerToken') == $token){
                $this->db->where('id',$this->session->userdata('employerId'));
                $this->db->update('employer_member',$data);
                $result = array('valid' => true, 'message' => 'Your account updated successfully.');
            } else {
                $result = array('valid' => false, 'message' => 'Cannot update your account.');
            }
        } else {
            $result = array('valid' => false, 'message' => 'Cannot update your account.');
        }
        return $result;
    }
}