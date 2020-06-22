<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

    public function index()
    {
        $this->load->view('admin/common/header');
        $this->load->view('admin/common/sidebar');
        $this->load->view('admin/legal/about');
        $this->load->view('admin/common/footer');
    }

}

/* End of file About.php */
