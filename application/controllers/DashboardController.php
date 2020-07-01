<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->config->load('urls',true);
        $data['url'] = $this->config->item('urls');
        $this->load->view('dashboard',$data);
    }
}


