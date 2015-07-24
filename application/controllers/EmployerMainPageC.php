<?php

/* Author :  Webox Team
 * Date created : July 27, 2015.
 * Place : Boarding House
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployerMainPageC extends CI_Controller {
    
    public function postJob ($location) {
        
        if ($this->session->has_userdata('employerId') &&
                $this->session->has_userdata('employerFirstname') &&
                $this->session->has_userdata('employerLastname') &&
                $this->session->has_userdata('employerToken')
            ) {
            $data['title'] = 'Employer Posting Job';
            $this->load->view('visitor/employer_default/header',$data);
            $this->load->view('visitor/employer_default/top-menu');
            $data['employerCoins'] = $this->EmployerInfoModel->getCoins($this->session->userdata('employerId'));
            $this->load->view('visitor/employer_default/main-head',$data);
            $this->load->view('visitor/employer_pages/post-job');
            $this->load->view('visitor/employer_default/footer');
            $this->load->view('visitor/employer_modal/employer-about-posting-job');
            $this->load->view('visitor/employer_modal/employer-logout-modal');
        } else {
            redirect(base_url());
        }
    } // end of posting a job function
    
    public function settings () {
        if ($this->session->has_userdata('employerId') &&
                $this->session->has_userdata('employerFirstname') && 
                $this->session->has_userdata('employerLastname') &&
                $this->session->has_userdata('employerToken')
           ) {
           $data['title'] = 'Employer Account Settings';
           $this->load->view('visitor/employer_default/header',$data);
           $this->load->view('visitor/employer_default/top-menu');
           $data['employerCoins'] = $this->EmployerInfoModel->getCoins($this->session->userdata('employerId'));
           $this->load->view('visitor/employer_default/main-head',$data);
           $this->load->view('visitor/employer_pages/settings');
           $this->load->view('visitor/employer_default/footer');
           $this->load->view('visitor/employer_modal/employer-about-posting-job');
           $this->load->view('visitor/employer_modal/employer-logout-modal');
        } else {
            redirect (base_url());
            exit();
        }
    }
}