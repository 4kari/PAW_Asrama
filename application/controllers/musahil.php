<?php
defined('BASEPATH') OR exit('No direct script access allowed');
session_start();
class musahil extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if ($_SESSION["level"]!=2){
			redirect('login');
		}
		$this->load->model("model_musahil");
	}
	public function index(){
		$this->load->view("user/musahil/index");
	}
	public function kamar(){
		$this->load->view('user/musahil/kamar');
	}
	public function perizinan(){
		$this->load->view('user/musahil/perizinan');
	}
	public function account(){

	}
	public function settings(){

	}
	public function proses_perizinan($id,$choose=1){
		$model=$this->model_musahil;
		$model->perizinan($id,$choose);
	}
	public function proses_kamar(){
		$model=$this->model_musahil;
		$id=$this->input->post()['id'];
		$model->kamar($id);
	}
}