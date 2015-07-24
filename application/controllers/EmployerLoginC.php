<?php

/* Author :  Webox Team
 * Date created : July 18, 2015.
 * Place : Boarding House
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployerLoginC extends CI_Controller {
    
    public function index(){
        $this->load->library('clean');
        $this->load->library('alert');
        $email = $this->clean->cleanInput($this->input->post('email'));
        $password = $this->clean->cleanInput($this->input->post('password'));
        if ( empty($email) && empty($password) ){
            $this->session->set_flashdata('EmptyEmailPassword',$this->alert->dangerAlert('Empty Email / Password'));
            redirect(base_url());
            exit();
        } else {
            $result = $this->EmployerLoginModel->validateLogin($email,md5($password));
            if ($result){
                $this->session->set_userdata($result);
                redirect(base_url());
                exit();
            }else{
                $this->session->set_flashdata('CannotLogin',$this->alert->dangerAlert('Inable to login your acount. Error'));
                redirect(base_url());
                exit();
            }
        }
    }
}