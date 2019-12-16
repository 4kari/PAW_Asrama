<?php
defined('BASEPATH') OR exit('No direct script access allowed');
session_start();
class pengurus extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if ($_SESSION["level"]!=1){
			redirect('login');
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
		$model=$this->model_pengurus;
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
	public function show_warga(){
		$this->load->view('user/pengurus/data/show_warga');
	}
	public function musahil(){
		$this->load->view('user/pengurus/data/musahil');
	}
	public function proses_musahil($upd=1,$del=0,$ins=0){
		$model=$this->model_pengurus;
		if($upd==1){
			$model->Umusahil();
		}
		if($del==1){
			$model->Dmusahil();
		}
		if($ins==1){
			$model->Imusahil();
		}
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
	public function proses_perizinan($id,$choose=1){
		$model=$this->model_pengurus;
		$model->perizinan($id,$choose);
	}
}