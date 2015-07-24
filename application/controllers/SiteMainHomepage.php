<?php

/* Author :  Webox Team
 * Date created : July 27, 2015.
 * Place : Boarding House
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class SiteMainHomepage extends CI_Controller {
    
    public function index(){
        if ($this->session->has_userdata('employerId') &&
            $this->session->has_userdata('employerFirstname') &&
            $this->session->has_userdata('employerLastname') &&
            $this->session->has_userdata('employerToken')
            ) {
                $data['title'] = 'Employer Page';
                $this->load->view('visitor/employer_default/header',$data);
                $this->load->view('visitor/employer_default/top-menu');
                $data['employerCoins'] = $this->EmployerInfoModel->getCoins($this->session->userdata('employerId'));
                $this->load->view('visitor/employer_default/main-head',$data);
                $data['location'] = $this->LocationModel->getAllLocation();
                $this->load->view('visitor/employer_pages/index',$data);
                $this->load->view('visitor/employer_default/footer');
                $this->load->view('visitor/employer_modal/employer-about-posting-job');
        } else {
            $this->load->view('visitor/visitor_default_format/header');
            $this->load->view('visitor/visitor_default_format/top-menu');
            $this->load->view('visitor/visitor_default_format/main-head');
            $this->load->view('visitor/visitor_pages/index');
            $this->load->view('visitor/visitor_default_format/footer');
            $this->load->view('visitor/employer_modal/employer-login-modal');
        }
    }
}