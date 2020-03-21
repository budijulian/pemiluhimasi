<?php

class m_mahasiswa extends CI_Model{
    // variabel grobal : nama table
    private $table_name ='tbl_mahasiswa';
    public function All_Mahasiswa(){
    //   ada dua cara menampilkan data
         return $this->db->query('SELECT * FROM '
         .$this->table_name.'
        ORDER BY timestamp DESC');
  }
  public function get_angkatan(){
     return $this->db->query('
     select count(angkatan) as angkatan from tbl_mahasiswa  GROUP BY angkatan');
  }
    public function input_data($data){
        $this->db->insert($this->table_name,$data);
  }
  public function hapus_data($npm){
      // menangkap parameter npm dari controler
      $where = array('npm_mhs'=> $npm);
      $this->db->where($where);
      $this->db->delete($this->table_name);
  }

  public function edit_data($npm){
     $where = array('npm_mhs' => $npm);
     return $this->db->get_where($this->table_name,$where);
      
  }
//   model u/ mengubah data
  public function update_data($where,$data,$table){
      $this->db->where($where);
      $this->db->update($table,$data);
  }
//   update varifikasi data mahasiswa 
    // model u/ mengverifikasi data
  public function verifikasi(){
        // mengambil nilai inputan dari view
        $npm = $this->input->post('npm');
        $veri = $this->input->post('verifikasi');
        // mengubah dalam bentuk array
        $data =array('ket' => $veri);
        $where = array(
            'npm_mhs'=> $npm );
      $this->db->where($where);
      $this->db->update($this->table_name,$data);
  }
  public function edit_email($npm){
     $where = array('npm_mhs' => $npm);
     return $this->db->get_where($this->table_name,$where);
      
  }
}