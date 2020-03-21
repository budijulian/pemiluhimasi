<?php 

class error extends CI_Controller{
  function __construct(){
        parent::__construct();
    }
    public function index()
    {
        // memanggil view user 
        $this->load->view('error');

    }
}