<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class EmployerLogoutC extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->employerSes = array(
            'employerId',
            'employerFirstname',
            'employerLastname',
            'employerToken'
        );
    }
    
    public function index() {

       $this->load->library('table');

$data = array(
        array('Name', 'Color', 'Size'),
        array('Fred', 'Blue', 'Small'),
        array('Mary', 'Red', 'Large'),
        array('John', 'Green', 'Medium')
);

echo $this->table->generate($data);
    }
}
