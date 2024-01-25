<?php
class M_model extends CI_Model
{
    function get_data($table)
    {
        return $this->db->get($table);
    }
    function getWhere($table, $data)
    {
        return $this->db->get_where($table, $data);
    }
    public function register($data)
    {
        $this->db->insert('akun', $data);
    }
    public function get_by_id($table, $id_colomn, $id)
    {
        $data = $this->db->where($id_colomn, $id)->get($table);
        return $data;
    }
    public function ubah_data($table, $data, $where)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
        return $this->db->affected_rows();
    }
    public function tambah_data($table, $data)
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }
    public function delete($table, $field, $id)
    {
        $data = $this->db->delete($table, array($field => $id));
        return $data;
    }
    public function EmailSudahAda($email)
    {
        $this->db->where('email', $email);    // Menggunakan CodeIgniter Query Builder, kita menentukan kondisi pencarian berdasarkan kolom 'email'.
        $query = $this->db->get('akun');    // Melakukan query ke tabel 'user' dengan kondisi di atas.
        return $query->num_rows() > 0; //Memeriksa jumlah baris hasil query Jika jumlah baris (rows) lebih dari 0, berarti email sudah ada
    }
    public function usernameSudahAda($username)
    {
        $this->db->where('username', $username);    // Menggunakan CodeIgniter Query Builder, kita menentukan kondisi pencarian berdasarkan kolom 'username'.
        $query = $this->db->get('akun');    // Melakukan query ke tabel 'user' dengan kondisi di atas.
        return $query->num_rows() > 0; //Memeriksa jumlah baris hasil query Jika jumlah baris (rows) lebih dari 0, berarti username sudah ada
    }
    public function getAllCuciKeringData()
    {
        $this->db->select('tb_dry_clean.*, tb_order_dc.jenis_paket_dc, tb_order_dc.wkt_krj_dc, tb_order_dc.harga_perkilo');
        $this->db->from('tb_dry_clean');
        $this->db->join('tb_order_dc', 'tb_dry_clean.waktu_kerja_dc = tb_order_dc.id_order_dc', 'left');
        $query = $this->db->get();
        // Return the result as an array
        return $query->result_array();
    }
    public function getAllCuciKomplitData()
    {
        $this->db->select('tb_cuci_komplit.*, tb_order_ck.jenis_paket_ck, tb_order_ck.wkt_krj_ck, tb_order_ck.harga_perkilo');
        $this->db->from('tb_cuci_komplit');
        $this->db->join('tb_order_ck', 'tb_cuci_komplit.id_ck = tb_order_ck.id_order_ck', 'left');
        $query = $this->db->get();
        // Return the result as an array
        return $query->result_array();
    }
    public function getAllCuciSatuanData()
    {
        $this->db->select('tb_cuci_satuan.*, tb_order_cs.jenis_paket_cs, tb_order_cs.wkt_krj_cs, tb_order_cs.harga_perpcs');
        $this->db->from('tb_cuci_satuan');
        $this->db->join('tb_order_cs', 'tb_cuci_satuan.id_cs = tb_order_cs.id_order_cs', 'left');
        $query = $this->db->get();
        // Return the result as an array
        return $query->result_array();
    }
    // public function getDataPembayaran()
    // {
    //     // Query database untuk mengambil data
    //     $this->db->select('pembayaran.*,siswa.nama_siswa,kelas.tingkat_kelas, kelas.jurusan_kelas');
    //     $this->db->from('pembayaran');
    //     $this->db->join('siswa', 'pembayaran.id_siswa = siswa.id_siswa', 'left');
    //     $this->db->join('kelas', 'pembayaran.id_kelas = kelas.id', 'left');
    //     $query = $this->db->get();
    //     return $query->result();
    // }


    public function generateRandomCodeCk($length = 6)
    {
        $prefix = 'CK-';
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomCode = '';

        for ($i = 0; $i < $length; $i++) {
            $randomCode .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $prefix . $randomCode;
    }
    public function generateRandomCodeCs($length = 6)
    {
        $prefix = 'CS-';
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomCode = '';

        for ($i = 0; $i < $length; $i++) {
            $randomCode .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $prefix . $randomCode;
    }
    public function generateRandomCodeDc($length = 6)
    {
        $prefix = 'DC-';
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomCode = '';

        for ($i = 0; $i < $length; $i++) {
            $randomCode .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $prefix . $randomCode;
    }

    public function EmailSudahAdaa($email)
    {
        $this->db->where('email', $email);    // Menggunakan CodeIgniter Query Builder, kita menentukan kondisi pencarian berdasarkan kolom 'email'.
        $query = $this->db->get('akun');    // Melakukan query ke tabel 'user' dengan kondisi di atas.
        return $query->num_rows() > 0; //Memeriksa jumlah baris hasil query Jika jumlah baris (rows) lebih dari 0, berarti email sudah ada
    }

    public function hanya_karyawan()
    {
        $this->db->where('role', 'karyawan');
        $query = $this->db->get('akun');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array(); // Mengembalikan array kosong jika tidak ada data yang sesuai
        }
    }

    // public function hanya_karyawann($role)
    // {
    //     if ($role === 'lainnya') {
    //         $this->db->where_not_in('role', ['admin', 'karyawan']);
    //     } else {
    //         $this->db->where('role', $role);
    //     }

    //     return $this->db->count_all_results('akun');
    // }

    // File: M_model.php

    // ...

    public function hitungJumlahKaryawan()
    {
        $this->db->where('role', 'karyawan'); // Ganti 'tb_karyawan' dengan nama tabel karyawan Anda
        $this->db->from('akun'); // Ganti 'tb_karyawan' dengan nama tabel karyawan Anda
        return $this->db->count_all_results();
    }
    public function hitungJumlahOrder()
    {
        // Hitung jumlah order dari tb_order_ck
        $result_ck = $this->db->count_all_results('tb_order_ck');

        // Hitung jumlah order dari tb_order_dc
        $result_dc = $this->db->count_all_results('tb_order_dc');

        // Hitung jumlah order dari tb_order_cs
        $result_cs = $this->db->count_all_results('tb_order_cs');

        // Jumlahkan hasil-hasil perhitungan
        $total_order = $result_ck + $result_dc + $result_cs;

        return $total_order;
    }
    public function hitungJumlahPaket()
    {
        // Hitung jumlah order dari tb_order_ck
        $result_ck = $this->db->count_all_results('tb_cuci_komplit');

        // Hitung jumlah order dari tb_order_dc
        $result_dc = $this->db->count_all_results('tb_cuci_satuan');

        // Hitung jumlah order dari tb_order_cs
        $result_cs = $this->db->count_all_results('tb_dry_clean');

        // Jumlahkan hasil-hasil perhitungan
        $total_order = $result_ck + $result_dc + $result_cs;

        return $total_order;
    }


    public function hanya_ck()
    {
        $query = $this->db->get('tb_cuci_komplit');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array(); // Mengembalikan array kosong jika tidak ada data yang sesuai
        }
    }
    public function hanya_cs()
    {
        $query = $this->db->get('tb_cuci_satuan');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array(); // Mengembalikan array kosong jika tidak ada data yang sesuai
        }
    }
    public function hanya_dc()
    {
        $query = $this->db->get('tb_dry_clean');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array(); // Mengembalikan array kosong jika tidak ada data yang sesuai
        }
    }
    public function get_pesanan_by_nama_pelanggan($nama_pel_ck)
    {
        $this->db->where('nama_pel_ck', $nama_pel_ck);
        return $this->db->get('tb_order_ck')->row();
    }
    public function get_pesanan_terbaru_ck()
    {
        $this->db->order_by('id_order_ck', 'DESC');
        $this->db->limit(1);
        return $this->db->get('tb_order_ck')->row();
    }
    public function get_pesanan_terbaru_cs()
    {
        $this->db->order_by('id_order_cs', 'DESC');
        $this->db->limit(1);
        return $this->db->get('tb_order_cs')->row();
    }
    public function get_pesanan_terbaru_dc()
    {
        $this->db->order_by('id_order_dc', 'DESC');
        $this->db->limit(1);
        return $this->db->get('tb_order_dc')->row();
    }

    public function hitung_total_bayar($berat_qty_ck, $harga_perkilo)
    {
        return $berat_qty_ck * $harga_perkilo;
    }

    public function bayar_ck($nominal_byr)
    {

        $this->db->where('nominal_byr', $nominal_byr);
        $this->db->delete('tb_order_ck');
    }

    public function simpan_riwayat_ck($data)
    {
        $this->db->insert('tb_riwayat_ck', $data);
    }

    // public function bayar_dan_simpan_riwayat($tot_bayar, $otherData)
    // {
    //     // Lakukan logika pembayaran, misalnya memperbarui status pembayaran di tabel order
    //     // Sesuaikan dengan kebutuhan proyek Anda
    //     $this->bayar_ck($tot_bayar);

    //     // Simpan data ke dalam tabel riwayat
    //     $data = array(
    //         'tot_bayar' => $tot_bayar,
    //         // Tambahkan data lainnya sesuai kebutuhan
    //         'or_ck_number' => $otherData['or_ck_number'],
    //         'nama_pel_ck' => $otherData['nama_pel_ck'],
    //         'no_telp_ck' => $otherData['no_telp_ck'],
    //         'alamat_ck' => $otherData['alamat_ck'],
    //         'jenis_paket_ck' => $otherData['jenis_paket_ck'],
    //         'wkt_krj_ck' => $otherData['wkt_krj_ck'],
    //         'berat_qty_ck' => $otherData['berat_qty_ck'],
    //         'harga_perkilo' => $otherData['harga_perkilo'],
    //         'tgl_masuk_ck' => $otherData['tgl_masuk_ck'],
    //         'tgl_keluar_ck' => $otherData['tgl_keluar_ck'],
    //         'keterangan_ck' => $otherData['keterangan_ck'],
    //         // ...
    //     );

    //     $this->db->insert('tb_riwayat_ck', $data);
    // }

    public function getRiwayat($nominal_byr)
    {
        $this->db->select('or_ck_number,nama_pel_ck,jenis_paket_ck,berat_qty_ck,tot_bayar');
        $this->db->from('tb_order_ck');
        $this->db->where('nominal_byr', $nominal_byr);
        $query = $this->db->get();
        // Return the result as an array
        return $query->result_array();
    }
}
?>