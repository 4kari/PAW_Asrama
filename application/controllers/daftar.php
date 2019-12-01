<?php
defined('BASEPATH') OR exit('No direct script access allowed');
session_start();
class daftar extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if (isset($_SESSION['level'])){
		  redirect('login');
		}
		$this->load->model("model_daftar");
	}
	public function index()
	{
		$this->load->view('daftar');
	}
	public function add(){
		$model=$this->model_daftar;
		$model->save();
	}
	public function berhasil(){
		$this->load->view("berhasil");
	}
	public function bayar(){
		$model=$this->model_daftar;
		$model->update();
		$this->load->view("pengumuman");
	}
	public function pembayaran(){
		$this->load->view('pembayaran');
	}
	public function pengumuman(){
		$this->load->view('pengumuman');
	}
	public function buatakun(){
		$this->load->view('akun');
	}
	public function informasi(){
		$this->load->view('informasi');
	}
	public function buat(){
		$model=$this->model_daftar;
		$model->cekakun();
		redirect('daftar/buatakun');
	}
}
