<?php
defined('BASEPATH') OR exit('No direct script access allowed');
session_start();
class warga extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if ($_SESSION["level"]!=3){
			redirect('login');
		}
	}
	public function index(){
		$this->load->view('user/warga/index');
	}
}