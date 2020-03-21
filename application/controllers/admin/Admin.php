<?php 

class Admin extends CI_Controller{
    function __construct(){
        parent::__construct();
        // inisialisasi model yang akan di load
        $this->load->model('m_mahasiswa');
        $this->load->model('m_voting');
        $this->load->model('m_user');
        $this->load->helper('url');
    }

    public function index()
    {
        // security access melihat session ada atau tidak 
        if($this->session->userdata('nama')==TRUE){
        
        $status['title']= "Halaman Dashboard";
        $data['mahasiswa'] = $this->m_mahasiswa->All_Mahasiswa()->result();
        $data['status'] = $this->m_voting->get_voting()->result();
        $data['angkatan'] = $this->m_mahasiswa->get_angkatan()->result();
        $data['waktu'] = $this->m_user->waktu()->result();
        // $data['waktu'] = $this->m_admin->waktu()->result();

        // memanggil banyak view yang sudah dipecah
		$this->load->view('admin/header',$status);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/home',$data);
        $this->load->view('admin/footer');
            
        }
        else{
            
        // pindah ke halaman secara otomatis
        redirect(base_url().'admin/login');
        }
    }
    public function logout(){
        session_destroy();
        // pindah ke halaman secara otomatis
        redirect(base_url().'admin/login');
    }

}