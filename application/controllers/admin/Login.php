<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('db_login');
        
        
    }
    public function index()
    {
        $this->config->load('urls',true);
        $data['url'] = $this->config->item('urls');
        $this->load->view('admin/login',$data);
        
    }
    public function login_check(){
    $this->form_validation->set_rules('email', 'Email', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'required');
    
    if ($this->form_validation->run()) {
        $data['email'] = $this->input->post('email');
        $data['password'] = $this->input->post('password');
        $check =  $this->db_login->login_check($data);
        if(isset($check))
        {
            $this->session->set_userdata("id",$check['user_id']);
            $array = array(
                'error'   => false,
                'msg'     => base_url().'admin/dashboard',
               );
        }
        else
        {
            $array = array(
                'error'   => true,
                'msg'     => '<p class="text-center text-danger">Wrong Username Or Password</p>'
               );
        }
      
    }
    else 
    {
        $array = array(
            'form'   => true,
            'msg'   => '<p class="text-center text-danger">Please Fill All Fields</p>',
           );
    } 
         echo json_encode($array);
    }

}

/* End of file Login.php */
