<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cuti extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('cuti_model');
    }
    public function index()
    {
        $get['data'] = $this->cuti_model->data();
        $this->load->view('cuti/list', $get);
    }
    public function create_data()
    {
        $bowl['id'] = $this->input->post('id');
        $bowl['tgl_mulai'] = $this->input->post('tgl_mulai');
        $bowl['tgl_selesai'] = $this->input->post('tgl_selesai');
        $this->cuti_model->create($bowl);
        redirect('cuti');
    }
    public function delete()
    {
        $id = $this->input->get('id');
        $this->cuti_model->delete($id);
        redirect('cuti');
    }
}
