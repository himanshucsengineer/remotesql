<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {   $this->load->model('dashboardModel');
        $result = $this->dashboardModel->get_user();
        $result2 = $this->dashboardModel->get_dblist();
        $this->config->load('urls',true);
        $data['url'] = array($this->config->item('urls'),$result,$result2);
        $this->load->view('dashboard',$data);
    }

    public function newdatabase(){
        $this->load->model('dashboardModel');
        $dbname= $_SESSION['id']."_".$this->input->post('dbname');

        if(strlen($this->input->post('dbname'))<3 || strlen($this->input->post('dbname'))>8){
            $this->session->set_flashdata('error','Database lenght should be in between 3 to 8 charcters'); 
            redirect(base_url()."dashboard");
        }
        else if($this->dashboardModel->add_db($dbname)){
            $this->session->set_flashdata('success','DataBase Added Succefully'); 
            redirect(base_url()."dashboard");
        }
        else{
            $this->session->set_flashdata('error','Server is down Please try again after sometime'); 
            redirect(base_url()."dashboard");
        }
    }

    public function newuser(){
        $this->load->model('dashboardModel');
        $data = array(
            'username'    => $_SESSION['email'],
            'sqlusername' => $_SESSION['id']."_".$this->input->post('username'),
            'sqlpassword' => $this->input->post('password'),
        );

        if( $this->input->post('password')!= $this->input->post('cpassword'))
        {
            $this->session->set_flashdata('error','Password not matching'); 
            redirect(base_url()."dashboard"); 
        }
        else if(strlen($this->input->post('password'))<6){
            $this->session->set_flashdata('error','Password length should be 6 or more'); 
            redirect(base_url()."dashboard");
        }
        else if($this->dashboardModel->add_user($data)){
            $this->session->set_flashdata('success','User Added Succefully'); 
            redirect(base_url()."dashboard");
        }
        else{
            $this->session->set_flashdata('error','Server is down Please try again after sometime'); 
            redirect(base_url()."dashboard");
        }
    }

    public function addusertodb(){
        $this->load->model('dashboardModel');
        $result = $this->dashboardModel->getuserforDB($this->input->post('database'));
        foreach ($result["all_data"] as $perreq) 
        {
            $usersstring=$perreq->sqluserids;
            $split = explode(",",$perreq->sqluserids);
        }
        foreach($split as $users){
            if($this->input->post('user')==$users){
                $this->session->set_flashdata('error','User already added To database'); 
                redirect(base_url()."dashboard");
                return 0;
            }
        }
        
        $data=array("database"=>$this->input->post('database'),
                    "user"=>$this->input->post('user'),
                    "userstring"=>$usersstring);
        if($this->dashboardModel->addusertoDB($data)){
            $this->session->set_flashdata('success','User Added Succefully'); 
            redirect(base_url()."dashboard");
        }
        else{
            $this->session->set_flashdata('error','Server Issue Please try again after sometime or Contact Support team'); 
            redirect(base_url()."dashboard");
        }
    }
}


