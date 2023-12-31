<?php
class Autentifikasi extends CI_Controller
{
    public function index()
    {
        // Jika sudah login, redirect ke halaman user
        if ($this->session->userdata('email')) {
            redirect('user');
        }

        $this->form_validation->set_rules('email', 'Alamat Email', 'required|trim|valid_email', [
            'required' => 'Email harus diisi!!',
            'valid_email' => 'Email tidak valid!!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required' => 'Password harus diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Login';
            $data['user'] = '';
            $this->load->view('template/aute_header', $data);
            $this->load->view('autentifikasi/login');
            $this->load->view('template/aute_footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = htmlspecialchars($this->input->post('email', true));
        $password = $this->input->post('password', true);
        $user = $this->ModelUser->cekData(['email' => $email])->row_array();

        if ($user) {
            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('admin');
                    } else {
                        if ($user['image'] == 'default.jpg') {
                            $this->session->set_flashdata('pesan', '<div class="alert alert-info alert-message" role="alert">Silahkan Ubah Profil Anda untuk Mengganti Foto Profil</div>');
                        }
                        redirect('user');
                    }
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Password salah!!</div>');
                    redirect('autentifikasi');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Akun belum diaktifasi!!</div>');
                redirect('autentifikasi');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Email tidak terdaftar!!</div>');
            redirect('autentifikasi');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-massage" role="alert">anda telah logout!!</div>');
        redirect('autentifikasi');
    }

    public function blok()
    {
        $this->load->view('autentifikasi/blok');
    }

    public function gagal()
    {
        $this->load->view('autentifikasi/gagal');
    }

    public function registrasi()
    {
        // Jika sudah login, redirect ke halaman user
        if ($this->session->userdata('email')) {
            redirect('user');
        }

        // Membuat rule untuk inputan nama agar tidak boleh kosong
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required', ['required' => 'Nama harus diisi']);

        // Membuat rule untuk inputan email
        $this->form_validation->set_rules('email', 'Alamat Email', 'required|trim|valid_email|is_unique[user.email]', [
            'valid_email' => 'Email tidak valid!!',
            'required' => 'Email harus diisi!!',
            'is_unique' => 'Email sudah terdaftar!'
        ]);

        // Membuat rule untuk inputan password
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password tidak cocok!!',
            'min_length' => 'Password terlalu pendek'
        ]);
        $this->form_validation->set_rules('password2', 'Ulangi Password', 'required|trim|matches[password1]');

        // Jika validasi form berhasil, simpan data
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Registrasi Member';
            $this->load->view('template/aute_header', $data);
            $this->load->view('autentifikasi/registrasi');
            $this->load->view('template/aute_footer');
        } else {
            $email = $this->input->post('email', true);
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($email),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'tanggal_input' => time()
            ];

            // Simpan data menggunakan model
            $this->ModelUser->simpanData($data);

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Selamat!! Akun member Anda sudah dibuat. Silahkan Aktivasi Akun Anda</div>');
            redirect('autentifikasi');
        }
    }
}
