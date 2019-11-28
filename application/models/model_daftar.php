<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class model_daftar extends CI_Model {
	public function __construct(){
		parent::__construct();
		$config['upload_path']='./img';
		$config['allowed_types']='jpg|png|zip';
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
	public function rules(){
		return [
			['field' => 'nama',
			'label' => 'Nama',
			'rules' => 'required'],
			['field' => 'nim',
			'label' => 'Nim',
			'rules' => 'numeric'],
			['field' => 'prodi',
			'label' => 'Prodi',
			'rules' => 'required'],
			['field' => 'alamat',
			'label' => 'alamat',
			'rules' => 'required'],
			['field' => 'jk',
			'label' => 'jk',
			'rules' => 'required'],
			['field' => 'foto',
			'label' => 'foto',
			'rules' => 'required'],
			['field' => 'ktm',
			'label' => 'ktm',
			'rules' => 'required'],
			['field' => 'tgl',
			'label' => 'tgl',
			'rules' => 'required'],
			['field' => 'nowa',
			'label' => 'nowa',
			'rules' => 'required'],
			['field' => 'bukti',
			'label' => 'bukti',
			'rules' => 'required']
		];
	}
	public function ruleB(){
		return[['field' => 'nim',
			'label' => 'Nim',
			'rules' => 'required'],
			['field' => 'bukti',
			'label' => 'Bukti',
			'rules' => 'required']];
	}
	public function getall(){
		return $this->db->get($this->_table)->result();
	}
	public function getById($id){
		return $this->db->get_where($this->_table,["id_daftar" => $id])->row();
	}
	public function save(){
		$post = $this->input->post();
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
			$error=array('error' => $this->upload->display_errors());
		}else{
			$data=array('upload_data' => $this->upload->data());
			$this->foto = $data['upload_data']['file_name'];
		}
		if(!$this->upload->do_upload('ktm')){
			$error=array('error' => $this->upload->display_errors());
		}else{
			$data=array('upload_data' => $this->upload->data());
			$this->file_ktm = $data['upload_data']['file_name'];
		}
		$this->db->insert($this->_table,$this);
	}
	public function update(){
		$post = $this->input->post();
		if(!$this->upload->do_upload('bukti')){
			$error=array('error' => $this->upload->display_errors());
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
		}
	}
	public function delete(){
		return $this->db->delete($this->_table, array("id_daftar" => $post["id"]));
	}

	//end of tutor
	public function cekdaftar($nama,$nim,$prodi,$alamat,$tl,$nowa,$jk,$foto,$ktm)
	{
		$pendaftaran = $this->db->get('pendaftaran');
		foreach ($warga->result() as $row) {
			if ($row->nim==$nim){
				redirect('daftar');
			}
		}
	}
}
