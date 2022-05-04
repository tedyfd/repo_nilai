<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kepsek extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status_login') != "kepsek") {
            redirect('login_kepsek');
        } else {
        }
    }
    public function index()
    {
        $data['title'] = 'Dashboard';

        //model

        //name 
        $data['page'] = 'Dashboard';
        $data['profile'] = $this->db->get_where('admin', array('username' => $this->session->userdata('username')))->row_array();


        $this->load->view('kepsek/index', $data);
    }

    public function setting()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('password_lama', 'Password Lama', 'required|trim');
        $this->form_validation->set_rules('password_1', 'Password Baru', 'required|trim');
        $this->form_validation->set_rules('password_2', 'Konfirmasi Password', 'required|trim|matches[password_1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Dashboard';

            //model

            //name 
            $data['page'] = 'Dashboard';
            $data['profile'] = $this->db->get_where('admin', array('username' => $this->session->userdata('username')))->row_array();

            $this->load->view('kepsek/setting', $data);
        } else {
            $this->_update_password();
        }
    }

    private function _update_password()
    {
        $password_lama = $this->input->post('password_lama');
        $password = $this->input->post('password_1');

        $user = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
        if (password_verify($password_lama, $user['password'])) {
            $data = array(
                'password' => password_hash($password, PASSWORD_DEFAULT),
            );
            $this->db->where('username', $this->session->userdata('username'));
            $this->db->update('admin', $data);
            $this->session->set_flashdata('message', 'Password Berhasil diubah!');
            redirect('kepsek/setting');
        } else {
            $this->session->set_flashdata('err', '<div class="alert alert-danger text-center" role="alert">Password lama anda salah!</div>');
            redirect('kepsek/setting');
        }
    }

    public function nilai($id_kelas_ajaran = null)
    {
        if ($id_kelas_ajaran == '') {
            $this->nilai_index();
        } else {
            $this->nilai_detail($id_kelas_ajaran);
        }
    }

    private function nilai_index()
    {
        $data['title'] = 'Nilai';

        $data['page'] = 'Nilai';
        $data['profile'] = $this->db->get_where('admin', array('username' => $this->session->userdata('username')))->row_array();
        $data['nilai'] = $this->db->query("SELECT kelas_ajaran.id_kelas_ajaran, kelas_ajaran.th_ajaran,kelas.kelas, matpel.matpel 
        from kelas_ajaran
        inner join kelas on kelas_ajaran.id_kelas = kelas.id_kelas
        inner join matpel on kelas_ajaran.id_matpel = matpel.id_matpel")->result_array();

        $this->load->view('kepsek/nilai', $data);
    }

    private function nilai_detail($id_kelas_ajaran)
    {
        $data['title'] = 'Nilai';

        $data['page'] = 'Nilai';
        $data['profile'] = $this->db->get_where('admin', array('username' => $this->session->userdata('username')))->row_array();
        $data['nilai'] = $this->db->query("SELECT siswa.nis, siswa.nama, kelas_ajaran.id_kelas_ajaran, kelas_ajaran.th_ajaran, kelas.kelas, matpel.matpel, nilai.id_nilai from siswa
        inner join siswa_kelas on siswa.nis = siswa_kelas.nis
        inner join kelas_ajaran on siswa_kelas.id_kelas_ajaran = kelas_ajaran.id_kelas_ajaran
        inner join kelas on kelas_ajaran.id_kelas = kelas.id_kelas
        inner join matpel on kelas_ajaran.id_matpel = matpel.id_matpel
        LEFT JOIN nilai on siswa_kelas.nis = nilai.nis
		WHERE siswa_kelas.id_kelas_ajaran='$id_kelas_ajaran'")->result_array();

        $this->load->view('kepsek/nilai_detail', $data);
    }

    public function nilai_siswa($nis, $id_kelas_ajaran)
    {
        $data['title'] = 'Nilai';

        $data['page'] = 'Nilai';
        $data['profile'] = $this->db->get_where('admin', array('username' => $this->session->userdata('username')))->row_array();
        $data['nilai'] = $this->db->query("SELECT siswa.nis as nis, siswa.nama, kelas_ajaran.id_kelas_ajaran, kelas_ajaran.th_ajaran, kelas.kelas, matpel.matpel, siswa_kelas.id_kelas_ajaran,
        nilai.id_nilai, nilai.tugas_harian, nilai.pts, nilai.hpts, nilai.predikat_mid,nilai.nilai_raport_mid,nilai.hph, nilai.pas, nilai.hpas, nilai.nilai_raport_final, nilai.deskripsi
        from siswa
        inner join siswa_kelas on siswa.nis = siswa_kelas.nis
        inner join kelas_ajaran on siswa_kelas.id_kelas_ajaran = kelas_ajaran.id_kelas_ajaran
        inner join kelas on kelas_ajaran.id_kelas = kelas.id_kelas
        inner join matpel on kelas_ajaran.id_matpel = matpel.id_matpel
        LEFT JOIN nilai on siswa.nis = nilai.nis
		WHERE siswa.nis='$nis' AND siswa_kelas.id_kelas_ajaran='$id_kelas_ajaran'")->row_array();

        $this->load->view('kepsek/nilai_siswa', $data);
    }
}