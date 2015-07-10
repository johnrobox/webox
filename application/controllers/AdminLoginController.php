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
       $adminUsername = $this->clean($this->input->post('username'));
       $adminPassword = $this->clean($this->input->post('password'));
       if($adminUsername==''||$adminPassword==''){
           echo 'Username / Password required.';
       }else{
           if($this->checkDatabase($adminUsername,$adminPassword))
                echo true;
           else
               echo 'Invalid Password / Username';
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

