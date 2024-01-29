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
        $data['total_karyawan'] = $this->m_model->hitungJumlahKaryawan('total_karyawan');
        $data['jumlahOrder'] = $this->m_model->hitungJumlahOrder('jumlahOrder');
        $data['jumlahPaket'] = $this->m_model->hitungJumlahPaket('jumlahPaket');
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
    public function detail_order_ck($id)
    {
        $data['detail'] = $this->m_model->get_by_id('tb_order_ck', 'or_ck_number', $id)->result();
        // foreach ($data['detail'] as &$pesanan) {
        //     $pesanan->tot_bayar = $this->m_model->hitung_total_bayar($pesanan->berat_qty_ck, $pesanan->harga_perkilo);
        // }
        $this->load->view('admin/detail_order_ck', $data);
    }

    public function order_dc()
    {
        $data['tb_order_dc'] = $this->m_model->get_data('tb_order_dc')->result();
        $this->load->view('admin/order_dc', $data);
    }
    public function detail_order_dc($id)
    {
        $data['detail'] = $this->m_model->get_by_id('tb_order_dc', 'or_dc_number', $id)->result();
        // foreach ($data['detail'] as &$pesanan) {
        //     $pesanan->tot_bayar = $this->m_model->hitung_total_bayar($pesanan->berat_qty_dc, $pesanan->harga_perkilo);
        // }

        $this->load->view('admin/detail_order_dc', $data);
    }
    public function order_cs()
    {
        $data['tb_order_cs'] = $this->m_model->get_data('tb_order_cs')->result();
        $this->load->view('admin/order_cs', $data);
    }
    public function detail_order_cs($id)
    {
        $data['detail'] = $this->m_model->get_by_id('tb_order_cs', 'or_cs_number', $id)->result();
        // foreach ($data['detail'] as &$pesanan) {
        //     $pesanan->tot_bayar = $this->m_model->hitung_total_bayar($pesanan->jml_pcs, $pesanan->harga_perpcs);
        // }

        $this->load->view('admin/detail_order_cs', $data);
    }
    public function riwayat()
    {
        $data['get_ck'] = $this->m_model->get_data('tb_riwayat_ck')->result();
        $data['get_dc'] = $this->m_model->get_data('tb_riwayat_dc')->result();
        $data['get_cs'] = $this->m_model->get_data('tb_riwayat_cs')->result();
        $this->load->view('admin/riwayat', $data);
    }
    public function detail_riwayat_ck($id)
    {
        $data['detail'] = $this->m_model->get_by_id('tb_riwayat_ck', 'id_ck', $id)->result();
        foreach ($data['detail'] as &$pesanan) {
            $pesanan->tot_bayar = $this->m_model->hitung_total_bayar($pesanan->berat_qty_ck, $pesanan->harga_perkilo);
        }
        $this->load->view('admin/detail_riwayat_ck', $data);
    }
    public function detail_riwayat_cs($id)
    {
        $data['detail'] = $this->m_model->get_by_id('tb_riwayat_cs', 'id_cs', $id)->result();
        // if ($this->input->post('bayar_ck')) {
        //     $no_ck = $this->input->post('nomor_or');

        //     // Gunakan fungsi redirect untuk mengarahkan ke URL yang diinginkan
        //     redirect("http://localhost/laundry/admin/detail_order_ck/bayar_order_ck?or_ck_number={$no_ck}");
        // }
        $this->load->view('admin/detail_riwayat_ck', $data);
    }
    public function detail_riwayat_dc($id)
    {
        $data['detail'] = $this->m_model->get_by_id('tb_riwayat_dc', 'id_dc', $id)->result();
        // if ($this->input->post('bayar_ck')) {
        //     $no_ck = $this->input->post('nomor_or');

        //     // Gunakan fungsi redirect untuk mengarahkan ke URL yang diinginkan
        //     redirect("http://localhost/laundry/admin/detail_order_ck/bayar_order_ck?or_ck_number={$no_ck}");
        // }
        $this->load->view('admin/detail_riwayat_ck', $data);
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

    public function edit_karyawan($id)
    {
        $data['data_karyawan'] = $this->m_model->get_by_id('akun', 'id', $id)->result();
        $this->load->view('admin/edit_karyawan', $data);
    }

    public function aksi_edit_karyawan()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
        ];
        $eksekusi = $this->m_model->ubah_data('akun', $data, array('id' => $this->input->post('id')));
        if ($eksekusi) {
            $this->session->set_flashdata('success_message', 'Berhasil');
            redirect(base_url('admin/manage_karyawan'));
        } else {
            $this->session->set_flashdata('error', "Data Belum Di Edit");
            redirect(base_url('admin/edit_karyawan/' . $this->input->post('id')));
        }
    }

    public function hapus_karyawan($id)
    {
        $this->m_model->delete('akun', 'id', $id);
        redirect(base_url('admin/manage_karyawan'));
    }

    public function daftar_paket()
    {
        $this->load->view('admin/daftar_paket');
    }

    // fungsi ck
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
    public function edit_paket_ck($id)
    {
        $data['data_ck'] = $this->m_model->get_by_id('tb_cuci_komplit', 'id_ck', $id)->result();
        $this->load->view('admin/edit_paket_ck', $data);
    }

    public function aksi_edit_paket_ck()
    {
        $data = [
            'nama_paket_ck' => $this->input->post('nama_paket_ck'),
            'waktu_kerja_ck' => $this->input->post('waktu_kerja_ck'),
            'kuantitas_ck' => $this->input->post('kuantitas_ck'),
            'tarif_ck' => $this->input->post('tarif_ck'),
        ];
        $eksekusi = $this->m_model->ubah_data('tb_cuci_komplit', $data, array('id_ck' => $this->input->post('id_ck')));
        if ($eksekusi) {
            $this->session->set_flashdata('success_message', 'Berhasil');
            redirect(base_url('admin/paket_ck'));
        } else {
            $this->session->set_flashdata('error', "Data Belum Di Edit");
            redirect(base_url('admin/edit_paket_ck/' . $this->input->post('id_ck')));
        }
    }
    public function hapus_paket_ck($id)
    {
        $this->m_model->delete('tb_cuci_komplit', 'id_ck', $id);
        redirect(base_url('admin/paket_ck'));
    }
    public function struk_ck($id)
    {
        $data['struk'] = $this->m_model->get_by_id('tb_riwayat_ck', 'or_ck_number', $id)->result();
        $this->load->view('admin/struk_ck', $data);
    }
    // end ck


    // fungsi cs
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
    public function edit_paket_cs($id)
    {
        $data['data_cs'] = $this->m_model->get_by_id('tb_cuci_satuan', 'id_cs', $id)->result();
        $this->load->view('admin/edit_paket_cs', $data);
    }

    public function aksi_edit_paket_cs()
    {
        $data = [
            "nama_cs" => $this->input->post('nama_cs'),
            "waktu_kerja_cs" => $this->input->post('waktu_kerja_cs'),
            "kuantitas_cs" => $this->input->post('kuantitas_cs'),
            "tarif_cs" => $this->input->post('tarif_cs'),
            "keterangan_cs" => $this->input->post('keterangan_cs'),
        ];
        $eksekusi = $this->m_model->ubah_data('tb_cuci_satuan', $data, array('id_cs' => $this->input->post('id_cs')));
        if ($eksekusi) {
            $this->session->set_flashdata('success_message', 'Berhasil');
            redirect(base_url('admin/paket_cs'));
        } else {
            $this->session->set_flashdata('error', "Data Belum Di Edit");
            redirect(base_url('admin/edit_paket_ck/' . $this->input->post('id_cs')));
        }
    }
    public function hapus_paket_cs($id)
    {
        $this->m_model->delete('tb_cuci_satuan', 'id_cs', $id);
        redirect(base_url('admin/paket_cs'));
    }
    public function struk_cs($id)
    {
        $data['struk'] = $this->m_model->get_by_id('tb_riwayat_cs', 'or_cs_number', $id)->result();
        $this->load->view('admin/struk_cs', $data);
    }
    // end cs

    // fungsi dc
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
        $this->session->set_flashdata('berhasil_tambah_paket', 'Tambah Paket Berhasil Di Tambahkan');
        redirect(base_url('admin/paket_dc'));
    }
    public function edit_paket_dc($id)
    {
        $data['data_dc'] = $this->m_model->get_by_id('tb_dry_clean', 'id_dc', $id)->result();
        $this->load->view('admin/edit_paket_dc', $data);
    }

    public function aksi_edit_paket_dc()
    {
        $data = [
            'nama_paket_dc' => $this->input->post('nama_paket_dc'),
            'waktu_kerja_dc' => $this->input->post('waktu_kerja_dc'),
            'kuantitas_dc' => $this->input->post('kuantitas_dc'),
            'tarif_dc' => $this->input->post('tarif_dc'),
        ];
        $eksekusi = $this->m_model->ubah_data('tb_dry_clean', $data, array('id_dc' => $this->input->post('id_dc')));
        if ($eksekusi) {
            $this->session->set_flashdata('success_message', 'Berhasil');
            redirect(base_url('admin/paket_dc'));
        } else {
            $this->session->set_flashdata('error', "Data Belum Di Edit");
            redirect(base_url('admin/edit_paket_dc/' . $this->input->post('id_dc')));
        }
    }
    public function hapus_paket_dc($id)
    {
        $this->m_model->delete('tb_dry_clean', 'id_dc', $id);
        redirect(base_url('admin/paket_dc'));
    }
    public function struk_dc($id)
    {
        // Load data for the 'struk_dc' view
        $data['struk'] = $this->m_model->get_by_id('tb_riwayat_dc', 'or_dc_number', $id)->result();

        // Generate PDF
        // $this->generate_pdf($id);

        // Load the 'struk_dc' view
        $this->load->view('admin/struk_dc', $data);
    }
    // end dc 

    // public function aksi_manage_karyawan()
    // {
    //     $this->form_validation->set_rules('nama', 'Nama', 'required|trim|is_unique[akun.nama]', [
    //         'is_unique' => 'Nama Ini Sudah Ada'
    //     ]);
    //     $this->form_validation->set_rules('adminname', 'Username', 'required|trim|is_unique[akun.username]', [
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
    // public function aksi_tambah_order_ck()
    // {
    //     $or_ck_number = $this->input->post->generateRandomCode();
    //     $data = [
    //         $or_ck_number => $or_ck_number,
    //         'nama_pel_ck' => $this->input->post('nama_pel_ck'),
    //         'no_telp_ck' => $this->input->post('no_telp_ck'),
    //         'alamat_ck' => $this->input->post('alamat_ck'),
    //         'jenis_paket_ck' => $this->input->post('jenis_paket_ck'),
    //         'berat_qty_ck' => $this->input->post('berat_qty_ck'),
    //         'tgl_masuk_ck' => $this->input->post('tgl_masuk_ck'),
    //         'tgl_keluar_ck' => $this->input->post('tgl_keluar_ck'),
    //         'keterangan_ck' => $this->input->post('keterangan_ck'),
    //     ];
    //     $this->m_model->tambah_data('tb_order_ck', $data);
    //     redirect(base_url('admin/order_ck'));
    // }
}
