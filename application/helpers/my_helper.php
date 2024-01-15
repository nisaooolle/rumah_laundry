<?php

function convRupiah($value) {
    return 'Rp. ' . number_format($value);
}
function tampil_full_kelas_byid($id)
{
    $ci = &get_instance();
    $ci->load->database();
    $result = $ci->db->where('id', $id)->get('kelas');
    foreach ($result->result() as $c) {
        $stmt = $c->tingkat_kelas . ' ' . $c->jurusan_kelas;
        return $stmt;
    }
}


function nama_siswa_id($id)
{
    $ci = &get_instance();
    $ci->load->database();
    $result = $ci->db->where('id', $id)->getSiswaById('user');
    foreach ($result->result() as $c) {
        $stmt = $c->nama_siswa;
        return $stmt;
    }
}
function nama_full_siswa_id($id)
{
    $ci = &get_instance();
    $ci->load->database();
    $result = $ci->db->where('id', $id)->get('user');
    foreach ($result->result() as $c) {
        $stmt = $c->nama_siswa;
        return $stmt;
    }
}
function alamat_id($id)
{
    $ci = &get_instance();
    $ci->load->database();
    $result = $ci->db->where('id', $id)->get('user');
    foreach ($result->result() as $c) {
        $stmt = $c->alamat;
        return $stmt;
    }
}

function tampil_kelas_byid($id)
{
    $ci = &get_instance();
    $ci->load->database();
    $result = $ci->db->where('id_siswa', $id)->get('siswa');
    foreach ($result->result() as $c) {
        $stmt = $c->id_kelas;
        return $stmt;
    }
}
function tampil_mapel_byid($id)
{
    $ci = &get_instance();
    $ci->load->database();
    $result = $ci->db->where('id', $id)->get('mapel');
    foreach ($result->result() as $c) {
        $stmt = $c->nama_mapel;
        return $stmt;
    }
}

?>  