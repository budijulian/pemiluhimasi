<?php 

class user extends CI_Controller{
  function __construct(){
        parent::__construct();
        $this->load->model('m_user');
        $this->load->model('m_voting');
        $this->load->model('m_mahasiswa');
        $this->load->helper('url','form');
    }
    public function index()
    {
        // memanggil view user 
        $data['kandidat'] = $this->m_user->All_Data()->result();
        $data['waktu'] = $this->m_user->waktu()->result();
        $this->load->view('user/index',$data);
    
    }
    
     public function daftar()
    {
        $data['waktu'] = $this->m_user->waktu()->result();
        $this->load->view('user/daftar',$data);
    }
     public function tambah(){
            // mengambil nilai inputan dari view
        $npm = $this->input->post('npm');
        $nama = $this->input->post('nama');
        $pass = $this->input->post('pass');
        $email = $this->input->post('email');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $jurusan = $this->input->post('jurusan');
        $angkatan = $this->input->post('angkatan');
        $fakultas = $this->input->post('fakultas');
        $jalur = $this->input->post('jalur');
        $ktm = $_FILES['ktm']['name'];
        $foto = $_FILES['foto']['name'];
       
        if($ktm =""&& $foto=""){}else{
            $config['upload_path'] = './assets/img/mahasiswa';
            $config['allowed_types']="png|jpg|jpeg|gif";
            // foto 1
            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('ktm')){
                echo "Upload Gagal"; die();
            }
            else{
                $ktm =$this->upload->data('file_name');
            }
            // foto 2
            if(!$this->upload->do_upload('foto')){
                echo "Upload Gagal"; die();
            }
            else{
                $foto =$this->upload->data('file_name');
            }
        }
        // mengubah dalam bentuk array

        $data =array(
            'npm_mhs' => $npm,
            'pass' => $pass,
            'nama' => $nama,
            'email' => $email,
            'angkatan'=> $angkatan,
            'tgl_lahir'=> $tgl_lahir,
            'jurusan'=> $jurusan,
            'fakultas'=> $fakultas,
            'jalur'=>$jalur,
            'foto'=> $foto,
			 'ktm'=> $ktm
        );
        // mengeksekusi model user method inputdata untuk tambah data
        $this->m_user->input_data($data);
        // membuat session
        $this->session->set_userdata($data);
           redirect(base_url('home'));
    }
    public function home()
    {
          // security access melihat session ada atau tidak 
        if($this->session->userdata('npm_mhs')==TRUE){
        // memanggil view user 
        $data['status'] = $this->m_voting->get_voting()->result();
        $data['vote'] = $this->m_voting->AllVoting()->result();
        $data['kandidat'] = $this->m_user->All_Data()->result();
        $data['waktu'] = $this->m_user->waktu()->result();
        // $data['vote'] = $this->m_user->AllVoting()->result();
        $this->load->view('user/home',$data);
         }
        else{
            
        // pindah ke halaman secara otomatis
        redirect(base_url());
        }
    }
  // controler untuk signin ke sistem login
    public function signin(){
        if(isset($_POST['submit'])){
        $user = $this->input->post('npm');
        $pass = $this->input->post('pass');
        // proses model m_admin
        $this->m_user->getlogin($user,$pass);
        }
        else{
           redirect(base_url());
        }
    }
     public function logout(){
        session_destroy();
        // pindah ke halaman secara otomatis
        redirect(base_url());
    }
     public function ubahdata(){
        
        $npm_mhs = $this->input->post('npm_mhs');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $pass = $this->input->post('pass');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $jurusan = $this->input->post('jurusan');
        $fakultas = $this->input->post('fakultas');
        $angkatan = $this->input->post('angkatan');
        $jalur = $this->input->post('jalur');
        $ktm = $_FILES['ktm']['name'];

        if($ktm=""){}else{
            $config['upload_path'] = './assets/img/mahasiswa';
            $config['allowed_types']="png|jpg|jpeg|gif";
            
            
            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('ktm')){
                echo "Upload Gagal"; die();
            }
            else{
                $ktm =$this->upload->data('file_name');
            }
        }
        
        $data =array(
            'nama' => $nama,
            'email'=> $email,
            'pass' => $pass,
            'tgl_lahir'=>$tgl_lahir,
            'jurusan'=> $jurusan,
            'fakultas'=> $fakultas,
            'angkatan'=> $angkatan,
            'jalur'=> $jalur,
            'ktm'=> $ktm
        );
        $where = array(
            'npm_mhs'=> $npm_mhs
        );
        $this->m_mahasiswa->update_data($where,$data,'tbl_mahasiswa');
        // pindah ke halaman secara otomatis
        redirect(base_url().'home');
    }
  
    // public function ubahdata(){
        
    //     $npm_mhs = $this->input->post('npm_mhs');
    //     $nama = $this->input->post('nama');
    //     $email = $this->input->post('email');
    //     $pass = $this->input->post('pass');
    //     $tgl_lahir = $this->input->post('tgl_lahir');
    //     $jurusan = $this->input->post('jurusan');
    //     $fakultas = $this->input->post('fakultas');
    //     $angkatan = $this->input->post('angkatan');
    //     $jalur = $this->input->post('jalur');
    //     $ktm = $_FILES['ktm']['name'];

    //     if($foto ="" && $ktm=""){}else{
    //         $config['upload_path'] = './assets/img/mahasiswa';
    //         $config['allowed_types']="png|jpg|jpeg|gif";
            
    //         $this->load->library('upload',$config);
    //         if(!$this->upload->do_upload('ktm')){
    //             echo "Upload Gagal"; die();
    //         }
    //         else{
    //             $ktm =$this->upload->data('file_name');
    //         }
    //     }
        
    //     $data =array(
    //         'nama' => $nama,
    //         'email'=> $email,
    //         'pass' => $pass,
    //         'tgl_lahir'=>$tgl_lahir,
    //         'jurusan'=> $jurusan,
    //         'fakultas'=> $fakultas,
    //         'angkatan'=> $angkatan,
    //         'jalur'=> $jalur,
    //         'ktm'=> $ktm,
    //     );
    //     $where = array(
    //         'npm_mhs'=> $npm
    //     );
    //     $this->m_mahasiswa->update_data($where,$data,'tbl_mahasiswa');
    //     // pindah ke halaman secara otomatis
    //     redirect(base_url().'signin');
    // }
  

    public function vote(){

          // security access melihat session ada atau tidak 
        if($this->session->userdata('npm_mhs')==TRUE){
        
        // $data['status'] = $this->m_voting->get_voting()->result();
        // $data['vote'] = $this->m_voting->AllVoting()->result();
        $data['kandidat'] = $this->m_user->AllKandidat()->result();
        $data['waktu'] = $this->m_user->waktu()->result();
        $this->load->view('user/vote',$data);
         }
        else{
            
        // pindah ke halaman secara otomatis
        redirect(base_url());
        }

    }
        public function voting(){
        // data voting mahasiswa
         $npm_mhs = $this->input->post('npm_mhs');
         $npm_kd = $this->input->post('npm_kd');
         $no_urut = $this->input->post('no_urut');
         $tahun_pilih = $this->input->post('tahun_pilih');
        
        $data =array(
            'npm_mhs' => $npm_mhs,
            'npm_kd' => $npm_kd,
            'pilihan'=> $no_urut,
            'periode'=> $tahun_pilih,
            'ket'=> "Sah"
        );        
        $this->m_user->ProsesVote($data);
        }
}