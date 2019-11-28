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
		$this->load->view("user/pengurus/pendaftaran");
	}
	public function pembayaran(){
		$this->load->view("user/pengurus/pembayaran");
	}
	public function kegiatan(){
		$this->load->view("user/pengurus/kegiatan");
	}
	public function show_pendaftaran($id){
		$data['id']=$id;
		$this->load->view("user/pengurus/show_pendaftaran", $data);
	}
}