<?php

  class Login_model extends CI_Model
  {
      public function login_datacheck($data)
      {
          $query = $this->db->get_where('pegawai', $data);
          return $query;
      }
  }
