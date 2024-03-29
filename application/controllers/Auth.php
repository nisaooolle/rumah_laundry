<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_model'); // Sesuaikan dengan nama model yang sebenarnya
    }
    public function login()
    {
        $this->load->view('auth/login');
    }

    public function aksi_login()
    {

        $email = $this->input->post('email', true);
        $password = $this->input->post('password', true);
        // vaiable data berfungsi untuk mengambil yg diinputkan
        $data = ['email' => $email,];
        $query = $this->m_model->getwhere('akun', $data);
        // result berfngsi menjalankan query nya
        $result = $query->row_array();


        if (!empty($result) && md5($password) === $result['password']) {
            $data = [
                'logged_in' => TRUE,
                // yg didalam array ngambil dari database
                'email' => $result['email'],
                'username' => $result['username'],
                'role' => $result['role'],
                'id' => $result['id'],
            ];
            // session dibawah berfngsi untk penampungan sementara
            $this->session->set_userdata($data);
            // validasi dbwh mengecek apakah role itu "admin"
            if ($this->session->userdata('role') == 'admin') {
                $this->session->set_flashdata('success_login_admin', 'Selamat datang sebagai admin');
                redirect(base_url() . "admin/dashboard");
            }
            if ($this->session->userdata('role') == 'user') {
                $this->session->set_flashdata('berhasil_login, Selamat datang sebagai user');
                redirect(base_url() . "user/dashboard");
            } else {
                $this->session->set_flashdata('gagal_login, Gagal login huuuuuu');
                redirect(base_url() . "auth/login");
            }
        } else {
            $this->session->set_flashdata('error', 'gagal login');
            redirect(base_url() . "auth/login");
        }
    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('home'));
    }

    public function register()
    {
        $this->load->view('auth/register');
    }

    public function aksi_register()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim|is_unique[akun.nama]', [
            'is_unique' => 'Nama Ini Sudah Ada'
        ]);
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[akun.username]', [
            'is_unique' => 'Username Ini Sudah Ada'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[akun.email]', [
            'is_unique' => 'Email Ini Sudah Ada'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');

        if ($this->form_validation->run() == FALSE) {
            // Validasi gagal, tampilkan pesan kesalahan
            $this->load->view('auth/register'); // Gantilah 'form_register' dengan nama view Anda
        } else {
            $data = [
                'nama' => $this->input->post('nama', true),
                'username' => $this->input->post('username', true),
                'email' => $this->input->post('email', true),
                'password' => md5($this->input->post('password')),
                'role' => 'user'
            ];
            $this->db->insert('akun', $data);
            // $this->_sendEmail();
            // Validasi berhasil, lanjutkan dengan tindakan registrasi
            // Misalnya, simpan data pengguna ke database
            redirect('auth/login'); // Redirect ke halaman sukses registrasi
        }
    }
    // register user
    public function register_admin()
    {
        $this->load->view('auth/register_admin');
    }

    public function aksi_register_admin()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim|is_unique[akun.nama]', [
            'is_unique' => 'Nama Ini Sudah Ada'
        ]);
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[akun.username]', [
            'is_unique' => 'Username Ini Sudah Ada'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[akun.email]', [
            'is_unique' => 'Email Ini Sudah Ada'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');

        if ($this->form_validation->run() == FALSE) {
            // Validasi gagal, tampilkan pesan kesalahan
            $this->load->view('auth/register_admin'); // Gantilah 'form_register' dengan nama view Anda
        } else {
            $data = [
                'nama' => $this->input->post('nama', true),
                'username' => $this->input->post('username', true),
                'email' => $this->input->post('email', true),
                'password' => md5($this->input->post('password')),
                'role' => 'admin'
            ];
            $this->db->insert('akun', $data);
            // $this->_sendEmail();
            // Validasi berhasil, lanjutkan dengan tindakan registrasi
            // Misalnya, simpan data pengguna ke database
            redirect('auth/login'); // Redirect ke halaman sukses registrasi
        }
    }

    public function aksi_manage_karyawan()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim|is_unique[akun.nama]', [
            'is_unique' => 'Nama Ini Sudah Ada'
        ]);
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[akun.username]', [
            'is_unique' => 'Username Ini Sudah Ada'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[akun.email]', [
            'is_unique' => 'Email Ini Sudah Ada'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');

        if ($this->form_validation->run() == FALSE) {
            // Validasi gagal, tampilkan pesan kesalahan
            $this->load->view('admin/tambah_manage_karyawan'); // Gantilah 'form_register' dengan nama view Anda
        } else {
            $data = [
                'nama' => $this->input->post('nama', true),
                'username' => $this->input->post('username', true),
                'email' => $this->input->post('email', true),
                'password' => md5($this->input->post('password')),
                'role' => 'karyawan'
            ];
            $this->db->insert('akun', $data);
            // $this->_sendEmail();
            // Validasi berhasil, lanjutkan dengan tindakan registrasi
            // Misalnya, simpan data pengguna ke database
            redirect('admin/manage_karyawan'); // Redirect ke halaman sukses registrasi
        }
    }
}
