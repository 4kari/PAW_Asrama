<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class model_pengurus extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
	private $_table="pendaftaran";
	public function veriv($id){
		$inp=array('keterangan' => 'Sudah di verivikasi silahkan buat akun');
		$this->db->where('id_daftar',$id);
		$this->db->update($this->_table, $inp);
	}
	public function unveriv($id){
		return $this->db->delete($this->_table, array("id_daftar" => $id));
	}
	public function perizinan($id,$choose){
		if($choose==1){
			$pengurus=$this->db->get_where('pengurus',["user_pengurus" => $_SESSION['user']])->row();
			$id_pengurus=$pengurus->id_pengurus;
			$data = array('id_pengurus' => $id_pengurus);
			$this->db->where('id_izin',$id);
			$this->db->update('izin', $data);
		}
		else{
			return $this->db->delete('izin', array("id_izin" => $id));
		}
		redirect('pengurus/perizinan');
	}
	public function Umusahil(){
		$post=$this->input->post();
		$id=$post['id'];
		$data= array(
			'nama_musahil'=>$post['Nama'],
			'gedung_musahil'=>$post['Gedung'],
			'kamar_musahil'=>$post['Kamar'],
			'nowa_musahil'=>$post['WA']);
		$this->db->where('id_musahil',$id);
		$this->db->update('musahil', $data);
		// echo "upd";
	}
	public function Dmusahil(){
		$post=$this->input->post();
		$id=$post['id'];
		$this->db->delete('musahil', array("id_musahil" => $id));
		// echo "del";
	}
	public function Imusahil(){
		$post=$this->input->post();
		$data= array(
			'nama_musahil'=>$post['Nama'],
			'user_musahil'=>$post['Username'],
			'gedung_musahil'=>$post['Gedung'],
			'kamar_musahil'=>$post['Kamar'],
			'nowa_musahil'=>$post['WA']);
		$user=array('username'=>$post['Username'],'password'=>hash('sha256',$post['Password']));
		$this->db->insert('user',$user);
		$this->db->insert('musahil',$data);
	}
}
