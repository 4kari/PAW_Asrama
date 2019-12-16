<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class model_musahil extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
	private $_table="wargaasrama";

	public function kamar($id){
		$post=$this->input->post();
		if($post['kamar']!="" && $post['gedung']!=""){
			$kamar=$post['kamar'];
			$gedung=$post['gedung'];
			$user=$_SESSION['user'];
			$musahil=$this->db->get_where('musahil',["user_musahil" => $user])->row();
			$data = array(
				'id_musahil' => $musahil->id_musahil,
				'kamar' => $kamar,
				'gedung' => $gedung);
			$this->db->where('id_warga',$id);
			$this->db->update($this->_table, $data);
			redirect('musahil/kamar');
		}
		redirect('musahil');
	}
	public function perizinan($id,$choose){
		if($choose==1){
			$musahil=$this->db->get_where('musahil',["user_musahil" => $_SESSION['user']])->row();
			$id_musahil=$musahil->id_musahil;
			$data = array('id_musahil' => $id_musahil);
			$this->db->where('id_izin',$id);
			$this->db->update('izin', $data);
		}
		else{
			$this->db->delete('izin', array("id_izin" => $id));
		}
		redirect('musahil/perizinan');
	}
}
