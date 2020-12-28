<?php
defined('BASEPATH') or exit('No direct script access allowed');

class siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();

        $this->load->model('Admin_model', 'admin');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = "Siswa";
        $data['siswa'] = $this->admin->getsiswa();

        // var_dump($data);

        // var_dump($siswa);
        $this->template->load('templates/dashboard', 'siswa/data', $data);
    }

    private function _validasi()
    {
        $this->form_validation->set_rules('id', 'nis', 'nama', 'kelas', 'tingkat', 'agama','jeniskelamin',
        'notelepon','email','alamat', 'required|trim');
    }

    public function add()
    {
        $this->_validasi();

        if ($this->form_validation->run() == false) {
            $data['title'] = "Siswa";
            $this->template->load('templates/dashboard', 'siswa/add', $data);
        } else {
            $input = $this->input->post(null, true);
            $insert = $this->admin->insert('siswa', $input);
            if ($insert) {
                set_pesan('data berhasil disimpan');
                redirect('siswa');
            } else {
                set_pesan('data gagal disimpan', false);
                redirect('siswa/add');
            }
        }
    }

    public function edit($getId)
    {
        $id = encode_php_tags($getId);
        $this->_validasi();

        if ($this->form_validation->run() == false) {
            $data['title'] = "Siswa";
            $data['siswa'] = $this->admin->get('siswa', ['id' => $id]);
            $this->template->load('templates/dashboard', 'siswa/edit', $data);
        } else {
            $input = $this->input->post(null, true);
            $update = $this->admin->update('siswa', 'id', $id, $input);

            if ($update) {
                set_pesan('data berhasil disimpan');
                redirect('siswa');
            } else {
                set_pesan('gagal menyimpan data');
                redirect('siswa/edit/' . $id);
            }
        }
    }

    public function delete($getId)
    {
        $id = encode_php_tags($getId);
        if ($this->admin->delete('siswa', 'id', $id)) {
            set_pesan('data berhasil dihapus.');
        } else {
            set_pesan('data gagal dihapus.', false);
        }
        redirect('siswa');
    }
}
