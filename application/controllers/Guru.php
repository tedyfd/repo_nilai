<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status_login') != "guru") {
            redirect('login_adm');
        } else {
        }
    }
    public function index()
    {
        $data['title'] = 'Dashboard';

        //model

        //name 
        $data['page'] = 'Dashboard';
        $data['profile'] = $this->db->get_where('guru', array('nip' => $this->session->userdata('username')))->row_array();

        $this->load->view('guru/index', $data);
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
        $data['profile'] = $this->db->get_where('guru', array('nip' => $this->session->userdata('username')))->row_array();
        $data['nilai'] = $this->db->query("SELECT * from guru
        inner join guru_kelas on guru.nip = guru_kelas.nip
        inner join kelas_ajaran on guru_kelas.id_kelas_ajaran = kelas_ajaran.id_kelas_ajaran
        inner join kelas on kelas_ajaran.id_kelas = kelas.id_kelas
        inner join matpel on kelas_ajaran.id_matpel = matpel.id_matpel
        WHERE guru.nip = '" . $this->session->userdata('username') . "'")->result_array();

        $this->load->view('guru/nilai', $data);
    }

    private function nilai_detail($id_kelas_ajaran)
    {
        $data['title'] = 'Nilai';

        $data['page'] = 'Nilai';
        $data['profile'] = $this->db->get_where('guru', array('nip' => $this->session->userdata('username')))->row_array();
        $data['nilai'] = $this->db->query("SELECT * from siswa
        inner join siswa_kelas on siswa.nis = siswa_kelas.nis
        inner join kelas_ajaran on siswa_kelas.id_kelas_ajaran = kelas_ajaran.id_kelas_ajaran
        inner join kelas on kelas_ajaran.id_kelas = kelas.id_kelas
        inner join matpel on kelas_ajaran.id_matpel = matpel.id_matpel
				where siswa_kelas.id_kelas_ajaran='$id_kelas_ajaran'")->result_array();

        $this->load->view('guru/nilai_detail', $data);
    }
    public function nilai_siswa($nis, $id_kelas_ajaran)
    {
        $data['title'] = 'Nilai';

        $data['page'] = 'Nilai';
        $data['profile'] = $this->db->get_where('guru', array('nip' => $this->session->userdata('username')))->row_array();
        $data['nilai'] = $this->db->query("SELECT siswa.nis as nis, siswa.nama, kelas_ajaran.id_kelas_ajaran, kelas_ajaran.th_ajaran, kelas.kelas, matpel.matpel, siswa_kelas.id_kelas_ajaran,
        nilai.id_nilai, nilai.tugas_harian, nilai.pts, nilai.hpts, nilai.predikat_mid,nilai.nilai_raport_mid,nilai.hph, nilai.pas, nilai.hpas, nilai.nilai_raport_final, nilai.deskripsi
        from siswa
        inner join siswa_kelas on siswa.nis = siswa_kelas.nis
        inner join kelas_ajaran on siswa_kelas.id_kelas_ajaran = kelas_ajaran.id_kelas_ajaran
        inner join kelas on kelas_ajaran.id_kelas = kelas.id_kelas
        inner join matpel on kelas_ajaran.id_matpel = matpel.id_matpel
        LEFT JOIN nilai on siswa.nis = nilai.nis
		WHERE siswa.nis='$nis' AND siswa_kelas.id_kelas_ajaran='$id_kelas_ajaran'")->row_array();

        $this->load->view('guru/nilai_siswa', $data);
    }

    public function nilai_siswa_add()
    {
        $id_nilai = $this->input->post('id_nilai');
        $nis = $this->input->post('nis');
        $id_kelas_ajaran = $this->input->post('id_kelas_ajaran');

        $tugas_harian = $this->input->post('tugas_harian');
        $pts = $this->input->post('pts');
        $hpts = $this->input->post('hpts');
        $predikat_mid = $this->input->post('predikat_mid');
        $nilai_raport_mid = ($tugas_harian + $pts + $hpts) / 3;
        $hph = $this->input->post('hph');
        $pas = $this->input->post('pas');
        $hpas = $this->input->post('hpas');
        $nilai_raport_final = ($nilai_raport_mid + $hph + $pas + $hpas) / 4;
        $deskripsi = $this->input->post('deskripsi');

        $data = [
            'nis' => $nis,
            'id_kelas_ajaran' => $id_kelas_ajaran,
            'tugas_harian' => $tugas_harian,
            'pts' => $pts,
            'hpts' => $hpts,
            'predikat_mid' => $predikat_mid,
            'nilai_raport_mid' => $nilai_raport_mid,
            'hph' => $hph,
            'pas' => $pas,
            'hpas' => $hpas,
            'nilai_raport_final' => $nilai_raport_final,
            'deskripsi' => $deskripsi,
        ];
        if ($id_nilai == '') {
            $this->db->insert('nilai', $data);
            $this->session->set_flashdata('message', 'telah ditambahkan');
            redirect("guru/nilai");
        } else {
            $this->db->where('id_nilai', $id_nilai);
            $this->db->update('nilai', $data);
            redirect("guru/nilai/$id_nilai");
        }
    }
}