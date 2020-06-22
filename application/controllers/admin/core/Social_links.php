<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Social_links extends CI_Controller {

    public function index()
    {
        $this->load->view('admin/common/header');
        $this->load->view('admin/common/sidebar');
        $this->load->view('admin/core/social_links');
        $this->load->view('admin/common/footer');
    }

}

/* End of file Social_links.php */
