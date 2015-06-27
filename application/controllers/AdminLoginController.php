<?php
/* Author :  Webox Team
 * Date created : June 27, 2015.
 * Place : Boarding House
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminLoginController extends CI_Controller {
    public function index(){
       $data['title'] = 'Admin Login';
       $this->load->view('admin/admin_default_format/admin-header',$data);
       $this->load->view('admin/admin_pages/login-page');
       $this->load->view('admin/admin_default_format/admin-footer');
    }
    public function loginExec(){
       $adminLoginData  =   array(
            array(
            'field' =>  'username',
            'label' =>  'User Name',
            'rules' =>  'required|trim'
                ),
            array(
                'field' =>  'password',
                'label' =>  'Password',
                'rules' =>  'required|trim'
            )
        );
        $this->form_validation->set_rules($adminLoginData);
        if($this->form_validation->run()==FALSE){
            echo validation_errors();
        }
        else{
           $this->checkDatabase($this->input->post('password'));
       }
    }
    
    public function checkDatabase($password){
        $this->load->library('hash');
        $username = $this->input->post('username');
        $password = $this->hash->passwordHash($password);
        $result = $this->AdminLoginModel->login($username,$password);
        if($result){
            $sess_array = array();
            foreach($result as $row){
                $sess_array = array(
                    'id' => 'john',
                    'username' => 'robert'
                );
            }
        }else{
            echo 'Invalid Password / Username';
        }
    }
    
}

