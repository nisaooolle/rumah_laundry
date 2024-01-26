<?php
use Dompdf\Dompdf;
use Dompdf\Options;

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
        $jenis_paket_ck = $this->input->post('jenis_paket_ck');

        // Ambil detail paket dari model
        $paketDetails = $this->m_model->getPaketDetailsCk($jenis_paket_ck);

        if (!$paketDetails) {
            // Handle paket tidak valid
            echo "Paket tidak valid: " . $jenis_paket_ck;
            return;
        }

        // Hitung total bayar berdasarkan berat_qty_ck dan harga_perkilo
        $berat_qty_ck = $this->input->post('berat_qty_ck');
        $tot_bayar = $berat_qty_ck * $paketDetails['tarif_ck'];  // Ganti dengan nama kolom yang sesuai

        $data = [
            'or_ck_number' => $or_ck_number,
            'jenis_paket_ck' => $jenis_paket_ck,
            'wkt_krj_ck' => $paketDetails['waktu_kerja_ck'],
            'harga_perkilo' => $paketDetails['tarif_ck'],  // Ganti dengan nama kolom yang sesuai
            'nama_pel_ck' => $this->input->post('nama_pel_ck'),
            'no_telp_ck' => $this->input->post('no_telp_ck'),
            'alamat_ck' => $this->input->post('alamat_ck'),
            'berat_qty_ck' => $berat_qty_ck,
            'tgl_masuk_ck' => $this->input->post('tgl_masuk_ck'),
            'tgl_keluar_ck' => $this->input->post('tgl_keluar_ck'),
            'keterangan_ck' => $this->input->post('keterangan_ck'),
            'tot_bayar' => $tot_bayar,
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
        // foreach ($data['detail'] as &$pesanan) {
        //     $pesanan->tot_bayar = $this->m_model->hitung_total_bayar($pesanan->berat_qty_ck, $pesanan->harga_perkilo);
        // }
        $this->load->view('user/detail_order_ck', $data);
    }
    public function bayar_order_ck($id)
    {
        // $tot_bayar = $this->input->post('tot_bayar');
        // Ambil detail order berdasarkan ID
        $data['bayar'] = $this->m_model->get_by_id('tb_order_ck', 'or_ck_number', $id)->result();

        // Tampilkan view untuk konfirmasi pembayaran
        $this->load->view('user/bayar_order_ck', $data);
    }
    public function bayar_dan_simpan_riwayat($or_ck_number)
    {
        // Get data based on or_ck_number from tb_order_ck
        $order_data = $this->m_model->get_by_id('tb_order_ck', 'or_ck_number', $or_ck_number)->row_array();

        if (!$order_data) {
            // Handle the case when data with the given or_ck_number is not found
            echo "Data not found";
            return;
        }

        // Assuming bayar_ck handles the payment logic
        // You might need to implement the actual payment logic in the bayar_ck function
        $this->m_model->bayar_ck($order_data['tot_bayar']);

        // Data to be moved to tb_riwayat_ck
        $riwayat_data = array(
            'or_ck_number' => $order_data['or_ck_number'],
            'nama_pel_ck' => $order_data['nama_pel_ck'],
            'no_telp_ck' => $order_data['no_telp_ck'],
            'alamat_ck' => $order_data['alamat_ck'],
            'wkt_krj_ck' => $order_data['wkt_krj_ck'],
            'harga_perkilo' => $order_data['harga_perkilo'],
            'tgl_masuk_ck' => $order_data['tgl_masuk_ck'],
            'tgl_keluar_ck' => $order_data['tgl_keluar_ck'],
            'tot_bayar' => $order_data['tot_bayar'],
            'jenis_paket_ck' => $order_data['jenis_paket_ck'],
            'berat_qty_ck' => $order_data['berat_qty_ck'],
            'keterangan_ck' => $order_data['keterangan_ck'],
            'status' => 'Sukses'
            // Add other fields as needed
        );

        // Save data to tb_riwayat_ck
        $this->m_model->simpan_riwayat_ck($riwayat_data);

        // Delete data from tb_order_ck
        $this->m_model->hapus_data_by_or_ck_number('tb_order_ck', 'or_ck_number', $or_ck_number);

        // Optionally, you can load a view or redirect the user to another page
        // $this->load->view('success_page', $data);
        // or
        // redirect('success_page');


        redirect(base_url('user/struk_ck/' . $order_data['or_ck_number']));
    }
    public function struk_ck($id)
    {
        $data['struk'] = $this->m_model->get_by_id('tb_riwayat_ck', 'or_ck_number', $id)->result();
        $this->load->view('user/struk_ck', $data);
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
        $or_cs_number = $this->m_model->generateRandomCodecs();
        $jenis_paket_cs = $this->input->post('jenis_paket_cs');

        // Ambil detail paket dari model
        $paketDetails = $this->m_model->getPaketDetailscs($jenis_paket_cs);

        if (!$paketDetails) {
            // Handle paket tidak valid
            echo "Paket tidak valid: " . $jenis_paket_cs;
            return;
        }

        // Hitung total bayar berdasarkan berat_qty_cs dan harga_perkilo
        $jml_pcs = $this->input->post('jml_pcs');
        $tot_bayar = $jml_pcs * $paketDetails['tarif_cs'];  // Ganti dengan nama kolom yang sesuai

        $data = [
            'or_cs_number' => $or_cs_number,
            'jenis_paket_cs' => $jenis_paket_cs,
            'wkt_krj_cs' => $paketDetails['waktu_kerja_cs'],
            'harga_perpcs' => $paketDetails['tarif_cs'],  // Ganti dengan nama kolom yang sesuai
            'nama_pel_cs' => $this->input->post('nama_pel_cs'),
            'no_telp_cs' => $this->input->post('no_telp_cs'),
            'alamat_cs' => $this->input->post('alamat_cs'),
            'jml_pcs' => $jml_pcs,
            'tgl_masuk_cs' => $this->input->post('tgl_masuk_cs'),
            'tgl_keluar_cs' => $this->input->post('tgl_keluar_cs'),
            'keterangan_cs' => $this->input->post('keterangan_cs'),
            'tot_bayar' => $tot_bayar,
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
        $this->load->view('user/detail_order_cs', $data);
    }
    public function bayar_order_cs($id)
    {
        // $tot_bayar = $this->input->post('tot_bayar');
        // Ambil detail order berdasarkan ID
        $data['bayar'] = $this->m_model->get_by_id('tb_order_cs', 'or_cs_number', $id)->result();

        // Tampilkan view untuk konfirmasi pembayaran
        $this->load->view('user/bayar_order_cs', $data);
    }
    public function bayar_dan_simpan_riwayat_cs($or_cs_number)
    {
        // Get data based on or_cs_number from tb_order_cs
        $order_data = $this->m_model->get_by_id('tb_order_cs', 'or_cs_number', $or_cs_number)->row_array();

        if (!$order_data) {
            // Handle the case when data with the given or_cs_number is not found
            echo "Data not found";
            return;
        }

        // Assuming bayar_cs handles the payment logic
        // You might need to implement the actual payment logic in the bayar_cs function
        $this->m_model->bayar_cs($order_data['tot_bayar']);

        // Data to be moved to tb_riwayat_cs
        $riwayat_data = array(
            'or_cs_number' => $order_data['or_cs_number'],
            'nama_pel_cs' => $order_data['nama_pel_cs'],
            'no_telp_cs' => $order_data['no_telp_cs'],
            'alamat_cs' => $order_data['alamat_cs'],
            'wkt_krj_cs' => $order_data['wkt_krj_cs'],
            'harga_perpcs' => $order_data['harga_perpcs'],
            'tgl_masuk_cs' => $order_data['tgl_masuk_cs'],
            'tgl_keluar_cs' => $order_data['tgl_keluar_cs'],
            'tot_bayar' => $order_data['tot_bayar'],
            'jenis_paket_cs' => $order_data['jenis_paket_cs'],
            'jml_pcs' => $order_data['jml_pcs'],
            'keterangan_cs' => $order_data['keterangan_cs'],
            'status' => 'Sukses'
            // Add other fields as needed
        );

        // Save data to tb_riwayat_cs
        $this->m_model->simpan_riwayat_cs($riwayat_data);

        // Delete data from tb_order_cs
        $this->m_model->hapus_data_by_or_cs_number('tb_order_cs', 'or_cs_number', $or_cs_number);

        // Optionally, you can load a view or redirect the user to another page
        // $this->load->view('success_page', $data);
        // or
        // redirect('success_page');
        redirect(base_url('user/struk_cs/' . $order_data['or_cs_number']));

    }
    public function struk_cs($id)
    {
        $data['struk'] = $this->m_model->get_by_id('tb_riwayat_cs', 'or_cs_number', $id)->result();
        $this->load->view('user/struk_cs', $data);
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
        $or_dc_number = $this->m_model->generateRandomCodedc();
        $jenis_paket_dc = $this->input->post('jenis_paket_dc');

        // Ambil detail paket dari model
        $paketDetails = $this->m_model->getPaketDetailsdc($jenis_paket_dc);

        if (!$paketDetails) {
            // Handle paket tidak valid
            echo "Paket tidak valid: " . $jenis_paket_dc;
            return;
        }

        // Hitung total bayar berdasarkan berat_qty_dc dan harga_perkilo
        $berat_qty_dc = $this->input->post('berat_qty_dc');
        $tot_bayar = $berat_qty_dc * $paketDetails['tarif_dc'];  // Ganti dengan nama kolom yang sesuai

        $data = [
            'or_dc_number' => $or_dc_number,
            'jenis_paket_dc' => $jenis_paket_dc,
            'wkt_krj_dc' => $paketDetails['waktu_kerja_dc'],
            'harga_perkilo' => $paketDetails['tarif_dc'],  // Ganti dengan nama kolom yang sesuai
            'nama_pel_dc' => $this->input->post('nama_pel_dc'),
            'no_telp_dc' => $this->input->post('no_telp_dc'),
            'alamat_dc' => $this->input->post('alamat_dc'),
            'berat_qty_dc' => $berat_qty_dc,
            'tgl_masuk_dc' => $this->input->post('tgl_masuk_dc'),
            'tgl_keluar_dc' => $this->input->post('tgl_keluar_dc'),
            'keterangan_dc' => $this->input->post('keterangan_dc'),
            'tot_bayar' => $tot_bayar,
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
        $this->load->view('user/detail_order_dc', $data);
    }

    public function bayar_order_dc($id)
    {
        // $tot_bayar = $this->input->post('tot_bayar');
        // Ambil detail order berdasarkan ID
        $data['bayar'] = $this->m_model->get_by_id('tb_order_dc', 'or_dc_number', $id)->result();

        // Tampilkan view untuk konfirmasi pembayaran
        $this->load->view('user/bayar_order_dc', $data);
    }
    public function bayar_dan_simpan_riwayat_dc($or_dc_number)
    {
        // Get data based on or_dc_number from tb_order_dc
        $order_data = $this->m_model->get_by_id('tb_order_dc', 'or_dc_number', $or_dc_number)->row_array();

        if (!$order_data) {
            // Handle the case when data with the given or_dc_number is not found
            echo "Data not found";
            return;
        }

        // Assuming bayar_dc handles the payment logic
        // You might need to implement the actual payment logic in the bayar_dc function
        $this->m_model->bayar_dc($order_data['tot_bayar']);

        // Data to be moved to tb_riwayat_dc
        $riwayat_data = array(
            'or_dc_number' => $order_data['or_dc_number'],
            'nama_pel_dc' => $order_data['nama_pel_dc'],
            'no_telp_dc' => $order_data['no_telp_dc'],
            'alamat_dc' => $order_data['alamat_dc'],
            'wkt_krj_dc' => $order_data['wkt_krj_dc'],
            'harga_perkilo' => $order_data['harga_perkilo'],
            'tgl_masuk_dc' => $order_data['tgl_masuk_dc'],
            'tgl_keluar_dc' => $order_data['tgl_keluar_dc'],
            'tot_bayar' => $order_data['tot_bayar'],
            'jenis_paket_dc' => $order_data['jenis_paket_dc'],
            'berat_qty_dc' => $order_data['berat_qty_dc'],
            'keterangan_dc' => $order_data['keterangan_dc'],
            'status' => 'Sukses'
            // Add other fields as needed
        );

        // Save data to tb_riwayat_dc
        $this->m_model->simpan_riwayat_dc($riwayat_data);

        // Delete data from tb_order_dc
        $this->m_model->hapus_data_by_or_dc_number('tb_order_dc', 'or_dc_number', $or_dc_number);

        // Optionally, you can load a view or redirect the user to another page
        // $this->load->view('success_page', $data);
        // or
        redirect(base_url('user/struk_dc/' . $order_data['or_dc_number']));
    }
    public function struk_dc($id)
    {
        // Load data for the 'struk_dc' view
        $data['struk'] = $this->m_model->get_by_id('tb_riwayat_dc', 'or_dc_number', $id)->result();

        // Generate PDF
        // $this->generate_pdf($id);

        // Load the 'struk_dc' view
        $this->load->view('user/struk_dc', $data);
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

    public function generate_pdf($or_dc_number)
    {
        // Load necessary data from your model
        $order_data = $this->m_model->get_by_id('tb_riwayat_dc', 'or_dc_number', $or_dc_number)->row_array();

        if (!$order_data) {
            // Handle the case when data with the given or_dc_number is not found
            echo "Data not found";
            return;
        }

        // Load the dompdf library
        require_once APPPATH . 'third_party/dompdf/autoload.inc.php';

        // Initialize dompdf
        $options = new \Dompdf\Options();  // Capitalize 'Options' and use the correct namespace
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);

        $dompdf = new \Dompdf\Dompdf($options);  // Capitalize 'Dompdf' and use the correct namespace

        // Load the HTML content for the PDF
        $html = $this->load->view('pdf_template', ['order_data' => $order_data], true);

        // Load the HTML to dompdf
        $dompdf->loadHtml($html);

        // Set paper size (A4)
        $dompdf->setPaper('A4', 'portrait');

        try {
            // Render the HTML as PDF
            $dompdf->render();

            // Output the generated PDF
            $dompdf->stream('struk_dc.pdf', ['Attachment' => 0]);

            // Return success response
            echo json_encode(['success' => true]);
        } catch (\Exception $e) {
            // Return error response
            echo json_encode(['success' => false, 'error' => $e->getMessage()]);
        }
    }

    public function download_export_pdf($id)
    {
        $data['struk'] = $this->m_model->get_peminjaman_pdf_by_id($this->uri->segment(4))->result();

        if ($this->uri->segment(3) == "pdf") {
            $this->load->library('pdf');

            $data['base_url'] = base_url();
            $this->pdf->load_view('operator/peminjaman/download_export_pdf', $data);

            $this->pdf->render();

            $this->pdf->stream("bukti_booking.pdf", array("Attachment" => true));
        } else {
            $this->load->view('operator/download_export_pdf', $data);
        }
    }
}
