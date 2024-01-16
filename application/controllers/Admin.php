<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_model'); // Pastikan model dimuat di sini
        $this->load->helper('my_helper');
        $this->load->library('upload');
        if ($this->session->userdata('logged_in') != true || $this->session->userdata('role') != 'admin') {
            redirect(base_url() . 'auth/login');
        }
    }

    public function dashboard()
    {
        $data['get_ck'] = $this->m_model->get_data('tb_order_ck')->result();
        $data['get_dc'] = $this->m_model->get_data('tb_order_dc')->result();
        $data['get_cs'] = $this->m_model->get_data('tb_order_cs')->result();
        $this->load->view('admin/dashboard', $data);
    }
    public function order()
    {
        $this->load->view('admin/order');
    }
    public function order_ck()
    {
        $data['tb_order_ck'] = $this->m_model->get_data('tb_order_ck')->result();
        $this->load->view('admin/order_ck', $data);
    }
    public function order_dc()
    {
        $data['tb_order_dc'] = $this->m_model->get_data('tb_order_dc')->result();
        $this->load->view('admin/order_dc', $data);
    }
    public function order_cs()
    {
        $data['tb_order_cs'] = $this->m_model->get_data('tb_order_cs')->result();
        $this->load->view('admin/order_cs', $data);
    }
    public function detail_order_ck($id)
    {
        $data['detail'] = $this->m_model->get_by_id('tb_order_ck', 'id_order_ck', $id)->result();
        $this->load->view('admin/detail_order_ck', $data);
    }
    public function riwayat()
    {
        $data['get_ck'] = $this->m_model->get_data('tb_riwayat_ck')->result();
        $data['get_dc'] = $this->m_model->get_data('tb_riwayat_dc')->result();
        $data['get_cs'] = $this->m_model->get_data('tb_riwayat_cs')->result();
        $this->load->view('admin/riwayat', $data);
    }
    public function manage_karyawan()
    {
        $data['data_karyawan'] = $this->m_model->hanya_karyawan('akun');
        $this->load->view('admin/manage_karyawan', $data);
    }

    public function tambah_karyawan()
    {
        $this->load->view('admin/tambah_karyawan');
    }
    public function daftar_paket()
    {
        $this->load->view('admin/daftar_paket');
    }
    public function paket_ck()
    {
        $data['data_ck'] = $this->m_model->hanya_ck('tb_cuci_komplit');
        $this->load->view('admin/paket_ck', $data);
    }
    public function tambah_paket_ck()
    {
        $this->load->view('admin/tambah_paket_ck');
    }
    public function aksi_tambah_paket_ck()
    {
        $data = [
            "nama_paket_ck" => $this->input->post('nama_paket_ck'),
            "waktu_kerja_ck" => $this->input->post('waktu_kerja_ck'),
            "kuantitas_ck" => $this->input->post('kuantitas_ck'),
            "tarif_ck" => $this->input->post('tarif_ck'),
        ];
        $this->m_model->tambah_data('tb_cuci_komplit', $data);
        redirect(base_url('admin/paket_ck'));
    }
    public function paket_cs()
    {
        $data['data_cs'] = $this->m_model->hanya_cs('tb_cuci_satuan');
        $this->load->view('admin/paket_cs', $data);
    }
    public function tambah_paket_cs()
    {
        $this->load->view('admin/tambah_paket_cs');
    }
    public function aksi_tambah_paket_cs()
    {
        $data = [
            "nama_cs" => $this->input->post('nama_cs'),
            "waktu_kerja_cs" => $this->input->post('waktu_kerja_cs'),
            "kuantitas_cs" => $this->input->post('kuantitas_cs'),
            "tarif_cs" => $this->input->post('tarif_cs'),
            "keterangan_cs" => $this->input->post('keterangan_cs'),
        ];
        $this->m_model->tambah_data('tb_cuci_satuan', $data);
        redirect(base_url('admin/paket_cs'));
    }
    public function paket_dc()
    {
        $data['data_dc'] = $this->m_model->hanya_dc('tb_dry_clean');
        $this->load->view('admin/paket_dc', $data);
    }
    public function tambah_paket_dc()
    {
        $this->load->view('admin/tambah_paket_dc');
    }
    public function aksi_tambah_paket_dc()
    {
        $data = [
            "nama_paket_dc" => $this->input->post('nama_paket_dc'),
            "waktu_kerja_dc" => $this->input->post('waktu_kerja_dc'),
            "kuantitas_dc" => $this->input->post('kuantitas_dc'),
            "tarif_dc" => $this->input->post('tarif_dc'),
        ];
        $this->m_model->tambah_data('tb_dry_clean', $data);
        redirect(base_url('admin/paket_dc'));
    }
    // public function aksi_manage_karyawan()
    // {
    //     $this->form_validation->set_rules('nama', 'Nama', 'required|trim|is_unique[akun.nama]', [
    //         'is_unique' => 'Nama Ini Sudah Ada'
    //     ]);
    //     $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[akun.username]', [
    //         'is_unique' => 'Username Ini Sudah Ada'
    //     ]);
    //     $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[akun.email]', [
    //         'is_unique' => 'Email Ini Sudah Ada'
    //     ]);
    //     $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');

    //     if ($this->form_validation->run() == FALSE) {
    //         // Validasi gagal, tampilkan pesan kesalahan
    //         $this->load->view('admin/tambah_manage_karyawan'); // Gantilah 'form_register' dengan nama view Anda
    //     } else {
    //         $data = [
    //             'nama' => $this->input->post('nama', true),
    //             'username' => $this->input->post('username', true),
    //             'email' => $this->input->post('email', true),
    //             'password' => md5($this->input->post('password')),
    //             'role' => 'karyawan'
    //         ];
    //         $this->db->insert('akun', $data);
    //         // $this->_sendEmail();
    //         // Validasi berhasil, lanjutkan dengan tindakan registrasi
    //         // Misalnya, simpan data pengguna ke database
    //         redirect('admin/manage_karyawan'); // Redirect ke halaman sukses registrasi
    //     }
    // }
    public function aksi_tambah_order_ck()
    {
        $or_ck_number = $this->input->post->generateRandomCode();
        $data = [
            $or_ck_number => $or_ck_number,
            'nama_pel_ck' => $this->input->post('nama_pel_ck'),
            'no_telp_ck' => $this->input->post('no_telp_ck'),
            'alamat_ck' => $this->input->post('alamat_ck'),
            'jenis_paket_ck' => $this->input->post('jenis_paket_ck'),
            'berat_qty_ck' => $this->input->post('berat_qty_ck'),
            'tgl_masuk_ck' => $this->input->post('tgl_masuk_ck'),
            'tgl_keluar_ck' => $this->input->post('tgl_keluar_ck'),
            'keterangan_ck' => $this->input->post('keterangan_ck'),
        ];
        $this->m_model->tambah_data('tb_order_ck', $data);
        redirect(base_url('admin/order_ck'));
    }
}
