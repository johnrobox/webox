<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Alert{
    
    public function dangerAlert($message){
        $alert = $this->alertDiv('alert-danger', 'glyphicon-remove').$message.'</div>';
        return $alert;
    }
    public function warningAlert($message){
        $alert = $this->alertDiv('alert-warning', 'glyphicon-warning-sign').$message.'</div>';
        return $alert;
    }
    public function successAlert($message){
        $alert = $this->alertDiv('alert-success', 'glyphicon-check').$message.'</div>';
        return $alert;
    }
    public function infoAlert($message){
        $alert = $this->alertDiv('alert-info', 'glyphicon-info-sign').$message.'</div>';
        return $alert;
    }
    
    private function alertDiv($alert,$font){
        $alertStyle = '<div class="alert '.$alert.'" role="alert"><span class="glyphicon '.$font.'"></span> ';
        return $alertStyle;
    }
    
}