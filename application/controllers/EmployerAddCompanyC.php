<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class EmployerAddCompanyC extends CI_Controller {
    
    public function index() {
        if ($this->session->has_userdata('EmployerId') &&
                $this->session->has_userdata('EmployerFirstname') && 
                $this->session->has_userdata('EmployerLastname') &&
                $this->session->has_userdata('EmployerToken')
           ) {
            $this->load->view('visitor/employer_pages/load_page/register_company');
        } else {
            redirect(base_url().'index.php/EmployerLogoutC');
            exit();
        }
    }
}