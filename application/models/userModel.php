<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class userModel extends CI_Model {
    function signup($data){
        return  $this->db->insert('userdata',$data);
    }
    
    }
?>