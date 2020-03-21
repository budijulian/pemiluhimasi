<?php
class m_admin extends CI_Model{
    // nama table
    private $table_name ='tbl_admin';
    private $table_name3 ='tbl_waktu';
    
    public function All_Admin(){
        
    //    menampilkan data dari database table tbl_admin
    return $this->db->query('SELECT * FROM '
    .$this->table_name.'
    WHERE user= julian');
  }
  public function getlogin($user,$pass){
   $where = array('user' => $user,
   'pass'=> $pass
  );
  // memproses data rows yang ada di sistem
   $check = $this->db->get_where($this->table_name,$where);
   if($check->num_rows() > 0){
    //  ambil data dari check &pecah data
    foreach ($check->result() as $row) {
      $data= array(
        'nama'=> $row->nama,
        'user' => $row->user,
        'email' => $row->email,
        'foto' => $row->foto
    );}
    // mengirim session 
    $this->session->set_userdata($data);
    //  jika benar diarahkan ke halaman admin
      redirect(base_url().'admin/');
    }
     else{
       // MEMBERI SESSION STATUS
    $this->session->set_flashdata('notiflogin',' class="text-info">
    <h4>Notifikasi!</h4> Password atau User Anda Salah!!');
      //  jika berbeda akan diarahkan ke login
       redirect(base_url().'admin/login');
    }
  }
   public function waktu(){
    //    menampilkan data dari database table tbl_admin
    return $this->db->query('SELECT * FROM '.$this->table_name3);
      
    }
 
}
