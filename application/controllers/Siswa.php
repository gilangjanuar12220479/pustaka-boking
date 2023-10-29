<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Siswa_model');
    }

    public function input_form()
    {
        $this->load->view('input_siswa');
    }

    public function input_data()
    {
        // Ambil data dari formulir
        $data = array(
            'nama' => $this->input->post('nama'),
            'nis' => $this->input->post('nis'),
            'kelas' => $this->input->post('kelas'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'alamat' => $this->input->post('alamat'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'agama' => $this->input->post('agama')
        );

        // Panggil method dari model untuk menyimpan data siswa
        $this->Siswa_model->simpan_data($data);

        // Tampilkan hasil input
        $this->load->view('hasil_input_siswa', $data);
    }
}
