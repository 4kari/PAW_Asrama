<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class model_daftar extends CI_Model {
	public function __construct(){
		parent::__construct();
		$post=$this->input->post();
		if(isset($post['nim'])){
			$path="./img/".$post['nim'];	
		}
		else{
			$path="./img/";
		}
		$config['upload_path']=$path;
		$config['allowed_types'] = 'gif|jpg|png|zip|jpeg';
		$config['max_size']="0";
		$this->load->library('upload',$config);
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
	public function getall(){
		return $this->db->get($this->_table)->result();
	}
	public function getById($id){
		return $this->db->get_where($this->_table,["id_daftar" => $id])->row();
	}
	public function save(){
		$post = $this->input->post();
		$pendaf=$this->db->get($this->_table)->result();
		$lanjut=1;
		foreach ($pendaf as $row) {
			if($post['nim']==$row->nim){
				$lanjut=0;
				$_SESSION['daftar']="Nim Sudah Terdaftar";
			}
		}
		if($lanjut==1){
			$this->id_daftar = null;
			$this->namalengkap = $post["nama"];
			$this->nim = $post["nim"];
			$this->prodi = $post["prodi"];
			$this->alamat = $post["alamat"];
			$this->id_jk = $post["jk"];
			$this->tgl_lahir = $post["tgl"];
			$this->nowa = $post["nowa"];
			$this->bukti_bayar = null;
			$this->keterangan ='tidak ada bukti pembayaran';

			if(!$this->upload->do_upload('foto')){
				$error=array('error1' => $this->upload->display_errors());
			}else{
				$data=array('upload_data' => $this->upload->data());
				$this->foto = $data['upload_data']['file_name'];
			}
			if(!$this->upload->do_upload('ktm')){
				$error=array('error2' => $this->upload->display_errors());
			}else{
				$data=array('upload_data' => $this->upload->data());
				$this->file_ktm = $data['upload_data']['file_name'];
			}
			if (isset($error['error1'])){
				$_SESSION['daftar']="periksa file foto yang anda masukkan";
				redirect('daftar');
			}
			else if(isset($error['error2'])){
				$_SESSION['daftar']="periksa file ktm yang anda masukkan";
				redirect('daftar');
			}
			else{
				$this->db->insert($this->_table,$this);
				$_SESSION['daftar']="Pendaftaran Berhasil";
				redirect('daftar/berhasil');
			}
		}
	}
	public function update(){
		$pendaf=$this->db->get($this->_table)->result();
		$post = $this->input->post();
		$lanjut=0;
		foreach ($pendaf as $row) {
			if($row->nim==$post['nim'] && $row->keterangan!="menunggu validasi" && $row->keterangan!="Sudah di verivikasi silahkan buat akun"){
				$lanjut=1;
				$_SESSION['bayar']="NIM Terdaftar";
				break;
			}
			else{
				$_SESSION['bayar']="NIM tidak Terdaftar";			}
		}
		if($lanjut==1){
			if(!$this->upload->do_upload('bukti')){
				$error=array('error' => $this->upload->display_errors());
				$_SESSION['bayar']="Upload Error";
				redirect('daftar/pembayaran');
			}else{
				$data=array('upload_data' => $this->upload->data());
				$this->nim = $post["nim"];
				$this->bukti_bayar = $data['upload_data']['file_name'];
				$inp=array(
				'nim' => $post['nim'],
				'bukti_bayar' => $data['upload_data']['file_name'],
				'keterangan' => 'menunggu validasi'
				);
				$this->db->where('nim', $post["nim"]);
				$this->db->update($this->_table, $inp);
				$_SESSION['bayar']="Bukti pembayaran telah dikirim";
				redirect('daftar/pengumuman');
			}
		}
		redirect('daftar/pembayaran/');
	}
	public function delete(){
		return $this->db->delete($this->_table, array("id_daftar" => $post["id"]));
	}
	public function cekakun(){
		$post=$this->input->post();
		$pendaf=$this->db->get('pendaftaran');
		$usr=$this->db->get('user');
		$id=0;
		foreach ($pendaf->result() as $row) {
			if ($post['nim']==$row->nim && $row->keterangan=="Sudah di verivikasi silahkan buat akun"){
				$id=$row->id_daftar;
				$warga = array(
					'nama_warga' => $row->namalengkap,
					'nim_warga'=> $row->nim,
					'prodi_warga' => $row->prodi,
					'id_jk' => $row->id_jk,
					'alamat' => $row->alamat,
					'tgllahir' => $row->tgl_lahir,
					'user_warga' => $post['username'],
					'nowa_warga' => $row->nowa,
					'foto' => $row->foto
				);
				$user = array(
					'username' => $post['username'],
					'password' => hash('sha256',$post['password']),
					'level' => 3
					 );
				$cekusr=1;
				foreach ($usr->result() as $row) {
					if($row->username==$post['username']){
						$cekusr=0;
						$_SESSION['buat']="Username telah digunakan";
					}
				}
				if($cekusr==1){
					$this->db->insert('user',$user);
					$this->db->insert('wargaasrama',$warga);
					//$this->db->delete($this->_table, array("id_daftar" => $id));
					$_SESSION['buat']="akun berhasil dibuat";
				}
			}
			if(!isset($_SESSION['buat']) || $_SESSION['buat']!="akun berhasil dibuat"){
				$_SESSION['buat']='silahkan gunakan nim yang telah di verivikasi';
			}

		}
	}
}
