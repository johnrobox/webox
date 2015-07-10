<?php

class EmployerRegisterModel extends CI_Model {
    
    public function registerEmployer($param){
        $data = $this->db->insert('employer_member',$param);
        if($data)
            return true;
        else
            return false;
    }
}
