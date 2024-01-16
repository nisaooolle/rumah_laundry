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
    public function getTmbhOrderCk($no_ck)
    {
        $this->db->select('tb_order_ck.*, or_ck_number');
        $this->db->from('tb_order_ck');
        // $this->db->join('tb_order', 'tb_order_ck.id_ck = tb_order.id_order_ck', 'left');
        $this->db->where('or_ck_number', $no_ck);
        $query = $this->db->get();
        return $query->result();
    }

    public function generateRandomCode($length = 6)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomCode = '';

        for ($i = 0; $i < $length; $i++) {
            $randomCode .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $randomCode;
    }
    public function hanya_karyawan() {
        $this->db->where('role', 'karyawan');
        $query = $this->db->get('akun');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array(); // Mengembalikan array kosong jika tidak ada data yang sesuai
        }
    }
    public function hanya_ck() {
        $query = $this->db->get('tb_cuci_komplit');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array(); // Mengembalikan array kosong jika tidak ada data yang sesuai
        }
    }
    public function hanya_cs() {
        $query = $this->db->get('tb_cuci_satuan');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array(); // Mengembalikan array kosong jika tidak ada data yang sesuai
        }
    }
    public function hanya_dc() {
        $query = $this->db->get('tb_dry_clean');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array(); // Mengembalikan array kosong jika tidak ada data yang sesuai
        }
    }
}
?>