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
       $validateLogin = array(
           array (
               'field' => 'username',
               'label' => 'Username',
               'rules' => 'required'
           ),
           array(
               'field' => 'password',
               'label' => 'Password',
               'rules' => 'required'
           )
       );
       $this->form_validation->set_rules($validateLogin);
       if($this->form_validation->run() == false){
           $this->index();
       } else {
           $adminCred = array(
               'admin_username' => $this->clean($this->input->post('username')),
               'admin_password' => $this->clean($this->input->post('password'))
           );
           $result = $this->AdminLoginModel->login($adminCred);
           if ($result['valid'] ==  true){
               $this->session->set_userdata($result['return']);
               redirect(base_url().'index.php/AdminHomepageController');
               exit();
           } else {
               $this->load->library('alert');
               $this->session->set_flashdata('InvalidLogin',$this->alert->dangerAlert('Invalid Password / Username'));
               redirect(base_url().'index.php/AdminLoginController');
               exit();
           }
       }
    }
    
    public function checkDatabase($username,$password){
        $result = $this->AdminLoginModel->login($username,$password);
        if($result){
            return true;
        }else{
            return false;
        }
    }
    
    private function clean($str) {
	$str = @trim($str);
	if(get_magic_quotes_gpc()) {
            $str = stripslashes($str);
	}
	return mysql_real_escape_string($str);
    }
    
    
}

