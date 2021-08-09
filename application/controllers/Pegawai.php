<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pegawai_model');
        $this->load->model('golongan_model');
    }
    public function index()
    {
        $get['data'] = $this->pegawai_model->data();
        $this->load->view('pegawai/list', $get);
    }
    public function create()
    {
        $get['data'] = $this->golongan_model->data();
        $this->load->view('pegawai/create', $get);
    }
    public function create_data()
    {
        $bowl['nip'] = $this->input->post('nip');
        $bowl['nik'] = $this->input->post('nik');
        $bowl['nama'] = $this->input->post('nama');
        $bowl['alamat'] = $this->input->post('alamat');
        $bowl['agama'] = $this->input->post('agama');
        $bowl['golongan'] = $this->input->post('golongan');
        $bowl['telepon'] = $this->input->post('telepon');
        $bowl['tgl_lahir'] = $this->input->post('tgl_lahir');
        $bowl['jk'] = $this->input->post('jk');
        $bowl['nikah'] = $this->input->post('nikah');
        $bowl['anak'] = $this->input->post('anak');
        $this->pegawai_model->create($bowl);
        redirect('pegawai');
    }
    public function update()
    {
        $id = $this->input->get('id');
        $get['data'] = $this->pegawai_model->data_by_id($id);
        $get['data_gol'] = $this->golongan_model->data();
        $this->load->view('pegawai/update', $get);
    }
    public function update_data()
    {
        $bowl['nip'] = $this->input->post('nip');
        $bowl['nik'] = $this->input->post('nik');
        $bowl['nama'] = $this->input->post('nama');
        $bowl['alamat'] = $this->input->post('alamat');
        $bowl['agama'] = $this->input->post('agama');
        $bowl['golongan'] = $this->input->post('golongan');
        $bowl['telepon'] = $this->input->post('telepon');
        $bowl['tgl_lahir'] = $this->input->post('tgl_lahir');
        $bowl['jk'] = $this->input->post('jk');
        $bowl['nikah'] = $this->input->post('nikah');
        $bowl['anak'] = $this->input->post('anak');
        $bowl['id'] = $this->input->post('id');
        $this->pegawai_model->update($bowl);
        redirect('pegawai');
    }
    public function delete()
    {
        $id = $this->input->get('id');
        $this->pegawai_model->delete($id);
        redirect('pegawai');
    }
}
