<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Site_setting extends CI_Controller {

    public function index()
    {
        $this->load->view('admin/common/header');
        $this->load->view('admin/common/sidebar');
        $this->load->view('admin/core/site_setting');
        $this->load->view('admin/common/footer');
    }

}

/* End of file Site_setting.php */
