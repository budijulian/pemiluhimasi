<?php
class m_voting extends CI_Model{

private $table_name1 = "tbl_kandidat";
private $table_name2 = "tbl_vote";
private $table_name3 = "tbl_mahasiswa";

    public function AllVoting(){
    //   mencari jumlah voting kandidat dan data dari kandidat tersebut
        return $this->db->query('
        SELECT k.nama as nama,k.npm_kd as npm,k.tahun_pilih as periode,k.no_urut as no_urut,
         k.foto as foto, count(v.id) as jumlah 
         FROM '.$this->table_name1.' AS k 
         INNER JOIN '.$this->table_name2.' AS v 
         ON k.no_urut = v.pilihan 
         WHERE v.ket ="Sah" 
         GROUP BY v.pilihan 
         ORDER BY v.pilihan
        ');
    }

    public function get_voting(){
        return $this->db->query('
        select
        count(DISTINCT m.npm_mhs) as total_mhs,
        m.nama as nama, 
        count(DISTINCT kd.npm_kd) as total_kd, 
        count(DISTINCT v.npm_mhs) as total_vote
        from '.$this->table_name3.' as m 
        inner join '.$this->table_name1.' as kd
        inner join '.$this->table_name2.' as v
        ');
    }
    public function get_suaravalid(){
        return $this->db->query('
        select count(*) as total_tidaksah from
        '.$this->table_name2.' where ket ="Tidak Sah"
        ');
    }
    public function get_datavote(){
        return $this->db->query('
        SELECT
        m.npm_mhs as npm_mhs,
        m.nama as nama,
        v.waktu as waktu,
        v.ket as ket,
        v.pilihan as pilihan,
        v.periode as periode
        FROM '.$this->table_name3.' as m
        INNER JOIN '.$this->table_name2.' as v
        ON m.npm_mhs = v.npm_mhs
        ORDER BY waktu DESC
        ');
    }
    public function update_data($where,$data,$table){
    $this->db->where($where);
    $this->db->update($table,$data);
    }
    
}