<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Golongan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('golongan_model');
    }
    public function index()
    {
        $get['data'] = $this->golongan_model->data();
        $this->load->view('golongan/list', $get);
    }
    public function update_data()
    {
        $bowl['id'] = $this->input->post('id');
        $bowl['gol'] = $this->input->post('gol');
        $bowl['gj'] = $this->input->post('gj');
        $bowl['lmbr'] = $this->input->post('lmbr');
        $bowl['istri'] = $this->input->post('istri');
        $bowl['anak'] = $this->input->post('anak');
        $bowl['trsprt'] = $this->input->post('trsprt');
        $this->golongan_model->update($bowl);
        redirect('golongan');
    }
    public function create_data()
    {
        $bowl['id'] = $this->input->post('id');
        $bowl['gol'] = $this->input->post('gol');
        $bowl['gj'] = $this->input->post('gj');
        $bowl['lmbr'] = $this->input->post('lmbr');
        $bowl['istri'] = $this->input->post('istri');
        $bowl['anak'] = $this->input->post('anak');
        $bowl['trsprt'] = $this->input->post('trsprt');
        $this->golongan_model->create($bowl);
        redirect('golongan');
    }
    public function delete()
    {
        $id = $this->input->get('id');
        $this->golongan_model->delete($id);
        redirect('golongan');
    }
}
