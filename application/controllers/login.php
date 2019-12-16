<?php
defined('BASEPATH') OR exit('No direct script access allowed');
session_start();
class login extends CI_Controller {
	public function index()
	{
		if (isset($_SESSION['level'])){
			if($_SESSION['level']==1){
				redirect('pengurus');
			}
			if($_SESSION['level']==2){
				redirect('musahil');
			}
			if($_SESSION['level']==3){
				redirect('warga');
			}
		}
		else{
			$this->load->view('index');
		}
	}
	
	public function log(){
		$this->load->model('model_login');
		$username=$this->input->post('username');
		$password = hash('sha256',$this->input->post('password'));
		
		$this->model_login->ceklogin($username,$password);
	}
	public function logout(){
		session_start();
		session_unset();
		session_destroy();
		redirect('login');
	}

}
