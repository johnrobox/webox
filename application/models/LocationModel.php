<?php

class LocationModel extends CI_Model {
    
    public function getAllLocation(){
        $query = $this->db->get('job_location');
        return $query->result();
    }
}
