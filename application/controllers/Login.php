<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller
{
    public function index()
    {
        $this->load->view('login');
    }
    public function login_check()
    {
        echo($this->input->post('nip'));
        echo ($this->input->post('password'));
        if ($this->input->post('nip')=='admin' && $this->input->post('password') == 'admin') {
            redirect('pegawai');
        }
    }
    public function logout()
    {
        session_destroy();
        redirect('login');
    }
}
