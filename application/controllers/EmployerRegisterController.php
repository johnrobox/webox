<?php

/* Author :  Webox Team
 * Date created : July 7, 2015.
 * Place : Boarding House
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployerRegisterController extends CI_Controller {
    
    public function index(){
        $data['title'] = 'Employer Registration';
        $this->load->view('visitor/employer_default/header',$data);
        $this->load->view('visitor/employer_default/top-menu');
        $this->load->view('visitor/employeer_pages/employer-registration');
        $this->load->view('visitor/employer_default/footer');
    }//end of index function
    
    public function registerEmployerExec(){
        $validateRegistration = array(
            array(
                'field' => 'employerEmail',
                'label' => 'Email',
                'rules' => 'trim|required|valid_email|is_unique[employer_member.employer_email]'
            ),
            array(
                'field' => 'employerPassword',
                'label' => 'Password',
                'rules' => 'trim|required|min_length[6]'
            ),
            array(
                'field' => 'employerPasswordConfirm',
                'label' => 'Password Confirm',
                'rules' => 'trim|required|matches[employerPassword]'
            ),
            array(
                'field' => 'employerFirstname',
                'label' => 'Firstname',
                'rules' => 'trim|required'
            ),
            array(
                'field' => 'employerLastname',
                'label' => 'Lastname',
                'rules' => 'trim|required'
            ),
            array(
                'field' => 'employerGender',
                'label' => 'Gender',
                'rules' => 'trim|required'
            ),
            array(
                'field' => 'employerBirthdateM',
                'label' => 'Month',
                'rules' => 'trim|required'
            ),
            array(
                'field' => 'employerBirthdateD',
                'label' => 'Day',
                'rules' => 'trim|required'
            ),
            array(
                'field' => 'employerBirthdateY',
                'label' => 'Year',
                'rules' => 'trim|required'
            ),
            array(
                'field' => 'employerAddressOne',
                'label' => 'Address1',
                'rules' => 'trim|required'
            ),
            array(
                'field' => 'employerAddressTwo',
                'label' => 'Address2',
                'rules' => 'trim|required'
            ),
            
            array(
                'field' => 'employerCountry',
                'label' => 'Country',
                'rules' => 'trim|required'
            ),
            array(
                'field' => 'employerStatus',
                'label' => 'Status',
                'rules' => 'trim|required'
            )
        );
        $this->form_validation->set_rules($validateRegistration);
        if($this->form_validation->run() == false){
            $this->index();
        }else{
            $email = $this->input->post('employerEmail');
            $password = $this->input->post('employerPassword');
            $firstname = $this->input->post('employerFirstname');
            $lastname = $this->input->post('employerLastname');
            $gender = $this->input->post('employerGender');
            $birthdate = $this->input->post('employerBirthdateM').' '.$this->input->post('employerBirthdateD').' '.$this->input->post('employerBirthdateY');
            $address1 = $this->input->post('employerAddressOne');
            $address2 = $this->input->post('employerAddressTwo');
            $country = $this->input->post('employerCountry');
            $status = $this->input->post('employerStatus');
            $param = array(
                'employer_email' => $email,
                'employer_password' => md5($password),
                'employer_firstname' => $firstname,
                'employer_lastname' => $lastname,
                'employer_gender' => $gender,
                'employer_birthdate' => $birthdate,
                'employer_address_1' => $address1,
                'employer_address_2' => $address2,
                'employer_country' => $country,
                'employer_status' => $status
            );
            $insert = $this->EmployerRegisterModel->registerEmployer($param);
            if($insert){
                $this->load->library('alert');
                $this->session->set_flashdata('employer_registration_success',$this->alert->successAlert('You are successfully registered. Thank you'));
                redirect(base_url());
                exit();
            }else{
                $this->index();
            }
        }
    }
}
