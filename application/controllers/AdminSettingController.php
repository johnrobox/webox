<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AdminSettingController extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('AdminAccountModel');
        $this->adminInfo = $this->AdminAccountModel->getAccountInfo();
        $this->load->library('Alert');
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
    
    public function adminSettingExec() {
        if ($this->session->has_userdata('AdminId')
            && $this->session->has_userdata('AdminFirstname')
            && $this->session->has_userdata('AdminLastname')
            && $this->session->has_userdata('AdminUsername')
            && $this->session->has_userdata('AdminToken')) 
             {
         
                $validate = array(
                    array (
                      'field' => 'adminFirstname',
                      'label' => 'Firstname',
                        'rules' => 'trim|required'
                    ),
                    array(
                        'field' =>  'adminLastname',
                        'label' => 'Lastname',
                        'rules' => 'trim|required'
                    ),
                    array(
                        'field' => 'adminEmail',
                        'label' => 'Email',
                        'rules' => 'trim|required'
                    ),
                    array(
                        'field' => 'adminContactNo',
                        'label' => 'Contact No.',
                        'rules' => 'trim|required'
                    ),
                    array(
                        'field' => 'adminBirthDate',
                        'label' => 'Birth date',
                        'rules' => 'trim|required'
                    )
                );

            $this->form_validation->set_rules($validate);
            if ($this->form_validation->run() == false) {
                $this->index();
            } else {
                echo '<pre>';
                $data = array(
                    'admin_firstname' => $this->input->post('adminFirstname'),
                    'admin_lastname' => $this->input->post('adminLastname'),
                    'admin_email' => $this->input->post('adminEmail'),
                    'admin_skype' => $this->input->post('adminSkype'),
                    'admin_contact_no' => $this->input->post('adminContactNo'),
                    'admin_gender' => $this->input->post('adminGender'),
                    'admin_birthdate' => $this->input->post('adminBirthDate')
                );

                $readyData = $this->security->xss_clean($data);
                $result = $this->AdminAccountModel->updateAccount($readyData);
                
                if ($result['valid'] == true){
                    $this->session->set_flashdata('AdminUpdate',$this->alert->successAlert('Account updated succesfully.'));
                    redirect(base_url().'index.php/AdminSettingController');
                    exit();
                } else {
                    redirect(base_url().'index.php/AdminLogoutController');
                    exit();
                }
            }
            
        } else {
             redirect(base_url().'index.php/AdminLoginController');
             exit();
         }
        
    }
}

