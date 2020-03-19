<?php 
//  berfungsi untuk melayani segala query CRUD database
class M_data extends CI_Model{
  // function untuk mengambil keseluruhan baris data dari tabel user
  // kedua fungsi ini tampil_data dan tampil_data2 harusnya bisa jd satu
  // tampil_data dipake di mana?
  // sek lupa
  public function tampil_data($table){
    return $this->db->get($table);
  }
    // public function tampil_data2(){
    //   return $this->db->get('tb_admin');
    //   }
    
    public function viewall(){
      $this->db->select('*');
      $this->db->from('tb_produk');
      // $this->db->join('tb_kategori', 'tb_kategori.id_kategori = tb_produk.id_kategori');
      $query = $this->db->get();
      return $query->result();
    }

    function input_data($data,$table){
      $this->db->insert($table,$data);
      }

      function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    function edit_data($where,$table){		
      return $this->db->get_where($table,$where);
  }
  // method untuk mengupdate data ke dalam database 
  function update_data($where,$data,$table){
  $this->db->where($where);
  $this->db->update($table,$data);
}	
}