<?php
defined('BASEPATH') OR exit('No direct script access allowed');
session_start();
class musahil extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if ($_SESSION["level"]!=2){
			redirect('login');
		}
	}
	public function index(){
		$this->load->view("user/musahil/index");
	}
	public function kamar(){
		$this->load->view('user/musahil/kamar');
	}
	public function pulang(){

	}
	public function account(){

	}
	public function settings(){

	}
	public function proses_kamar($code){

	}
}
