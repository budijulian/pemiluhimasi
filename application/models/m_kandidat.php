<?php


class m_kandidat extends CI_Model{
    // variabel grobal : nama table
    private $table_name ='tbl_kandidat';

    public function All_Kandidat(){
    //   ada dua cara menampilkan data
    return $this->db->query('SELECT * FROM '
         .$this->table_name.'
        ORDER BY nama ASC');
  }
    public function input_data($data){
      $this->db->insert($this->table_name,$data);
  }
  public function hapus_data($npm){
      // menangkap parameter npm dari controler
      $where = array('npm_kd'=> $npm);
      $this->db->where($where);
      $this->db->delete($this->table_name);
  }


  public function edit_data($npm){
     $where = array('npm_kd' => $npm);
     return $this->db->get_where($this->table_name,$where);
      
  }
   
//   model u/ mengubah data
  public function update_data($where,$data,$table){
      $this->db->where($where);
      $this->db->update($table,$data);
  }
//   update varifikasi data mahasiswa 
 
  
}