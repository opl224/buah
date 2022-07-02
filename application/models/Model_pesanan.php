<?php
class Model_pesanan extends CI_Model{

    function tampil_data_pesanan(){
        $data=$this->db->query("SELECT* FROM  tbl_pesanan");
        return $data;
    }

    function Simpan_pesanan($nama,$buah,$jenis,$jumlah,$keterangan){
        $data=$this->db->query("INSERT INTO tbl_pesanan (nama,buah,jenis,jumlah,keterangan) values('$nama','$buah','$jenis','$jumlah','$keterangan') ");
        return $data;
    }

    function update_pesanan($id ,$nama, $buah, $jenis, $jumlah, $keterangan){
        $data=$this->db->query("UPDATE tbl_pesanan set nama='$nama', buah='$buah', jenis='$jenis', jumlah='$jumlah', keterangan='$keterangan' where id='$id' ");
        return $data;
    }

    function hapus_pesanan($id){
        $data=$this->db->query("DELETE FROM tbl_pesanan where id='$id'");
        return $data;
    }

    function edit_pesanan($id){
        $data=$this->db->query("SELECT* FROM  tbl_pesanan where id='$id'");
        return $data;
    }
}

