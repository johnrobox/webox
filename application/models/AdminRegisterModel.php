
<?php
class AdminRegisterModel extends CI_Model{
    
    public function registerAdmin($dataJson){
        $dataJson = json_decode($dataJson, true);
        $adminCredentials = array(
            'admin_firstname' => $dataJson['firstname'],
            'admin_lastname' => $dataJson['lastname'],
            'admin_username' => $dataJson['username'],
            'admin_password' => $dataJson['password'],
            'admin_email' => $dataJson['email'],
            'admin_skype' => $dataJson['skype'],
            'admin_contact_no' => $dataJson['contact'],
            'admin_gender' => $dataJson['gender'],
            'admin_birthdate' =>$dataJson['birthdate']
        );
        $this->db->insert('admin_user',$adminCredentials);
        $adminUsername = $dataJson['username'];
        $log = $this->registerAdminLog($adminUsername);
        if($log){
            return true;
        }else{
            return false;
        }
    } //end of registerAdmin function
    
    private function registerAdminLog($adminUsername){
        $query = $this->db->query("SELECT id FROM admin_user WHERE admin_username = '$adminUsername'");
        if($query->num_rows()>0){
            date_default_timezone_set("Asia/Manila");
            foreach($query->result() as $row){
                $adminId = $row->id;
            }
            $adminCreateLogs = array(
                'admin_id' => $adminId,
                'admin_role' => 1,
                'admin_created_date' => date('Y-m-d h:i:s')
            );
            $this->db->insert('admin_user_log',$adminCreateLogs);
            return true;
        }else{
            return false;
        }
    }
    
}
