<?php

class AdminAccountModel extends CI_Model {
    
    public function __construct() {
        $this->id = $this->session->userdata('AdminId');
        $this->token = $this->session->userdata('AdminApi');
        parent::__construct();
    }
    public function getAccountInfo () {
        $p = $this->token;
        $query = $this->db->query("SELECT admin_id FROM admin_user_log WHERE admin_api_token = '$p'");
        $d = $query->num_rows();
        echo $p;
    }
}
