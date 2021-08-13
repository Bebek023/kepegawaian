<?php

  class Pegawai_model extends CI_Model
  {
      public function data()
      {
          $query = $this->db->query("select p.*, g.nama_golongan, (g.gaji_pokok + (g.tunjangan_istri*p.status_nikah) + (g.tunjangan_anak * p.jumlah_anak) + g.tunjangan_transportasi) AS gaji_utama from pegawai p inner join golongan g on p.id_golongan=g.id");
          return $query->result();
      }
      public function data_by_id($id)
      {
        $query = $this->db->query("select p.*, g.nama_golongan from pegawai p inner join golongan g on p.id_golongan=g.id where p.id=".$id);
        return $query->result();
      }
      public function create($bowl)
      {
        $this->db->query("insert into pegawai(nip, nik, nama, alamat, agama, id_golongan, telepon, tanggal_lahir, jenis_kelamin, status_nikah, jumlah_anak) values('".$bowl['nip']."', '" . $bowl['nik'] ."', '" . $bowl['nama'] ."', '" . $bowl['alamat'] ."', '" . $bowl['agama'] ."', '" . $bowl['golongan'] ."', '" . $bowl['telepon'] ."', " . $bowl['tgl_lahir'] .", '" . $bowl['jk'] ."', '" . $bowl['nikah'] ."', " . $bowl['anak'] .");");
      }
      public function update($bowl)
      {
        $array = array(
          'nip' => $bowl['nip'], 
          'nik' => $bowl['nik'], 
          'nama' => $bowl['nama'], 
          'alamat' => $bowl['alamat'], 
          'agama' => $bowl['agama'], 
          'id_golongan' => $bowl['golongan'], 
          'telepon' => $bowl['telepon'], 
          'tanggal_lahir' => $bowl['tgl_lahir'], 
          'jenis_kelamin' => $bowl['jk'], 
          'status_nikah' => $bowl['nikah'], 
          'jumlah_anak' => $bowl['anak']);
        $arr = array('id' => $bowl['id']);
        $this->db->set($array);
        $this->db->where($arr);
        $this->db->update('pegawai');
      }
      public function delete($id)
      {
        $this->db->where('id', $id);
        $this->db->delete('pegawai');
      }
  }
