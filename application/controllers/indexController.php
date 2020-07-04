<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class IndexController extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->config->load('urls',true);
        $data['url'] = array($this->config->item('urls'),"hello");
        $this->load->view('index',$data);
    }
    public function signup()
    {
        $this->load->model('userModel');
        $this->input->post('formSubmit');
        $this->form_validation->set_rules('email', '', 'is_unique[userdata.username]|required');
        $this->form_validation->set_rules('password', '', 'required');
        $this->form_validation->set_rules('name', '', 'required');
        $this->form_validation->set_rules('cpassword', '', 'required');
        if( $this->input->post('password')!= $this->input->post('cpassword'))
        {
            $this->session->set_flashdata('error','Password not matching'); 
            redirect(base_url()); 
        }
        else if ( preg_match('/\s/',$this->input->post('name')) || preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $this->input->post('name')) ){
            $this->session->set_flashdata('error','Do not use space or special character in name'); 
            redirect(base_url());
        }
        else if(strlen($this->input->post('password'))<6 ){
            $this->session->set_flashdata('error','Password lenght is smaller the 6 character'); 
            redirect(base_url()); 
        }
        else if ($this->form_validation->run()){ 
        $data = array(
            'name'    => $this->input->post('name'),
            'username' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            'dbcount'=>0,
            'usercount'=>0
        );
        if($this->userModel->signup($data)){
            $this->session->set_flashdata('success','Successfully Registred, Please Login to access you account'); 
            redirect(base_url()); 
        }
        else{
            $this->session->set_flashdata('error','Error In Submission'); 
            redirect(base_url()); 
            
        }
         

    }
    else{
        $this->session->set_flashdata('error','User already registred'); 
        redirect(base_url()); 
        
    }
}

    public function newsfeed()
    {
        $this->load->model('userModel');
        $this->input->post('formSubmit');
        $this->form_validation->set_rules('email', '', 'required');
        if ($this->form_validation->run()){ 
            $data = array(
                'email' => $this->input->post('email'),
            );

            if($this->userModel->newsfeed($data)){
                    $this->session->set_flashdata('success','Thank you for subscription'); 
                    redirect(base_url()); 
            }
            else{
                $this->session->set_flashdata('error','Error In Submission'); 
                redirect(base_url()); 
            }
        }
        else{
            $this->session->set_flashdata('error','Please Fill all Fields'); 
            redirect(base_url()); 
        }
    }

    public function login()
    {
        $this->load->model('userModel');
        $model_data=$this->userModel->fetchModeldata();
        $login_success=0;
        $user_data = array(
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
        );
        foreach ($model_data as $key => $value) {
            if($value['username']==$user_data['email'] && $value['password']==$user_data['password'])
            {
                $_SESSION["id"]=$value["id"];
                $_SESSION["name"]=$value["name"];
                $_SESSION["email"]=$value["username"];
                $_SESSION["dbcount"]=$value["dbcount"];
                $_SESSION["usercount"]=$value["usercount"];
                $login_success=1;
                break;
            }
        }
        if($login_success==1){
            // $this->session->set_flashdata('success','Logged In Successfully'); 
            redirect(base_url()); 
        }
        else{
            $this->session->set_flashdata('error','Wrong Username Or Password'); 
            redirect(base_url()); 
        }
    }
    public function logout(){
            session_destroy();
            unset($_SESSION["name"]);
            unset($_SESSION["email"]);
            unset($_SESSION["dbcount"]);
            redirect(base_url()); 
    }
}

/* End of file Login.php */
