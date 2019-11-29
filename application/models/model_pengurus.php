<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class model_pengurus extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
	private $_table="pendaftaran";
	public $id_daftar;
	public $namalengkap;
	public $nim;
	public $prodi;
	public $alamat;
	public $id_jk;
	public $foto;
	public $file_ktm;
	public $id_pengurus;
	public $tgl_lahir;
	public $nowa;
	public $bukti_bayar;
	public $keterangan;
	
	public function veriv($id){
		$inp=array('keterangan' => 'Sudah di verivikasi silahkan buat akun');
		$this->db->where('id_daftar',$id);
		$this->db->update($this->_table, $inp);
	}
	public function unveriv($id){
		return $this->db->delete($this->_table, array("id_daftar" => $id));
	}
}
