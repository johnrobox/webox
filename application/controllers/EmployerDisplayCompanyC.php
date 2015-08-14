<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class EmployerDisplayCompanyC extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->library('alert');
        $this->load->model('EmployerCompanyModel');
    }
    
    public function index() {
        if ($this->session->has_userdata('EmployerId') &&
                $this->session->has_userdata('EmployerFirstname') && 
                $this->session->has_userdata('EmployerLastname') &&
                $this->session->has_userdata('EmployerToken')
           ) {
        
            $result = $this->EmployerInfoModel->getCoins();
            if ($result == false) {
                redirect(base_url().'index.php/EmployerLogoutC');
            }
            
            $data = array(
                'employerCoins' => $result,
                'title' =>  'Employer Posting Job'
            );
            $companyData = $this->EmployerCompanyModel->getCompany();
            if ( isset($companyData['notlogin'])) {
                
            } else if ( isset($companyData['nodata'])) {
                $data['allCompany'] = false;
            } else {
                $data['allCompany'] = $companyData;
            }
            $this->load->view('visitor/employer_default/header',$data);
            $this->load->view('visitor/employer_default/top-menu');
            $this->load->view('visitor/employer_default/main-head');
            $this->load->view('visitor/employer_pages/display-company-added');
            $this->load->view('visitor/employer_default/footer');
            $this->load->view('visitor/employer_modal/employer-about-posting-job');
            $this->load->view('visitor/employer_modal/employer-logout-modal');
            
            
        } else {
           redirect(base_url().'index.php/EmployerLogoutC');
           exit(); 
        }
    }
}