<?php 

class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('m_admin');
    }
    public function index()
    {
        $this->load->view('admin/login');   
    }
    
    // controler untuk signin ke sistem login
    public function signin(){
        
        if(isset($_POST['submit'])){
        $user = $this->input->post('user');
        $pass = $this->input->post('pass');
        // proses model m_admin
        $this->m_admin->getlogin($user,$pass);

        }
        else{
            $this->load->view('admin/login');
        }
    }
  
    
}
    