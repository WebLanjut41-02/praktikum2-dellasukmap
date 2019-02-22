<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class paket extends CI_Controller {
	public function __construct()
	{
	parent::__construct();
	$this->load->model("dblogin");
	$this->load->model("dbpaket");


	}

	public function index()
	{
		$this->load->view('login');
	}

	public function proseslogin()
	{
		$data['karyawan']= $this->dblogin->mlogin()-> result();
		$nip = $this->session->userdata('nip');
		if($nip==""){
			$this->load->view('login');
		}else{
			redirect('login/logout');
		}
	}

	public function ceklogin()
	{
		
		$nip = $this->input->post("nip");
		$nama = $this->input->post("nama");
		$where = array(
			'nip' => $nip,
			'nama' => $nama);

		$cek= $this->dblogin->mlogin("karyawan", $where)->num_rows();
		if ($cek >= 0) {
			$data_session = array(
			'nip' => $nip,
			'status' => "login");

			$this->session->set_userdata($data_session);

			redirect('paket/tampil');
		}else{
			$pesan = "Login Gagal! Masukkan Data Dengan Benar!";
        echo "<script type='text/javascript'>alert('$pesan'); </script>";
        echo "<meta http-equiv='refresh' content='1;url=index'>";
		
		}
	}

	public function tampil()
	{
		$data['paket']= $this->dbpaket->tampil_data()-> result();
		$this->load->view('tampilan', $data);
	}

	public function prosestampil()
	{
		$Id_Paket = $this->input->post('Id_Paket');
		$Tgl_Datang = $this->input->post('Tgl_Datang');
		$Sasaran = $this->input->post('Sasaran');
		$Penerima = $this->input->post('Isi_Paket');
		$tgl_Terima = $this->input->post('Tgl_Terima');

		$data = array(
			'Id_Paket'=>'$Isi_Paket',
			'Tgl_Datang'=>'$Tgl_Datang',
			'Sasaran'=>'$Sasaran',
			'Penerima'=>'$Penerima',
			'Tgl_Penerima'=>'$Tgl_Penerima');

		$this->dbpaket->input_data($data,'paket');
		redirect('paket/tampil');
	}

	public function tedit(){
		$this->load->view('edit');
	}

	// public function prosesedit(){
	// 	$this->input->post('Tgl_Terima');
	// 	$data = array(

	// 	$this->load->view('edit');
	// }


	public function inputpaket()
	{
		$this->load->view('inputpaket');
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('paket/index');

	}


}
