<?php

/* Author :  Webox Team
 * Date created : July 27, 2015.
 * Place : Boarding House
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployerMainPageC extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->library('alert');
        $this->load->model('EmployerCompanyModel');
        $this->load->model('EmployerUpdateModel');
    }
    
    public function postJob ($location) {
        
        if ($this->session->has_userdata('EmployerId') &&
                $this->session->has_userdata('EmployerFirstname') &&
                $this->session->has_userdata('EmployerLastname') &&
                $this->session->has_userdata('EmployerToken')
            ) {
            $data['title'] = 'Employer Posting Job';
            $this->load->view('visitor/employer_default/header',$data);
            $this->load->view('visitor/employer_default/top-menu');
            $data['location'] = $location;
            $data['employerCoins'] = $this->EmployerInfoModel->getCoins($this->session->userdata('employerId'));
            $this->load->view('visitor/employer_default/main-head',$data);
            $this->load->view('visitor/employer_pages/post-job');
            $this->load->view('visitor/employer_default/footer');
            $this->load->view('visitor/employer_modal/employer-about-posting-job');
            $this->load->view('visitor/employer_modal/employer-logout-modal');
        } else {
            redirect(base_url());
        }
    } // end of posting a job function
    
    public function addCompany ($location) {
        
        $validate = array(
            array(
                'field' => 'companyName',
                'label' => 'Company Name',
                'rules' => 'trim|required|is_unique[company_information.company_name]'
            ),
            array(
                'field' => 'companyAddressOne',
                'label' => 'Address One ( street address )',
                'rules' => 'trim|required'
            ),
            array(
                'field' => 'companyAddressTwo',
                'label' => 'Address Two ( barangay / landmark )',
                'rules' => 'trim|required'
            ),
            array(
                'field' => 'companyCity',
                'label' => 'City',
                'rules' => 'trim|required'
            ),
            array(
                'field' => 'companyProvince',
                'label' => 'Province',
                'rules' => 'trim|required'
            ),
            array(
                'field' => 'companyCountry',
                'label' => 'Country',
                'rules' => 'trim|required'
            ),
            array(
                'field' => 'companyDescription',
                'label' => 'Description',
                'rules' => 'trim|required'
            )
        );
        
        $this->form_validation->set_rules($validate);
        
        if ($this->form_validation->run() ==  false ) {
            $this->postJob($location);
        } else {
            $company = array(
                'company_name' => '<script>'.$this->input->post('companyName').'</script>',
                'company_address_one' => $this->input->post('companyAddressOne'),
                'company_address_two' => $this->input->post('companyAddressTwo'),
                'company_city' => $this->input->post('companyCity'),
                'company_province' => $this->input->post('companyProvince'),
                'company_country' => $this->input->post('companyCountry'),
                'company_description' => $this->input->post('companyDescription'),
                'company_video' => $this->input->post('companyVideo')
            );
            
            $checkData = $this->security->xss_clean($company);
            $remove = array("[removed]");
            $readyData = str_replace($remove, "",$checkData);
            
            $result = $this->EmployerCompanyModel->addCompanyExec($readyData);
            if ( $result['valid'] ==  true ) {
                $this->session->set_flashdata('CompanyAddedYes', $this->alert->successAlert($result['message']));
            } else {
                $this->session->set_flashdata('CompanyAddedNo', $this->alert->dangerAlert($result['message']));
            }
        }
        redirect(base_url().'index.php/EmployerMainPageC/postJob/'.$location);
        exit();
        
    } // end of function
    
    
    
    
    public function settings () {
        if ($this->session->has_userdata('EmployerId') &&
                $this->session->has_userdata('EmployerFirstname') && 
                $this->session->has_userdata('EmployerLastname') &&
                $this->session->has_userdata('EmployerToken')
           ) {
           $data['title'] = 'Employer Account Settings';
           $this->load->view('visitor/employer_default/header',$data);
           $this->load->view('visitor/employer_default/top-menu');
           $data['employerCoins'] = $this->EmployerInfoModel->getCoins($this->session->userdata('employerId'));
           $this->load->view('visitor/employer_default/main-head',$data);
           $data['employerData'] = $this->EmployerInfoModel->getOwnData($this->session->userdata('employerId'));
           $this->load->view('visitor/employer_pages/settings',$data);
           $this->load->view('visitor/employer_default/footer');
           $this->load->view('visitor/employer_modal/employer-about-posting-job');
           $this->load->view('visitor/employer_modal/employer-logout-modal');
        } else {
            redirect (base_url());
            exit();
        }
    }
    
    public function employerSettingsExec() {
        
        $updateValidate = array(
            array(
                'field' => 'employerFirstname',
                'label' => 'Firstname',
                'rules' => 'required'
            ),
            array(
                'field' => 'employerLastname',
                'label' => 'Lastname',
                'rules' => 'required'
            ),
            array(
                'field' => 'employerGender',
                'label' => 'Gender',
                'rules' => 'required'
            ),
            array(
                'field' => 'employerBirthdate',
                'label' => 'Birthdate',
                'rules' => 'required'
            ),
            array(
                'field' => 'employerAddress1',
                'label' => 'Address 1',
                'rules' => 'required'
            ),
            array(
                'field' => 'employerAddress2',
                'label' => 'Address 2',
                'rules' => 'required'
            ),
            array(
                'field' => 'employerCountry',
                'label' => 'Country',
                'rules' => 'required'
            ),
            array(
                'field' => 'employerStatus',
                'label' => 'Status',
                'rules' => 'required'
            )
        );
        $this->form_validation->set_rules($updateValidate);
        if ($this->form_validation->run() ==  false) {
            $this->settings();
        } else {
            $data = array(
                'employer_firstname' => $this->input->post('employerFirstname'),
                'employer_lastname' => $this->input->post('employerLastname'),
                'employer_gender' => $this->input->post('employerGender'),
                'employer_birth_date' => $this->input->post('employerBirthdate'),
                'employer_address_one' => $this->input->post('employerAddress1'),
                'employer_address_two' => $this->input->post('employerAddress2'),
                'employer_country' => $this->input->post('employerCountry'),
                'employer_status' => $this->input->post('employerStatus')
            );
            
            $result = $this->EmployerUpdateModel->update($data);
            if ($result['valid'] == false) {
                $this->session->set_flashdata('CannotUpdate',$this->alert->dangerAlert($result['message']));
            } else {
                $this->session->set_flashdata('UpdateOk',$this->alert->successAlert($result['message']));
           }
        }
        redirect(base_url().'index.php/EmployerMainPageC/settings');
        exit();
    }
}