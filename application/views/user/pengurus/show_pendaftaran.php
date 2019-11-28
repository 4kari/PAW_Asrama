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
		                        echo "<tr><td>NAMA</td><td>: ".$daftar->namalengkap."</td></tr>";
		                        echo "<tr><td>NIM</td><td>: ".$daftar->nim."</td></tr>";
		                        echo "<tr><td>PRODI</td><td>: ".$daftar->prodi."</td></tr>";
		                        echo "<tr><td>ALAMAT </td><td>: ".$daftar->alamat."</td></tr>";
		                        echo "<tr><td>JENIS KELAMIN</td><td>: ".$jk->jk."</td></tr>";
		                        echo "<tr><td>TANGGAL LAHIR </td><td>: ".$daftar->tgl_lahir."</td></tr>";
		                        echo "<tr><td>NOMOR/WA</td><td>: ".$daftar->nowa."</td></tr>";
		                        ?>
		                        </table>
		                    </div>
                        </div>
                        <h4 class="title-1 m-b-25 text-center">Berkas</h4>
                        <div class="row"><div class="col-4"><img src="<?php echo base_url();?>img/key.jpg" alt="foto"></div>
                    	if ($daftar->file_ktm!="") { ?>
                        <div class="col-4"><img src="<?php echo base_url();?>img/key.jpg" alt="ktm"></div>
                    	<?php if ($daftar->bukti_bayar!="") { 
                    	?>
                        <div class="col-3"><img src="<?php echo base_url();?>img/key.jpg" alt="bukti bayar"></div>
                    	<?php } else{ echo "<div class='row'><div class='col-3'></div><div class='col-6'>belum ada bukti pembayaran</div></div>"; }?>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->
    </div>
</div>
</body>
</html>
