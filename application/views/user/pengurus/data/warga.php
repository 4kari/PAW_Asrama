<?php
	$this->load->view('Temp/pengurus/header');
    $pendaf=$this->db->get('pendaftaran')->result();
    $daftar=$this->db->get_where('pendaftaran',["id_daftar" => $id])->row();
	$jk=$this->db->get_where('jk',["id_jk" => $daftar->id_jk])->row();
?>