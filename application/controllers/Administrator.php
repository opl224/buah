<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller{
	function __construct()
	{
		parent:: __construct();
		$this->load->model('Model_Login');
	}


	function index(){
		$this->load->view('admin/login');
	}

	function auth (){
		$username =$this->input->post('username');
		$password =$this->input->post('password');
		$cadmin=$this->Model_Login->cekadmin($username,$password);
		if($cadmin->num_rows()>0){
			$xcadmin =$cadmin->row_array();
			$newdata = array(
				'id_user' => $xcadmin ['id_user'],
				'nama_user' => $xcadmin ['nama_user'],
				'email_user' => $xcadmin ['email_user'],
				'masuk' => TRUE

			);
			$this->session->set_userdata($newdata);
			redirect('Dashboard');
		}else{
			redirect('administrator/gagallogin');
		}
	}
	function gagallogin(){
		$url=base_url('administrator');
		echo $this->session->set_flashdata('pesan','Username atau Password anda salah !!!');
		redirect($url);

	}


	function logout(){
		$this->session->sess_destroy();
		$url=base_url('administrator');
		redirect($url);
	}


}