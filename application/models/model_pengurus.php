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
}
