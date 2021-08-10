<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lembur extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('lembur_model');
    }
    public function index()
    {
        $get['data'] = $this->lembur_model->data();
        $this->load->view('lembur/list', $get);
    }
    public function create_data()
    {
        $bowl['id'] = $this->input->post('id');
        $bowl['tgl_mulai'] = $this->input->post('tgl_mulai');
        $bowl['tgl_selesai'] = $this->input->post('tgl_selesai');
        $this->lembur_model->create($bowl);
        redirect('lembur');
    }
    public function delete()
    {
        $id = $this->input->get('id');
        $this->lembur_model->delete($id);
        redirect('lembur');
    }
}
