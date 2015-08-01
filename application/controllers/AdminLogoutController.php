<?php

/* Author :  Webox Team
 * Date created : June 27, 2015.
 * Place : Boarding House
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminLogoutController extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->adminSes = array(
            'AdminId',
            'AdminFirstname',
            'AdminLastname',
            'AdminUsername',
            'AdminToken'
        );
        
        $this->load->model('AdminLogoutModel');
    }
    
    public function index(){
        
        $result = $this->AdminLogoutModel->logout();
        
        if ($result['valid'] == true || $result['valid'] == false) {
            $this->session->unset_userdata($this->adminSes);
            $this->session->sess_destroy();
            redirect(base_url().'index.php/AdminLoginController');
            exit();
        }
        
    }
}