<?php
	$this->load->view('Temp/pengurus/header');
	$pendaf=$this->db->get('pendaftaran');
	$con_daftar=$pendaf->num_rows();
    $warga=$this->db->get('wargaasrama');
    $con_warga=$warga->num_rows();
    $musahil=$this->db->get('musahil');
    $con_musahil=$musahil->num_rows();
    $izin=$this->db->get('izin');
    $con_izin=$izin->num_rows();
    $nama_warga=array();
    foreach ($izin->result() as $row) {
        $test=$this->db->get_where('wargaasrama',['id_warga'=>$row->id_warga])->row();
        array_push($nama_warga, $test->nama_warga);
    }
	$nama=array();
	$ket=array();
	foreach ($pendaf->result() as $row) {
		array_push($nama, $row->namalengkap);
		if ($row->keterangan=="menunggu validasi"){
			array_push($ket, "data sudah lengkap");
		}
		else{
			array_push($ket, "menunggu bukti pembayaran");
		}
	}
	//$this->load->view('Temp/pengurus/sidebar');
?>
<div id="page-content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12"></div>
		</div>
	</div>
</div>
<div class="page-container">
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
            	<div class="row">
                    
                    <div class="col-lg-6">
                        <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                            <div class="au-card-title" style="background-image:url('images/bg-title-02.jpg');">
                                <div class="bg-overlay bg-overlay--blue"></div>
                                <h3>
                                    <i class="zmdi zmdi-comment-text"></i>Pendaftar Baru</h3>
                                <button class="au-btn-plus">
                                    <i class="fa fa-eye"></i>
                                </button>
                            </div>
                            <div class="au-inbox-wrap js-inbox-wrap">
                                <div class="au-message js-list-load">
                                    <div class="au-message__noti">
                                        <p>ada
                                            <span><?= $con_daftar; ?></span>
                                            pendaftar baru butuh verifikasi
                                        </p>
                                    </div>
                                    <div class="au-message-list">
                                    	<?php
                                    	if ($con_daftar>4){
                                    		$loop=4;
                                    	}
                                    	else {
                                    		$loop=count($nama);
                                    	}
                                    	for ($i=0; $i < $loop; $i++){
                                    	?>
                                        <div class="au-message__item unread">
                                            <div class="au-message__item-inner">
                                                <div class="au-message__item-text">
                                                	<?php
                                                		if($ket[$i]=="data sudah lengkap"){
                                                    		echo "<div class='avatar-wrap online'>";
                                                		}
                                                		else{
                                                			echo "<div class='avatar-wrap'>";
                                                		}
                                                	?>
                                                        <div class="avatar">
                                                            <img src="images/icon/avatar-02.jpg" alt="John Smith">
                                                        </div>
                                                    </div>
                                                    <div class="text">
                                                        <h5 class="name"><?= $nama[$i]; ?></h5>
                                                        <p>Baru saja mendaftar</p>
                                                    </div>
                                                </div>
                                                <div class="au-message__item-time">
                                                    <span><?= $ket[$i]?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    	}
                                        ?>                                                
                                    </div>
                                    <div class="au-message__footer">
                                        <a class="au-btn au-btn-load js-load-btn" href="<?php echo site_url('pengurus/pendaftaran/');?>">Lihat Semua</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                            <div class="au-card-title" style="background-image:url('images/bg-title-02.jpg');">
                                <div class="bg-overlay bg-overlay--blue"></div>
                                <h3>
                                    <i class="zmdi zmdi-comment-text"></i>Persetujuan Izin</h3>
                                <button class="au-btn-plus">
                                    <i class="fa fa-eye"></i>
                                </button>
                            </div>
                            <div class="au-inbox-wrap js-inbox-wrap">
                                <div class="au-message js-list-load">
                                    <div class="au-message__noti">
                                        <p>Ada
                                            <span><?php= $con_izin ; ?></span>
                                            warga yang butuh persetujuan
                                        </p>
                                    </div>
                                    <div class="au-message-list">
                                        <?php
                                        if ($con_izin>4){
                                            $loop=4;
                                        }
                                        else {
                                            $loop=$con_izin;
                                        }
                                        for ($i=0; $i < $loop; $i++){
                                        ?>
                                        <div class="au-message__item unread">
                                            <div class="au-message__item-inner">
                                                <div class="au-message__item-text">
                                                    <?php
                                                        echo "<div class='avatar-wrap online'>";
                                                    ?>
                                                        <div class="avatar">
                                                            <img src="images/icon/avatar-02.jpg" alt="John Smith">
                                                        </div>
                                                    </div>
                                                    <div class="text">
                                                        <h5 class="name"><?= $nama_warga[$i] ?></h5>
                                                        <p>Baru meminta izin</p>
                                                    </div>
                                                </div>
                                                <div class="au-message__item-time">
                                                    <span><?= "";?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="au-message__footer">
                                        <a class="au-btn au-btn-load js-load-btn" href="<?php echo site_url('pengurus/perizinan/');?>">Lihat Semua</a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-1">DATA</h2>
                        </div>
                    </div>
                </div>
                <div class="row m-t-25">
                    <a class="col-sm-6 col-lg-3" href="<?php echo site_url('pengurus/pendaftaran');?>">
                        <div class="overview-item overview-item--c1">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon">
                                        <i class="zmdi zmdi-account-o"></i>
                                    </div>
                                    <div class="text">
                                        <h2><?php echo $con_daftar; ?></h2>
                                        <span>Data Pendaftar Baru</span>
                                    </div>
                                </div>
                                <div class="overview-chart">
                                    <canvas id="widgetChart1"></canvas>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="col-sm-6 col-lg-3" href="<?php echo site_url('pengurus/warga');?>">
                        <div class="overview-item overview-item--c2">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon">
                                        <i class="zmdi zmdi-shopping-cart"></i>
                                    </div>
                                    <div class="text">
                                        <h2><?php echo $con_warga ?></h2>
                                        <span>Data Warga</span>
                                    </div>
                                </div>
                                <div class="overview-chart">
                                    <canvas id="widgetChart2"></canvas>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="col-sm-6 col-lg-3" href="<?php echo site_url('pengurus/musahil');?>">
                        <div class="overview-item overview-item--c3">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon">
                                        <i class="zmdi zmdi-calendar-note"></i>
                                    </div>
                                    <div class="text">
                                        <h2><?php echo $con_musahil ?></h2>
                                        <span>Data Musahil</span>
                                    </div>
                                </div>
                                <div class="overview-chart">
                                    <canvas id="widgetChart3"></canvas>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="col-sm-6 col-lg-3" href="<?php echo site_url('pengurus/kegiatan2');?>">
                        <div class="overview-item overview-item--c4">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon">
                                        <i class="zmdi zmdi-money"></i>
                                    </div>
                                    <div class="text">
                                        <h2><?php echo $con_kegiatan ?></h2>
                                        <span>Data Kegiatan</span>
                                    </div>
                                </div>
                                <div class="overview-chart">
                                    <canvas id="widgetChart4"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
<?php   
$this->load->view('Temp/pengurus/footer');
?>