<?php
	$this->load->view('Temp/pengurus/header');
    $pendaf=$this->db->get('pendaftaran')->result();
    $daftar=$this->db->get_where('pendaftaran',["id_daftar" => $id])->row();
	$jk=$this->db->get_where('jk',["id_jk" => $daftar->id_jk])->row();
?>
<div class="page-container">
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
				<div class="row">
                    <div class="col-lg-9">
                        <h2 class="title-1 m-b-25 text-center">Data</h2>
                        <div class="row">
                        	<div class="col-3"></div>
                        	<div class="col-6">
		                        <table>
		                        <?php
		                        echo "<tr><td>NAMA </td><td>&nbsp;: ".$daftar->namalengkap."</td></tr>";
		                        echo "<tr><td>NIM </td><td>&nbsp;: ".$daftar->nim."</td></tr>";
		                        echo "<tr><td>PRODI </td><td>&nbsp;: ".$daftar->prodi."</td></tr>";
		                        echo "<tr><td>ALAMAT </td><td>&nbsp;: ".$daftar->alamat."</td></tr>";
		                        echo "<tr><td>JENIS KELAMIN </td><td>&nbsp;: ".$jk->jk."</td></tr>";
		                        echo "<tr><td>TANGGAL LAHIR </td><td>&nbsp;: ".$daftar->tgl_lahir."</td></tr>";
		                        echo "<tr><td>NOMOR/WA </td><td>&nbsp;: ".$daftar->nowa."</td></tr>";
		                        ?>
		                        </table>
		                    </div>
                            <div class="col-3 text-center">
                                <b>Kamar</b><br>
                                <b>-</b><br>
                                <b>Musahil</b><br>
                                <b>-</b>
                            </div>
                        </div>
                        <div class="row"> <h4 class="title-1 m-b-25 text-center col-lg-12">Berkas</h4></div><div class="row">
                            <div class="col-4"><img class="berkas" src="<?php echo base_url('img/'); echo $daftar->foto; ?>" alt="foto"></div>
                        
                        <div class="col-4"><img class="berkas" src="<?php echo base_url('img/'); echo $daftar->file_ktm;?>" alt="ktm"></div>
                        <?php
                        if ($daftar->bukti_bayar!="") {
                        ?>
                        <div class="col-3"><img class="berkas" src="<?php echo base_url('img/'); echo $daftar->bukti_bayar;?>" alt="bukti bayar"></div>
                        <?php } else{ echo "<div class='row'><div class='col-3'></div><div class='col-6'>belum ada bukti pembayaran</div></div>"; }?>
                        </div>
                        <div class="row m-4">
                            <div class="col-4"></div>
                            <div class="col-4 text-center">
                                <?php
                                if($daftar->keterangan!="Sudah di verivikasi silahkan buat akun"){
                                    if($daftar->bukti_bayar!=""){?>
                                        <a href="<?php echo site_url('pengurus/proses_pendaftaran/0/'); echo($id);?>" class="btn btn-success">LOLOS</a>&nbsp;&nbsp;&nbsp; <?php } ?>
                                <a href="<?php echo site_url('pengurus/proses_pendaftaran/0/0/'); echo($id);?>" class="btn btn-danger">Gagal</a>
                                <?php } ?>
                            </div>
                            <div class="col-4">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->
        </div>
    </div>
</div>
</body>
</html>
