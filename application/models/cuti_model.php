<?php

  class Cuti_model extends CI_Model
  {
      public function data()
      {
          $query = $this->db->query("select c.*, p.nip, p.nama from cuti c inner join pegawai p on p.id=c.id_pegawai");
          return $query->result();
      }
      public function create($bowl)
      {
        $this->db->query("insert into cuti(id_pegawai, tanggal_mulai, tanggal_selesai) values('".$bowl['id']."', '" . $bowl['tgl_mulai'] ."', '" . $bowl['tgl_selesai'] . "');");
      }
      public function delete($id)
      {
        $this->db->where('id', $id);
        $this->db->delete('cuti');
      }
  }
