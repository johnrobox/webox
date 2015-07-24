<?php

/* Author :  Webox Team
 * Date created : June 27, 2015.
 * Place : Boarding House
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminHomepageController extends CI_Controller {
    
    public function index(){
        if ($this->session->has_userdata('AdminId')
            && $this->session->has_userdata('AdminFirstname')
            && $this->session->has_userdata('AdminLastname')
            && $this->session->has_userdata('AdminUsername')
            && $this->session->has_userdata('AdminApi')) 
             {
                $data['title'] = 'Admin Homepage';
                $this->load->view('admin/admin_default_format/admin-header',$data);
                $this->load->view('admin/admin_default_format/admin-top-menu');
                $this->load->view('admin/admin_default_format/admin-left-menu');
                $this->load->view('admin/admin_pages/home-page');
                $this->load->view('admin/admin_default_format/admin-footer');
         }else{
             redirect(base_url().'admin-login');
         }
    }
}
