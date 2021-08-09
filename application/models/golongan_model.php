<?php

  class Golongan_model extends CI_Model
  {
      public function data()
      {
          $query = $this->db->query("select * from golongan");
          return $query->result();
      }
  }
