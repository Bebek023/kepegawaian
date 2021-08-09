<?php

  class Menu_model extends CI_Model
  {
      public function data()
      {
          $query = $this->db->query("select * from menu");
          return $query->result();
      }
      public function update($bowl)
      {
          $array = array('stok_menu' => $bowl['stok_menu']);
          $this->db->set($array);
          $this->db->where('kd_menu', $bowl['kd_menu']);
          $this->db->update('menu');
      }
      public function get_menu($kd)
      {
          $query = $this->db->query("select * from menu where kd_menu='".$kd."'");
          return $query->result();
      }
  }
