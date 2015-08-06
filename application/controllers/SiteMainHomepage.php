<?php

/* Author :  Webox Team
 * Date created : July 27, 2015.
 * Place : Boarding House
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class SiteMainHomepage extends CI_Controller {
    
    public function index(){
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
                'location' => $this->LocationModel->getAllLocation(),
                'title' =>  'Employer Page'
            );
            
            $this->load->view('visitor/employer_default/header',$data);
            $this->load->view('visitor/employer_default/top-menu');
            $this->load->view('visitor/employer_default/main-head');
            $this->load->view('visitor/employer_pages/index');
            $this->load->view('visitor/employer_default/footer');
            $this->load->view('visitor/employer_modal/employer-about-posting-job');
            $this->load->view('visitor/employer_modal/employer-logout-modal');
            
        } else {
            
            $data = array(
                'location' => $this->LocationModel->getAllLocation(),
                'title' => 'Homepage'
            );
            
            $this->load->view('visitor/visitor_default_format/header',$data);
            $this->load->view('visitor/visitor_default_format/top-menu');
            $this->load->view('visitor/visitor_default_format/main-head');
            $this->load->view('visitor/visitor_pages/index');
            $this->load->view('visitor/visitor_default_format/footer');
            $this->load->view('visitor/employer_modal/employer-login-modal');
            
        }
    }
}