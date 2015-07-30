<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AdminSettingController extends CI_Controller {
    
    public function index(){
        if ($this->session->has_userdata('AdminId')
            && $this->session->has_userdata('AdminFirstname')
            && $this->session->has_userdata('AdminLastname')
            && $this->session->has_userdata('AdminUsername')
            && $this->session->has_userdata('AdminApi')) 
             {
            echo '<pre>';
            $this->load->model('AdminAccountModel');
            $this->AdminAccountModel->getAccountInfo();
            die();
                $data['title'] = 'Admin Homepage';
                $this->load->view('admin/admin_default_format/admin-header',$data);
                $this->load->view('admin/admin_default_format/admin-top-menu');
                $this->load->view('admin/admin_default_format/admin-left-menu');
                $this->load->view('admin/admin_pages/account-settings');
                $this->load->view('admin/admin_default_format/admin-footer');
                $this->load->view('admin/admin_modal/admin-logout-modal');
         } else {
             redirect(base_url().'index.php/AdminLoginController');
         }
    }
}

