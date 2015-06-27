<?php

/* Author :  Webox Team
 * Date created : June 27, 2015.
 * Place : Boarding House
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminRegisterController extends CI_Controller {
    
    public function index(){
        $data['title'] = 'Admin Register';
        $this->load->view('admin/admin_default_format/admin-header',$data);
        $this->load->view('admin/admin_pages/register-page');
        $this->load->view('admin/admin_default_format/admin-footer');
    }
}