<?php 

class kandidat extends CI_Controller{
    function __construct(){
        parent::__construct();
        // inisialisasi model yang akan di load
        $this->load->model('m_kandidat');
        $this->load->helper('url');
    }

    public function index()
    {   
         // security access melihat session ada atau tidak 
         if($this->session->userdata('nama')==TRUE){

        // load database dari model untuk dihubungkan ke dalam view
        $data['title'] = "Kandidat";
        // load database dari model untuk dihubungkan ke dalam view
        $data['kandidat'] = $this->m_kandidat->All_Kandidat()->result();
        // memanggil banyak view yang sudah dipecah
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/kandidat/kandidat',$data);
        $this->load->view('admin/footer');
         }
    else{
    // pindah ke halaman secara otomatis
     redirect(base_url().'admin/login');
    }
}
    public function edit($npm){
        $data['kandidat'] = $this->m_kandidat->edit_data($npm)->result();
        $status['title']= "Edit Data Kandidat";
      	$this->load->view('admin/header',$status);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/kandidat/edit',$data);
		$this->load->view('admin/footer');
        }
     public function ubahdata($npm){
       // mengambil nilai inputan dari view
        // $npm = $this->input->post('npm');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $jurusan = $this->input->post('jurusan');
        $fakultas = $this->input->post('fakultas');
        $visi = $this->input->post('visi');
        $misi = $this->input->post('misi');
        $misi = $this->input->post('link');
        
        $tahun_pilih = $this->input->post('tahun_pilih');
        $no_urut = $this->input->post('no_urut');


        
         $foto = $_FILES['foto']['name'];

        if($foto =""){}else{
            $config['upload_path'] = './assets/img/mahasiswa';
            $config['allowed_types']="png|jpg|jpeg|gif";
            
            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('foto')){
                echo "Upload Gagal"; die();
            }
            else{
                $foto =$this->upload->data('file_name');
            }
        }
        // mengubah dalam bentuk array
        $data =array(
            'nama' => $nama,
            'email'=> $email,
            'tgl_lahir'=>$tgl_lahir,
            'jurusan'=> $jurusan,
            'fakultas'=> $fakultas,
            'foto'=> $foto,
            'tahun_pilih'=> $tahun_pilih,
            'visi'=> $visi,
            'misi'=>$misi,
            'link'=>$link,
            'no_urut'=> $no_urut
        );
        $where = array(
            'npm_kd'=> $npm
        );
        $this->m_kandidat->update_data($where,$data,'tbl_kandidat');
       
        // pindah ke halaman secara otomatis
        redirect(base_url().'admin/kandidat/');
        }
     
        public function tambah(){

        $npm = $this->input->post('npm');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $jurusan = $this->input->post('jurusan');
        $fakultas = $this->input->post('fakultas');
        $no_urut = $this->input->post('no_urut');
        $visi = $this->input->post('visi');
        $tahun_pilih = $this->input->post('tahun_pilih');
        $misi = $this->input->post('misi');
        $foto = $_FILES['foto']['name'];


        if($foto =""){}else{
            $config['upload_path'] = './assets/img/kandidat';
            $config['allowed_types']="png|jpg|jpeg|gif";
            
            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('foto')){
                echo "Upload Gagal"; die();
            }
            else{
                $foto =$this->upload->data('file_name');
            }
        }
          $data =array(
            'npm_kd' => $npm,
            'nama' => $nama,
            'email' => $email,
            'tgl_lahir'=> $tgl_lahir,
            'jurusan'=> $jurusan,
            'fakultas' => $fakultas,
            'misi'=>$misi,
            'visi'=> $visi,
            'tahun_pilih' => $tahun_pilih,
            'no_urut' =>$no_urut,
			'foto'=> $foto
        );
          $this->m_kandidat->input_data($data);
        $this->session->set_flashdata('message',' class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4>Tambah!</h4> Data Berhasil Ditambahkan!! ');
        // kembali ke controler mahasiswa method index
         // direct link halaman dasboard
        redirect(base_url().'admin/kandidat');

        }
    public function hapus($npm){
        // proses penghapusan data oleh model
        $this->m_kandidat->hapus_data($npm);
        // direct link halaman dasboard home
        redirect(base_url().'admin/kandidat/');
    }

  
}
    