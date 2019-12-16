<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class model_warga extends CI_Model {
	public function __construct(){
		parent::__construct();
		$config['upload_path']='./img/';
		$config['allowed_types'] = 'gif|jpg|png|zip';
		$this->load->library('upload',$config);
	}
	private $_table="pendaftaran";
	
	public function getall(){
		return $this->db->get($this->_table)->result();
	}
	public function getById($id){
		return $this->db->get_where($this->_table,["id_daftar" => $id])->row();
	}
	public function bayar(){
		$warga=$this->db->get_where('wargaasrama',["user_warga" =>$_SESSION['user']])->row();
		$post = $this->input->post();
		$tgl_bayar = $post['tgl_bayar'];
		$jml_bayar = $post['jml'];
		//$ket_bayar = $post['bukti'];
		$bayarwarga=$this->db->get('pembayaran')->result();
		if(!$this->upload->do_upload('bukti')){
				$error=array('error1' => $this->upload->display_errors());
		}else{
			$data=array('upload_data' => $this->upload->data());
			$ket_bayar = $data['upload_data']['file_name'];
			$pembayaran = array(
				'id_warga' => $warga->id_warga,
				'tgl_bayar' => $tgl_bayar,
				'jml_bayar'=> $jml_bayar,
				'ket_bayar'=> $ket_bayar,
				);
			$this->db->insert('pembayaran',$pembayaran);
			redirect('daftar/berhasil');
	}

	}
	public function update(){
		$pendaf=$this->db->get($this->_table)->result();
		$post = $this->input->post();
		$lanjut=0;
		foreach ($pendaf as $row) {
			if($row->nim==$post['nim']){
				$lanjut=1;
				$_SESSION['bayar']="NIM tidak Terdaftar";
			}
		}
		if($lanjut==1){
			if(!$this->upload->do_upload('bukti')){
				$error=array('error' => $this->upload->display_errors());
				$_SESSION['bayar']="Upload Error";	
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
				$_SESSION['bayar']="Bukti pembayaran telah dikirim silahkan cek pengumnuman";
			}
		}
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
					// $this->db->delete($this->_table, array("id_daftar" => $id));
					$_SESSION['buat']="akun berhasil dibuat";
				}
			}
			if(!isset($_SESSION['buat']) || $_SESSION['buat']!="akun berhasil dibuat"){
				$_SESSION['buat']='silahkan gunakan nim yang telah di verivikasi';
			}
		}
	}
	public function izin(){
		$post=$this->input->post();
		$id_warga=$this->db->get_where('wargaasrama',['user_warga'=>$_SESSION['user']])->row()->id_warga;
		$data = array('id_izin' => "",
			'id_warga' => $id_warga,
			'tglmulai'=> $post['tglM'],
			'tglkembali'=> $post['tglK'],
			'ket_izin'=> $post['ket']);
		echo $id_warga;
		$this->db->insert('izin',$data);
	}
}