
<?php
class AdminRegisterModel extends CI_Model{
    
    public function registerAdmin($data){
        $this->db->insert('admin_user',$data);
        $result = $this->registerAdminLog($data['admin_username']);
        return ($result['valid']) ? true : false;
    } //end of registerAdmin function
    
    private function registerAdminLog($adminUsername){
        $query = $this->db->query("SELECT id FROM admin_user WHERE admin_username = '$adminUsername'");
        if($query->num_rows()>0){
            date_default_timezone_set("Asia/Manila");
            $row = $query->row();
            $adminId = $row->id;
            $adminCreateLogs = array(
                'admin_id' => $adminId,
                'admin_role' => 1,
                'admin_created_date' => date('Y-m-d h:i:s')
            );
            $this->db->insert('admin_user_log',$adminCreateLogs);
            $result = array('valid' => true);
        }else{
            $result = array('valid' => false);
        }
        return $result;
    }
    
}
