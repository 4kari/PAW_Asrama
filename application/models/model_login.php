<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class model_login extends CI_Model {
	public function ceklogin($username,$password)
	{
		$usr = $this->db->get('user');
		foreach($usr->result() as $row){
			if ($username==$row->username & $password==$row->password){
				$_SESSION['level']=$row->level;
				$_SESSION['user']=$username;
			}

		}
		redirect('login');		
	}
}
