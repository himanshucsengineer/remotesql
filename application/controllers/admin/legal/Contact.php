<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function index()
    {
        $this->load->view('admin/common/header');
        $this->load->view('admin/common/sidebar');
        $this->load->view('admin/legal/contact');
        $this->load->view('admin/common/footer');
    }

}

/* End of file Contact.php */
