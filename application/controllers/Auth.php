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
        $data = ['email' => $email,];
        $query = $this->m_model->getwhere('akun', $data);
        $result = $query->row_array();


        if (!empty($result) && md5($password) === $result['password']) {
            $data = [
                'logged_in' => TRUE,
                'email' => $result['email'],
                'username' => $result['username'],
                'role' => $result['role'],
                'id' => $result['id'],
            ];
            $this->session->set_userdata($data);
            if ($this->session->userdata('role') == 'admin') {
                redirect(base_url() . "home");
            } elseif ($this->session->userdata('role') == 'user') {
                redirect(base_url() . "home");
            } else {
                redirect(base_url() . "admin");
            }
        } else {
            redirect(base_url() . "auth/login");
        }
    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('auth/login'));
    }

    public function register()
    {
        $this->load->view('auth/register');
    }

    public function aksi_register()
    {
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
    public function registeru()
    {
        $this->load->view('auth/registeru');
    }

    public function aksi_register_admin()
    {
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
}
