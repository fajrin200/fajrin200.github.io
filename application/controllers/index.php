<?php
defined('BASEPATH') or exit('No direct script access allowed');

// Nama Class Pada Controller
class Dashboard extends CI_Controller
{
    // Function yang akan dibaca pertama kali ketika class Dashboard dipanggil. Function ini berfungsi untuk authentifikasi saat controller di jalankan, apakah sudah melakukan login atau belum, jika sudah semua Class dapat dijalankan
    public function __construct()
    {
        parent::__construct();
        cek_login();

        $this->load->model('Admin_model', 'admin');
    }

    // Function indek dijalankan ketikan function __construct sudah dilewati. pada function ini berisi variabel yang akan di panggil di view
    public function index()
    {
        $data['title'] = "Dashboard";
        // variabel guru digunakan untuk menghitung semua field yang ada di table guru 
        $data['guru'] = $this->admin->count('guru');
        $data['siswa'] = $this->admin->count('siswa');
        $data['user'] = $this->admin->count('user');
        $data['karyawan'] = $this->admin->count('karyawan');

        // librari yang ada di codeigniter yang digunakan untuk memanggil view
        $this->template->load('templates/dashboard', 'dashboard', $data);
    }
}
