<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class userModel extends CI_Model {

    function fetchModeldata(){
        $response = array();
        $this->db->select('*');
        $q = $this->db->get('userdata');
        $response = $q->result_array();
        return $response;
    }

    function signup($data){
        return $this->db->insert('userdata',$data);
    }
    function newsfeed($data){
        return $this->db->insert('newsfeed',$data);
    }
    
    }
?>