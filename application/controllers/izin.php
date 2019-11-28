<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class izin extends CI_Controller {
	public function index()
	{
		$this->load->view('user/warga/izin');
	}
	public function bayar(){
		$this->load->view('user/warga/bayar');
	}
	public function pengumuman(){

	}
	public function buatakun(){

	}
	public function informasi(){

	}
	public function insdata(){
		$nama=$this->input->post('tglmulai');
		$nim=$this->input->post('tglkembali');
		$prodi=$this->input->post('ket_izin');
		if ($tglmulai=="" || $tglkembali=="" || $ket_izin==""){
			redirect('izin');
		}
		else{
			$this->load->model('model_izin');
			$this->model_izin->cekdaftar($tglmulai,$tglkembali,$ket_izin);
		}
	}
}
