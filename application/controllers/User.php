<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_model'); // Pastikan model dimuat di sini
        $this->load->helper('my_helper');
        $this->load->library('upload');
        $this->load->library('form_validation');
        if ($this->session->userdata('logged_in') != true || $this->session->userdata('role') != 'user') {
            redirect(base_url() . 'auth/login');
        }
    }
    public function dashboard()
    {
        $this->load->view('user/dashboard');
    }

    // fungsi order cuci komplit
    public function order_ck()
    {
        $data['tb_order_ck'] = $this->m_model->get_data('tb_order_ck')->result();
        $data['tb_cuci_komplit'] = $this->m_model->getAllCuciKomplitData();
        $this->load->view('user/order_ck', $data);
    }
    public function aksi_tambah_order_ck()
    {

        $or_ck_number = $this->m_model->generateRandomCodeCk();
        $jenis_paket_ck = $this->m_model->getAllCuciKomplitData();
        $waktu_kerja_ck = $this->m_model->getAllCuciKomplitData();
        $tarif_ck = $this->m_model->getAllCuciKomplitData();
        $jenis_paket_ck = $this->input->post('jenis_paket_ck');
        $waktu_kerja_ck = $this->input->post('wkt_krj_ck');
        $tarif_ck = $this->input->post('harga_perkilo');
        $data = [
            'or_ck_number' => $or_ck_number,
            'jenis_paket_ck' => $jenis_paket_ck,
            'wkt_krj_ck' => $waktu_kerja_ck,
            'harga_perkilo' => $tarif_ck,
            'nama_pel_ck' => $this->input->post('nama_pel_ck'),
            'no_telp_ck' => $this->input->post('no_telp_ck'),
            'alamat_ck' => $this->input->post('alamat_ck'),
            // 'jenis_paket_ck' => $this->input->post('jenis_paket_ck'),
            'berat_qty_ck' => $this->input->post('berat_qty_ck'),
            'tgl_masuk_ck' => $this->input->post('tgl_masuk_ck'),
            'tgl_keluar_ck' => $this->input->post('tgl_keluar_ck'),
            'keterangan_ck' => $this->input->post('keterangan_ck'),
        ];
        $this->m_model->tambah_data('tb_order_ck', $data);
        redirect(base_url('user/dftr_order_ck'));
    }
    public function dftr_order_ck()
    {
        // Mengambil semua data pesanan dari tb_order_ck
        $data['get_ck'] = $this->m_model->get_data('tb_order_ck')->result();

        // Mengambil pesanan terbaru
        $pesananTerbaru = $this->m_model->get_pesanan_terbaru_ck();
        // var_dump($pesananTerbaru);

        // Tampilkan data pesanan terbaru
        $data['pesanan_terbaru'] = $pesananTerbaru;

        // var_dump($data['tot_bayar']); // atau echo $data['tot_bayar'];

        $this->load->view('user/dftr_order_ck', $data);
    }
    public function detail_order_ck($id)
    {
        $data['detail'] = $this->m_model->get_by_id('tb_order_ck', 'or_ck_number', $id)->result();
        // Hitung total bayar untuk setiap pesanan
        foreach ($data['detail'] as &$pesanan) {
            $pesanan->tot_bayar = $this->m_model->hitung_total_bayar($pesanan->berat_qty_ck, $pesanan->harga_perkilo);
        }
        $this->load->view('user/detail_order_ck', $data);
    }
    public function bayar_order_ck($id)
    {
        // $tot_bayar = $this->input->post('tot_bayar');
        // Ambil detail order berdasarkan ID
        $data['bayar'] = $this->m_model->get_by_id('tb_order_ck', 'or_ck_number', $id)->result();

        // Hitung total bayar untuk setiap pesanan
        foreach ($data['bayar'] as &$pesanan) {
            $pesanan->tot_bayar = $this->m_model->hitung_total_bayar($pesanan->berat_qty_ck, $pesanan->harga_perkilo);
        }
        // Tampilkan view untuk konfirmasi pembayaran
        $this->load->view('user/bayar_order_ck', $data);
    }
    public function aksi_bayar_ck()
    {
        $nominal_byr = $this->input->post('nominal_byr');

        $getRiwayat = $this->m_model->getRiwayat($nominal_byr);
        // Assuming bayar_ck handles the payment logic
        $this->m_model->bayar_ck($nominal_byr);
        $otherData = array(
            'or_ck_number' => $getRiwayat['or_ck_number'],
            'nama_pel_ck' => $getRiwayat['nama_pel_ck'],
            'jenis_paket_ck' => $getRiwayat['jenis_paket_ck'],
            'berat_qty_ck' => $getRiwayat['berat_qty_ck'],
            'harga_perkilo' => $getRiwayat['harga_perkilo'],
            'tot_bayar' => $getRiwayat['tot_bayar'],
            // ...
        );
        // Assuming simpan_riwayat_ck is for saving payment history
        $this->m_model->simpan_riwayat_ck($otherData);
        $this->load->view('user/bayar_order_ck');
    }

    public function struk($id)
    {
        $data['struk'] = $this->m_model->get_by_id('tb_riwayat_ck', 'or_ck_number', $id)->result();
        $this->load->view('user/struk', $data);
    }
    // File: YourController.php

    // public function aksi_bayar_dan_simpan_riwayat()
    // {
    //     $tot_bayar = $this->input->post('tot_bayar');
    //     // Ambil data lain dari formulir atau sumber lain
    //     $otherData = array(
    //         'or_ck_number' => $this->input->post('or_ck_number'),
    //         'nama_pel_ck' => $this->input->post('nama_pel_ck'),
    //         'no_telp_ck' => $this->input->post('no_telp_ck'),
    //         'alamat_ck' => $this->input->post('alamat_ck'),
    //         'jenis_paket_ck' => $this->input->post('jenis_paket_ck'),
    //         'wkt_krj_ck' => $this->input->post('wkt_krj_ck'),
    //         'berat_qty_ck' => $this->input->post('berat_qty_ck'),
    //         'harga_perkilo' => $this->input->post('harga_perkilo'),
    //         'tgl_masuk_ck' => $this->input->post('tgl_masuk_ck'),
    //         'tgl_keluar_ck' => $this->input->post('tgl_keluar_ck'),
    //         'keterangan_ck' => $this->input->post('keterangan_ck'),
    //         // ...
    //     );

    //     $this->m_model->bayar_dan_simpan_riwayat($tot_bayar, $otherData);
    //     $this->load->view('user/bayar_order_ck', ['tot_bayar' => $tot_bayar]);
    // }

    // public function aksi_bayar_dan_simpan_riwayat()
    // {
    //     // Validasi data dari form
    //     $this->form_validation->set_rules('tot_bayar', 'Total Bayar', 'required|numeric');
    //     $this->form_validation->set_rules('or_ck_number', 'Order Number', 'required'); // contoh validasi untuk or_ck_number, sesuaikan dengan kebutuhan

    //     // Lakukan validasi untuk data lainnya
    //     // ...

    //     // Jalankan validasi
    //     if ($this->form_validation->run() == FALSE) {
    //         // Validasi gagal, tampilkan kembali form dengan pesan kesalahan
    //         $this->load->view('user/bayar_order_ck');
    //     } else {
    //         // Validasi sukses, lanjutkan dengan aksi
    //         $tot_bayar = $this->input->post('tot_bayar');
    //         $otherData = array(
    //             'or_ck_number' => $this->input->post('or_ck_number'),
    //             'nama_pel_ck' => $this->input->post('nama_pel_ck'),
    //             'no_telp_ck' => $this->input->post('no_telp_ck'),
    //             'alamat_ck' => $this->input->post('alamat_ck'),
    //             'jenis_paket_ck' => $this->input->post('jenis_paket_ck'),
    //             'wkt_krj_ck' => $this->input->post('wkt_krj_ck'),
    //             'berat_qty_ck' => $this->input->post('berat_qty_ck'),
    //             'harga_perkilo' => $this->input->post('harga_perkilo'),
    //             'tgl_masuk_ck' => $this->input->post('tgl_masuk_ck'),
    //             'tgl_keluar_ck' => $this->input->post('tgl_keluar_ck'),
    //             'keterangan_ck' => $this->input->post('keterangan_ck'),
    //         );

    //         // Panggil fungsi bayar_dan_simpan_riwayat di model
    //         $this->m_model->bayar_dan_simpan_riwayat($tot_bayar, $otherData);

    //         // Tampilkan view atau redirect ke halaman lain
    //         $this->load->view('user/bayar_order_ck', ['tot_bayar' => $tot_bayar]);
    //     }
    // }


    // fungsi order cuci satuan
    public function order_cs()
    {
        $data['tb_order_cs'] = $this->m_model->get_data('tb_order_cs')->result();
        $data['tb_cuci_satuan'] = $this->m_model->getAllCuciSatuanData();
        $this->load->view('user/order_cs', $data);
    }
    public function aksi_tambah_order_cs()
    {

        $or_cs_number = $this->m_model->generateRandomCodeCs();
        $jenis_paket_cs = $this->m_model->getAllCuciSatuanData();
        $waktu_kerja_cs = $this->m_model->getAllCuciSatuanData();
        $tarif_cs = $this->m_model->getAllCuciSatuanData();
        $jenis_paket_cs = $this->input->post('jenis_paket_cs');
        $waktu_kerja_cs = $this->input->post('wkt_krj_cs');
        $tarif_cs = $this->input->post('harga_perpcs');
        $data = [
            'or_cs_number' => $or_cs_number,
            'jenis_paket_cs' => $jenis_paket_cs,
            'wkt_krj_cs' => $waktu_kerja_cs,
            'harga_perpcs' => $tarif_cs,
            'nama_pel_cs' => $this->input->post('nama_pel_cs'),
            'no_telp_cs' => $this->input->post('no_telp_cs'),
            'alamat_cs' => $this->input->post('alamat_cs'),
            // 'jenis_paket_cs' => $this->input->post('jenis_paket_cs'),
            'jml_pcs' => $this->input->post('jml_pcs'),
            'tgl_masuk_cs' => $this->input->post('tgl_masuk_cs'),
            'tgl_keluar_cs' => $this->input->post('tgl_keluar_cs'),
            'keterangan_cs' => $this->input->post('keterangan_cs'),
        ];
        $this->m_model->tambah_data('tb_order_cs', $data);
        redirect(base_url('user/dftr_order_cs'));
    }
    public function dftr_order_cs()
    {
        // Mengambil semua data pesanan dari tb_order_ck
        $data['get_cs'] = $this->m_model->get_data('tb_order_cs')->result();

        // Mengambil pesanan terbaru
        $pesananTerbaru = $this->m_model->get_pesanan_terbaru_cs();
        // var_dump($pesananTerbaru);

        // Tampilkan data pesanan terbaru
        $data['pesanan_terbaru'] = $pesananTerbaru;

        $this->load->view('user/dftr_order_cs', $data);
    }
    public function detail_order_cs($id)
    {
        $data['detail'] = $this->m_model->get_by_id('tb_order_cs', 'or_cs_number', $id)->result();
        foreach ($data['detail'] as &$pesanan) {
            $pesanan->tot_bayar = $this->m_model->hitung_total_bayar($pesanan->jml_pcs, $pesanan->harga_perpcs);
        }
        $this->load->view('user/detail_order_cs', $data);
    }

    // fungsi order cuci kering
    public function order_dc()
    {
        $data['tb_order_dc'] = $this->m_model->get_data('tb_order_dc')->result();
        $data['tb_dry_clean'] = $this->m_model->getAllCuciKeringData();
        $this->load->view('user/order_dc', $data);
    }
    public function aksi_tambah_order_dc()
    {

        $or_dc_number = $this->m_model->generateRandomCodeDc();
        $jenis_paket_dc = $this->m_model->getAllCuciKeringData();
        $waktu_kerja_dc = $this->m_model->getAllCuciKeringData();
        $tarif_dc = $this->m_model->getAllCuciKeringData();
        $jenis_paket_dc = $this->input->post('jenis_paket_dc');
        $waktu_kerja_dc = $this->input->post('wkt_krj_dc');
        $tarif_dc = $this->input->post('harga_perkilo');
        $data = [
            'or_dc_number' => $or_dc_number,
            'jenis_paket_dc' => $jenis_paket_dc,
            'wkt_krj_dc' => $waktu_kerja_dc,
            'harga_perkilo' => $tarif_dc,
            'nama_pel_dc' => $this->input->post('nama_pel_dc'),
            'no_telp_dc' => $this->input->post('no_telp_dc'),
            'alamat_dc' => $this->input->post('alamat_dc'),
            // 'jenis_paket_dc' => $this->input->post('jenis_paket_dc'),
            'berat_qty_dc' => $this->input->post('berat_qty_dc'),
            'tgl_masuk_dc' => $this->input->post('tgl_masuk_dc'),
            'tgl_keluar_dc' => $this->input->post('tgl_keluar_dc'),
            'keterangan_dc' => $this->input->post('keterangan_dc'),
        ];
        $this->m_model->tambah_data('tb_order_dc', $data);
        redirect(base_url('user/dftr_order_dc'));
    }
    public function dftr_order_dc()
    {
        // Mengambil semua data pesanan dari tb_order_ck
        $data['get_dc'] = $this->m_model->get_data('tb_order_dc')->result();

        // Mengambil pesanan terbaru
        $pesananTerbaru = $this->m_model->get_pesanan_terbaru_dc();
        // var_dump($pesananTerbaru);

        // Tampilkan data pesanan terbaru
        $data['pesanan_terbaru'] = $pesananTerbaru;

        $this->load->view('user/dftr_order_dc', $data);
    }
    public function detail_order_dc($id)
    {
        $data['detail'] = $this->m_model->get_by_id('tb_order_dc', 'or_dc_number', $id)->result();
        foreach ($data['detail'] as &$pesanan) {
            $pesanan->tot_bayar = $this->m_model->hitung_total_bayar($pesanan->berat_qty_dc, $pesanan->harga_perkilo);
        }
        $this->load->view('user/detail_order_dc', $data);
    }

    //  fungsi get paket
    public function paket_dc()
    {
        $data['data_dc'] = $this->m_model->hanya_dc('tb_dry_clean');
        $this->load->view('user/paket_dc', $data);
    }
    public function paket_cs()
    {
        $data['data_cs'] = $this->m_model->hanya_cs('tb_cuci_satuan');
        $this->load->view('user/paket_cs', $data);
    }
    public function paket_ck()
    {
        $data['data_ck'] = $this->m_model->hanya_ck('tb_cuci_komplit');
        $this->load->view('user/paket_ck', $data);
    }


}
