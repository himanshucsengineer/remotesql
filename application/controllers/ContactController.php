<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class contactController extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->config->load('urls',true);
        $data['url'] = array($this->config->item('urls'),"hello");
        $this->load->view('contact',$data);
    }
}

/* End of file Login.php */
