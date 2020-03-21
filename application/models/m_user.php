<?php
class m_user extends CI_Model{
    // nama table
    private $table_name ='tbl_kandidat';
    private $table_name1 ='tbl_vote';
    private $table_name2 ='tbl_mahasiswa';
    private $table_name3 ='tbl_waktu';

    public function All_Data(){
    //    menampilkan data dari database table tbl_admin
    return $this->db->query('SELECT * FROM '.$this->table_name.' ORDER BY no_urut ASC');
      
    }
    public function input_data($data){
        $this->db->insert($this->table_name2,$data);
  }
   public function waktu(){
    //    menampilkan data dari database table tbl_admin
    return $this->db->query('SELECT * FROM '.$this->table_name3);
      
    }
    public function getlogin($npm,$pass){
    $where = array('npm_mhs' => $npm,
    'pass'=> $pass);
    // memproses data rows yang ada di sistem
    $check = $this->db->get_where($this->table_name2,$where);
    if($check->num_rows() > 0){
        //  ambil data dari check &pecah data
        foreach ($check->result() as $row) {
        $data= array(
            'nama'=> $row->nama,
            'npm_mhs'=> $row->npm_mhs,
            'pass'=> $row->pass,
            'tgl_lahir'=>$row->tgl_lahir,
            'jalur'=>$row->jalur,
            'jurusan'=>$row->jurusan,
            'fakultas'=>$row->fakultas,
            'angkatan'=>$row->angkatan,
            'email' => $row->email,
            'foto' => $row->foto,
            'ktm' => $row->ktm,
            'ket' => $row->ket
        );}
        // mengirim session data
        $this->session->set_userdata($data);
        $data['status'] = $this->m_voting->get_voting()->result();
        $data['vote'] = $this->m_voting->AllVoting()->result();
        $data['kandidat'] = $this->m_user->All_Data()->result();
        $data['waktu'] = $this->m_user->waktu()->result();
        //  jika benar diarahkan ke halaman admin
         $this->load->view('user/home',$data);
        }
     else{
       // MEMBERI SESSION STATUS
          redirect(base_url());
        }
  }
    public function AllVoting(){
    //   mencari jumlah voting kandidat ddan data dari kandidat tersebut
        return $this->db->query('
        SELECT k.nama as nama,k.foto as foto, count(v.id) as jumlah
        FROM '.$this->table_name.' AS k
        INNER JOIN '.$this->table_name1.' AS v
        ON k.npm_kd = v.npm_kd
        WHERE v.ket ="Sah"
        GROUP BY v.npm_kd
        ');
    }
    public function ProsesVote($data){
        $where = array('npm_mhs' => $data['npm_mhs'],
                        'ket'=> "Verifikasi");       
    // verifikasi data mahasiswa terverifikasi atau tidak
    $check = $this->db->get_where($this->table_name2,$where);
    // sistem melakukan validasi di dalam tabel
    if($check->num_rows() > 0){
            // proses memasukan data vote
            $this->db->insert($this->table_name1,$data);
                // MEMBERI SESSION STATUS
            $this->session->set_flashdata('notifvote',' class="text-success">
            <h4>Terimakasih Anda Telah Melakukan Voting,Semoga Himasi Bisa Lebih Baik Lagi.</h4>');
            redirect(base_url('home/vote'));
        }
    else {  
        /// MEMBERI SESSION STATUS
        $this->session->set_flashdata('notifvote',' class="text-warning">
        <h2> Maaf, Anda Belum Terverifikasi, Mohon Segera Hubungi Panitia!</h2>');
     
          redirect(base_url('home/vote'));
    }
       
    }
     public function AllKandidat(){
    //   mencari jumlah voting kandidat ddan data dari kandidat tersebut
        return $this->db->query('
        SELECT k.nama as nama,k.npm_kd as npm,k.tahun_pilih as periode,k.no_urut as no_urut, k.foto as foto
        FROM '.$this->table_name.' as k
        ');
    }

}