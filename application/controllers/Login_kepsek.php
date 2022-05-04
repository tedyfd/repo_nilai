<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_kepsek extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Login Kepsek";
            $this->load->view('login/kepsek', $data);
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('admin', ['username' => $username, 'role' => 2])->row_array();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'status_login' => 'kepsek',
                    'username' => $user['username'],
                ];
                $this->session->set_userdata($data);
                redirect('kepsek');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">Password anda salah!</div>');
                redirect('login_kepsek');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">Username tidak ditemukan!</div>');
            redirect('login_kepsek');
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect('login_kepsek');
    }
}