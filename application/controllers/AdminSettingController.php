<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AdminSettingController extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->adminId = $this->session->userdata('AdminId');
        $this->adminToken = $this->session->userdata('AdminToken');
        $this->load->model('AdminAccountModel');
        $this->adminInfo = $this->AdminAccountModel->getAccountInfo($this->adminId, $this->adminToken);
        
    }
    public function index(){
        if ($this->session->has_userdata('AdminId')
            && $this->session->has_userdata('AdminFirstname')
            && $this->session->has_userdata('AdminLastname')
            && $this->session->has_userdata('AdminUsername')
            && $this->session->has_userdata('AdminToken')) 
             {
                if ($this->adminInfo['valid']) {
                    $data = $this->adminInfo[0];
                } else {
                    redirect(base_url().'index.php/AdminLogoutController');
                    exit();
                }
                $data['title'] = 'Admin Homepage';
                $this->load->view('admin/admin_default_format/admin-header',$data);
                $this->load->view('admin/admin_default_format/admin-top-menu');
                $this->load->view('admin/admin_default_format/admin-left-menu');
                $this->load->view('admin/admin_pages/account-settings');
                $this->load->view('admin/admin_default_format/admin-footer');
                $this->load->view('admin/admin_modal/admin-logout-modal');
                
         } else {
             redirect(base_url().'index.php/AdminLoginController');
             exit();
         }
    }
}

