<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Db_login extends CI_Model {

    public function login_check($data){
        $array = array('user_email'=>$data['email'],'user_pass'=>md5($data['password']));
        return $this->db->where($array)->get('admin_user')->row_array();
    }

}

/* End of file Db_login.php */
