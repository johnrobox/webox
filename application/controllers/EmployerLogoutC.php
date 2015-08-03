<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class EmployerLogoutC extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->employerSes = array(
            'EmployerId',
            'employerFirstname',
            'EmployerLastname',
            'EmployerToken'
        );
    }
    
    public function index() {
        $this->session->unset_userdata($this->employerSes);
        $this->session->sess_destroy();
        redirect(base_url());
        exit();
    }
}
