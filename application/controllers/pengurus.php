<?php
defined('BASEPATH') OR exit('No direct script access allowed');
session_start();
class pengurus extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if ($_SESSION["level"]!=1){
			redirect('login');
			$model=$this->model_pengurus;
		}
		$this->load->model("model_pengurus");
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
	public function proses_pendaftaran($id,$ver=0,$unver=0){
		$data['id']=$id;
		if($ver!=0 || $unver!=0){
			if($ver!=0){
				$model->veriv($ver);
				$this->load->view("user/pengurus/konfirmasi/pendaftaran");
			}
			if($unver!=0){
				$model->unveriv($unver);
				$this->load->view("user/pengurus/konfirmasi/pendaftaran");
			}
		}else{
			$this->load->view("user/pengurus/konfirmasi/show_pendaftaran", $data);
		}
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
}
