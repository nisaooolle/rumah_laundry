<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_model'); // Sesuaikan dengan nama model yang sebenarnya
        $this->load->helper('my_helper');
        if ($this->session->userdata('loged_in') != true || $this->session->userdata('role') != 'user') {
            redirect(base_url() . 'auth/login');
        }
    }
    public function index()
    {
        $data['user'] = $this->m_model->get_data('user')->num_rows();
        $data['data_pelanggan'] = $this->m_model->get_data('data_pelanggan')->result();
        $data['nama_pelanggan'] = $this->m_model->getNamaPelanggan(); // Replace with your actual method
        $data['tanggal_p'] = $this->m_model->getTanggalData(); // Replace with your actual method
        $this->load->view('user/dashboard_u', $data);
    }
    
}
