<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class My_Controller extends CI_Controller {

    private $data;
    
    public function __construct()
    {
        parent::__construct();
        $this->data['url'] = $this->config->load('urls',true);

    }
    
    

}

/* End of file My_COntroller.php */
