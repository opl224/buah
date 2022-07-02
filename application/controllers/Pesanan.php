<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesanan extends CI_Controller
{
    function __construct()
    {
        parent:: __construct();
        if(!isset($_SESSION['masuk'])){
            $url=base_url('administrator');
            redirect($url);
        }
        $this->load->model('Model_pesanan');
    }

    function index(){
        $data['data']=$this->Model_pesanan->tampil_data_pesanan();
        $this->load->view('admin/v_pesanan', $data);
    }

    function tambah_pesanan(){
        $this->load->view('admin/v_add_pesanan');
    }

    function edit_pesanan($id){
        $data['data']=$this->Model_pesanan->edit_pesanan($id);
        $this->load->view('admin/v_edit_pesanan', $data);
    }

    function Simpan_pesanan()
    {
        $nama=$this->input->post('xnama');
        $buah=$this->input->post('xbuah');
        $jenis=$this->input->post('xjenis');
        $jumlah=$this->input->post('xjumlah');
        $keterangan=$this->input->post('xketerangan');
        $this->Model_pesanan->Simpan_pesanan($nama, $buah, $jenis, $jumlah, $keterangan);
        echo $this->session->set_flashdata('pesan','Data Telah Disimpan!');
        redirect('Pesanan');
    }

    function update_pesanan()
    {
        $id=$this->input->post('xid');
        $nama=$this->input->post('xnama');
        $buah=$this->input->post('xbuah');
        $jenis=$this->input->post('xjenis');
        $jumlah=$this->input->post('xjumlah');
        $keterangan=$this->input->post('xketerangan');
        $this->Model_pesanan->update_pesanan($id ,$nama, $buah, $jenis, $jumlah, $keterangan);
        echo $this->session->set_flashdata('pesan','Data Berhasil di Update!');
        redirect('Pesanan');
    }

    function hapus_pesanan($id)
    {
        $this->Model_pesanan->hapus_pesanan($id);
        echo $this->session->set_flashdata('pesan','Data Berhasil di Hapus!');
        redirect('Pesanan');
    }
}