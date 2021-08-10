<?php

  class Golongan_model extends CI_Model
  {
      public function data()
      {
          $query = $this->db->query("select * from golongan");
          return $query->result();
      }
      public function delete($id)
      {
        $this->db->where('id', $id);
        $this->db->delete('golongan');
      }
      public function update($bowl)
      {
        $array = array(
          'id' => $bowl['id'], 
          'nama_golongan' => $bowl['gol'], 
          'gaji_pokok' => $bowl['gj'], 
          'bonus_lembur' => $bowl['lmbr'], 
          'tunjangan_istri' => $bowl['istri'], 
          'tunjangan_anak' => $bowl['anak'], 
          'tunjangan_transportasi' => $bowl['trsprt']);
        $arr = array('id' => $bowl['id']);
        $this->db->set($array);
        $this->db->where($arr);
        $this->db->update('golongan');
      }
      public function create($bowl)
      {
        $array = array(
          'id' => $bowl['id'], 
          'nama_golongan' => $bowl['gol'], 
          'gaji_pokok' => $bowl['gj'], 
          'bonus_lembur' => $bowl['lmbr'], 
          'tunjangan_istri' => $bowl['istri'], 
          'tunjangan_anak' => $bowl['anak'], 
          'tunjangan_transportasi' => $bowl['trsprt']);
        $this->db->insert('golongan', $array);
      }
  }
