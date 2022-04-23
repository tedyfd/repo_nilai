<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status_login') != "adm") {
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
        $data['profile'] = 'smp';

        $this->load->view('admin/index', $data);
    }
    public function kelas_tahun_ajaran()
    {
        $data['title'] = 'kelas_tahun_ajaran';

        //model

        //name 
        $data['page'] = 'kelas_tahun_ajaran';
        $data['profile'] = 'smp';

        $data['kelas_tahun_ajaran'] = $this->db->query("SELECT * FROM kelas_ajaran
        INNER JOIN kelas ON kelas_ajaran.id_kelas = kelas.id_kelas
        INNER JOIN matpel ON kelas_ajaran.id_matpel = matpel.id_matpel")->result_array();
        $this->load->view('admin/kelas_tahun_ajaran', $data);
    }
    public function kelas_tahun_ajaran_add()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('th_ajaran', 'tahun ajaran', 'required|trim');
        $this->form_validation->set_rules('kelas', 'kelas', 'required|trim');
        $this->form_validation->set_rules('matpel[]', 'matpel', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'kelas_tahun_ajaran';

            //model

            //name 
            $data['page'] = 'kelas_tahun_ajaran';
            $data['profile'] = 'smp';

            $this->load->view('admin/kelas_tahun_ajaran_add', $data);
        } else {
            $this->_kelas_tahun_ajaran_add();
        }
    }
    private function _kelas_tahun_ajaran_add()
    {
        $th_ajaran = $this->input->post('th_ajaran');
        $kelas = $this->input->post('kelas');

        $for_query = '';
        foreach ($this->input->post('matpel') as $language) {
            $for_query .= $language . ',';
        }
        $hari = substr($for_query, 0, -1);

        $myArray = explode(',', $hari);
        foreach ($myArray as $row) {
            $data[] = array(
                'th_ajaran' => $th_ajaran,
                'id_kelas' => "$kelas",
                'id_matpel' => $row,
            );
        }
        $this->db->insert_batch('kelas_ajaran', $data);
        $this->session->set_flashdata('message', 'telah ditambahkan');
        redirect('admin/kelas_tahun_ajaran');
    }

    public function guru()
    {
        $data['title'] = 'guru';

        //model

        //name 
        $data['page'] = 'guru';
        $data['profile'] = 'smp';

        $data['guru'] = $this->db->query("SELECT * FROM guru")->result_array();
        $this->load->view('admin/guru', $data);
    }

    public function guru_add()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama', 'nama', 'required|trim');
        $this->form_validation->set_rules('nip', 'nip', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'guru_add';

            //model

            //name 
            $data['page'] = 'guru_add';
            $data['profile'] = 'smp';

            $this->load->view('admin/guru_add', $data);
        } else {
            $this->_guru_add();
        }
    }

    private function _guru_add()
    {
        $nip = $this->input->post('nip');
        $nama = $this->input->post('nama');
        $data = array(
            'nip' => $nip,
            'nama' => $nama,
            'password' => '$2y$10$c.ls9gYx0lhspSy935OIcOZ76TCNapxsmaiN6oqqnC3tDUSvDYTki',
        );
        $this->db->insert('guru', $data);
        $this->session->set_flashdata('message', 'telah ditambahkan');
        redirect('admin/guru');
    }

    public function guru_kelas()
    {
        $data['title'] = 'guru kelas';

        //model

        //name 
        $data['page'] = 'guru kelas';
        $data['profile'] = 'smp';

        $data['guru'] = $this->db->query("SELECT * from guru
        inner join guru_kelas on guru.nip = guru_kelas.nip
        inner join kelas_ajaran on guru_kelas.id_kelas_ajaran = kelas_ajaran.id_kelas_ajaran
        inner join kelas on kelas_ajaran.id_kelas = kelas.id_kelas
        inner join matpel on kelas_ajaran.id_matpel = matpel.id_matpel
        ")->result_array();
        $this->load->view('admin/guru_kelas', $data);
    }

    public function guru_kelas_add()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('guru', 'guru', 'required|trim');
        $this->form_validation->set_rules('kelas_ajaran[]', 'kelas ajaran', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'guru_kelas_add';

            //model

            //name 
            $data['page'] = 'guru_kelas_add';
            $data['profile'] = 'smp';

            $this->load->view('admin/guru_kelas_add', $data);
        } else {
            $this->_guru_kelas_add();
        }
    }

    private function _guru_kelas_add()
    {
        $nip = $this->input->post('guru');

        $for_query = '';
        foreach ($this->input->post('kelas_ajaran') as $language) {
            $for_query .= $language . ',';
        }
        $hari = substr($for_query, 0, -1);

        $myArray = explode(',', $hari);
        foreach ($myArray as $row) {
            $data[] = array(
                'nip' => $nip,
                'id_kelas_ajaran' => $row,
            );
        }
        $this->db->insert_batch('guru_kelas', $data);
        $this->session->set_flashdata('message', 'telah ditambahkan');
        redirect('admin/guru_kelas');
    }

    public function siswa()
    {
        $data['title'] = 'siswa';

        //model

        //name 
        $data['page'] = 'siswa';
        $data['profile'] = 'smp';

        $data['siswa'] = $this->db->query("SELECT * FROM siswa")->result_array();
        $this->load->view('admin/siswa', $data);
    }

    public function siswa_add()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nis', 'nis', 'required|trim');
        $this->form_validation->set_rules('nama', 'nama', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'siswa_add';

            //model

            //name 
            $data['page'] = 'siswa_add';
            $data['profile'] = 'smp';

            $this->load->view('admin/siswa_add', $data);
        } else {
            $this->_siswa_add();
        }
    }

    private function _siswa_add()
    {
        $nip = $this->input->post('nis');
        $nama = $this->input->post('nama');
        $data = array(
            'nis' => $nip,
            'nama' => $nama,
            'password' => '$2y$10$c.ls9gYx0lhspSy935OIcOZ76TCNapxsmaiN6oqqnC3tDUSvDYTki',
        );
        $this->db->insert('siswa', $data);
        $this->session->set_flashdata('message', 'telah ditambahkan');
        redirect('admin/siswa');
    }

    public function siswa_kelas()
    {
        $data['title'] = 'siswa kelas';

        //model

        //name 
        $data['page'] = 'siswa kelas';
        $data['profile'] = 'smp';

        $data['siswa_kelas'] = $this->db->query("SELECT * from siswa
        inner join siswa_kelas on siswa.nis = siswa_kelas.nis
        inner join kelas_ajaran on siswa_kelas.id_kelas_ajaran = kelas_ajaran.id_kelas_ajaran
        inner join kelas on kelas_ajaran.id_kelas = kelas.id_kelas
        inner join matpel on kelas_ajaran.id_matpel = matpel.id_matpel
        ")->result_array();
        $this->load->view('admin/siswa_kelas', $data);
    }

    public function siswa_kelas_add()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('siswa', 'guru', 'required|trim');
        $this->form_validation->set_rules('kelas_ajaran[]', 'kelas ajaran', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'siswa_kelas_add';

            //model

            //name 
            $data['page'] = 'siswa_kelas_add';
            $data['profile'] = 'smp';

            $this->load->view('admin/siswa_kelas_add', $data);
        } else {
            $this->_siswa_kelas_add();
        }
    }

    private function _siswa_kelas_add()
    {
        $nis = $this->input->post('siswa');

        $for_query = '';
        foreach ($this->input->post('kelas_ajaran') as $language) {
            $for_query .= $language . ',';
        }
        $hari = substr($for_query, 0, -1);

        $myArray = explode(',', $hari);
        foreach ($myArray as $row) {
            $data[] = array(
                'nis' => $nis,
                'id_kelas_ajaran' => $row,
            );
        }
        $this->db->insert_batch('siswa_kelas', $data);
        $this->session->set_flashdata('message', 'telah ditambahkan');
        redirect('admin/siswa_kelas');
    }
}