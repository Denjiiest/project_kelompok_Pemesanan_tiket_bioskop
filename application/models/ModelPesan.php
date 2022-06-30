<?php 
class ModelPesan extends CI_Model{
    public function showfilm(){
      return $this->db->get('film');
    }
    public function showuser(){
        return $this->db->get('user');
      }
      public function showtanggal(){
        return $this->db->get('tgl_film');
      }
      public function showharga(){
        return $this->db->get('stok');
      }
      public function showjam(){
        return $this->db->get('jam_film');
      }
      public function simpanfilm($data = null){
        return $this->db->insert('tiket', $data);
      }
      public function gettiketLimit()
      {
          $this->db->select('*');
          $this->db->from('tiket');
          $this->db->limit(10,0);
          return $this->db->get();
      }
}