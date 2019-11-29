<?php
defined('BASEPATH') OR exit('No direct script access allowed');
session_start();
class pengurus extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if ($_SESSION["level"]!=1){
			redirect('login');
		}
	}
	public function index(){
		$this->load->view("user/pengurus/index");
	}
	public function pendaftaran(){
		$this->load->view("user/pengurus/konfirmasi/pendaftaran");
	}
	public function pembayaran(){
		$this->load->view("user/pengurus/konfirmasi/pembayaran");
	}
	public function kegiatan(){
		$this->load->view("user/pengurus/konfirmasi/kegiatan");
	}
	public function perizinan(){
		$this->load->view('user/pengurus/konfirmasi/perizinan');
	}
	public function show_pendaftaran($id){
		$data['id']=$id;
		$this->load->view("user/pengurus/konfirmasi/show_pendaftaran", $data);
	}
	public function warga(){
		$this->load->view('user/pengurus/data/warga');
	}
	public function musahil(){
		$this->load->view('user/pengurus/data/musahil');
	}
	public function pelanggaran(){
		$this->load->view('user/pengurus/data/pelanggaran');
	}
	public function kegiatan2(){
		$this->load->view('user/pengurus/data/kegiatan');
	}
	public function izin(){
		$this->load->view('user/pengurus/data/izin');
	}
	public function account(){
		$this->load->view('user/pengurus/account');
	}
	public function settings(){
		$this->load->view('user/pengurus/settings');
	}
	public function logout(){
		$this->load->view('user/pengurus/logout');
	}
}
