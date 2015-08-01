<?php

/* Author :  Webox Team
 * Date created : June 27, 2015.
 * Place : Boarding House
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminRegisterController extends CI_Controller {
    
    
    public function index(){
        if ($this->session->has_userdata('AdminId')
            && $this->session->has_userdata('AdminFirstname')
            && $this->session->has_userdata('AdminLastname')
            && $this->session->has_userdata('AdminUsername')
            && $this->session->has_userdata('AdminToken')) 
            {
                $data['title'] = 'Admin Register';
                $this->load->view('admin/admin_default_format/admin-header',$data);
                $this->load->view('admin/admin_default_format/admin-top-menu');
                $this->load->view('admin/admin_default_format/admin-left-menu');
                $this->load->view('admin/admin_pages/register-page');
                $this->load->view('admin/admin_default_format/admin-footer');
            } else {
                redirect(base_url().'admin-login');
            }
    } // end of index function
    
    public function adminRegisterExec(){
        $adminRegisterValidation = array(
            array(
                'field' => 'admin_firstname',
                'label' => 'Firstname',
                'rules' => 'trim|required|min_length[3]'
            ),
            array(
                'field' => 'admin_lastname',
                'label' => 'Lastname',
                'rules' => 'trim|required|min_length[3]'
            ),
            array(
                'field' => 'admin_username',
                'label' => 'Username',
                'rules' => 'trim|required|is_unique[admin_user.admin_username]|min_length[4]'
            ),
            array(
                'field' => 'admin_password',
                'label' => 'Password',
                'rules' => 'trim|required|min_length[6]'
            ),
            array(
                'field' => 'admin_password_confirm',
                'label' => 'Confirm Password',
                'rules' => 'trim|required|matches[admin_password]'
            ),
            array(
                'field' => 'admin_email',
                'label' => 'Email',
                'rules' => 'trim|required|valid_email'
            ),
            array(
                'field' => 'admin_contact_no',
                'label' => 'Contact No.',
                'rules' => 'trim|required'
            ),
            array(
                'field' => 'admin_gender',
                'label' => 'Gender',
                'rules' => 'trim|required'
            ),
            array(
                'field' => 'admin_birthdate',
                'label' => 'Birthdate',
                'rules' => 'trim|required'
            )
        );
        $this->form_validation->set_rules($adminRegisterValidation);
        if($this->form_validation->run() == false){
            $this->index();
        }else{
            $this->load->library('hash');
            $adminCredentials = array(
                'admin_firstname' => $this->input->post('admin_firstname'),
                'admin_lastname' => $this->input->post('admin_lastname'),
                'admin_username' => $this->input->post('admin_username'),
                'admin_password' => md5($this->input->post('admin_password')),
                'admin_email' =>  $this->input->post('admin_email'),
                'admin_skype' => $this->input->post('admin_skype'),
                'admin_contact_no' => $this->input->post('admin_contact_no'),
                'admin_gender' => $this->input->post('admin_gender'),
                'admin_birthdate' =>  $this->input->post('admin_birthdate'),
            );
            
            $role = $this->input->post('admin_role');
            $secure = $this->security->xss_clean($adminCredentials);
            $addAction = $this->AdminRegisterModel->registerAdmin($secure, $role);
            
            $this->load->library('alert');
            
            if($addAction){
                $this->session->set_flashdata('admin_user_added_yes',$this->alert->successAlert('One admin user was successfully created.'));
            }else{
                $this->session->set_flashdata('admin_user_added_no',$this->alert->dangerAlert('Cannot add, there is an problem of adding admin user.'));
            }
            redirect(base_url().'index.php/AdminRegisterController');
            exit();
        }
    } //end of adminRegisterExec function
    
    
}

