<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
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
        $data['title'] = "Guru";
        $data['guru'] = $this->admin->getGuru();

        // var_dump($data);

        // var_dump($guru);
        $this->template->load('templates/dashboard', 'guru/data', $data);
    }

    private function _validasi()
    {
        $this->form_validation->set_rules('id', 'nik', 'nama', 'pangkat', 'mapel', 'agama','notelepon',
        'jeniskelamin','asal','email','alamat', 'required|trim');
    }

    public function add()
    {
        $this->_validasi();

        if ($this->form_validation->run() == false) {
            $data['title'] = "Guru";
            $this->template->load('templates/dashboard', 'guru/add', $data);
        } else {
            $input = $this->input->post(null, true);
            $insert = $this->admin->insert('guru', $input);
            if ($insert) {
                set_pesan('data berhasil disimpan');
                redirect('guru');
            } else {
                set_pesan('data gagal disimpan', false);
                redirect('guru/add');
            }
        }
    }

    public function edit($getId)
    {
        $id = encode_php_tags($getId);
        $this->_validasi();

        if ($this->form_validation->run() == false) {
            $data['title'] = "Guru";
            $data['guru'] = $this->admin->get('guru', ['id' => $id]);
            $this->template->load('templates/dashboard', 'guru/edit', $data);
        } else {
            $input = $this->input->post(null, true);
            $update = $this->admin->update('guru', 'id', $id, $input);

            if ($update) {
                set_pesan('data berhasil disimpan');
                redirect('guru');
            } else {
                set_pesan('gagal menyimpan data');
                redirect('guru/edit/' . $id);
            }
        }
    }

    public function delete($getId)
    {
        $id = encode_php_tags($getId);
        if ($this->admin->delete('guru', 'id', $id)) {
            set_pesan('data berhasil dihapus.');
        } else {
            set_pesan('data gagal dihapus.', false);
        }
        redirect('guru');
    }
}
