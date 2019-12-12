<?php
defined('BASEPATH') OR exit('No direct script access allowed');
session_start();
class warga extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if ($_SESSION["level"]!=3){
			redirect('login');
		}
	$this->load->model('model_warga');
	}
	public function index(){
		$this->load->view('user/warga/index');
	}
	public function izin(){
		$this->load->view('user/warga/izin');
	}
	public function profil(){
		$this->load->view('user/warga/profilwar');
	}
	public function bayar(){
		$model=$this->model_warga;
		$model->bayar();

	}
}
