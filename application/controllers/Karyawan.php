<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Karyawan extends CI_Controller
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
        $data['title'] = "Karyawan";
        $data['karyawan'] = $this->admin->getKaryawan();

        // var_dump($data);

        // var_dump($karyawan);
        $this->template->load('templates/dashboard', 'karyawan/data', $data);
    }

    private function _validasi()
    {
        $this->form_validation->set_rules('id', 'nik', 'nama', 'bagian', 'posisi', 'notelepon','agama',
        'jeniskelamin','email','asal','alamat', 'required|trim');
    }

    public function add()
    {
        $this->_validasi();

        if ($this->form_validation->run() == false) {
            $data['title'] = "Karyawan";
            $this->template->load('templates/dashboard', 'karyawan/add', $data);
        } else {
            $input = $this->input->post(null, true);
            $insert = $this->admin->insert('karyawan', $input);
            if ($insert) {
                set_pesan('data berhasil disimpan');
                redirect('karyawan');
            } else {
                set_pesan('data gagal disimpan', false);
                redirect('karyawan/add');
            }
        }
    }

    public function edit($getId)
    {
        $id = encode_php_tags($getId);
        $this->_validasi();

        if ($this->form_validation->run() == false) {
            $data['title'] = "Karyawan";
            $data['karyawan'] = $this->admin->get('karyawan', ['id' => $id]);
            $this->template->load('templates/dashboard', 'karyawan/edit', $data);
        } else {
            $input = $this->input->post(null, true);
            $update = $this->admin->update('karyawan', 'id', $id, $input);

            if ($update) {
                set_pesan('data berhasil disimpan');
                redirect('karyawan');
            } else {
                set_pesan('gagal menyimpan data');
                redirect('karyawan/edit/' . $id);
            }
        }
    }
    
    public function delete($getId)
    {
        $id = encode_php_tags($getId);
        if ($this->admin->delete('karyawan', 'id', $id)) {
            set_pesan('data berhasil dihapus.');
        } else {
            set_pesan('data gagal dihapus.', false);
        }
        redirect('karyawan');
    }
}
