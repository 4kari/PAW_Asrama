<?php 
	$this->load->view('Temp/musahil/header');
    $this->load->view('Temp/musahil/modal');
	$warga=$this->db->get('wargaasrama')->result();
	$con_daftar=0;
	$nama=array();
	$ket=array();
	foreach ($warga as $row) {
		if ($row->kamar==""){
			$con_daftar+=1;
			array_push($nama, $row->nama_warga);
		}
	}
    $izin=$this->db->get('izin');
    $con_izin=$izin->num_rows();
    $nama_warga=array();
    foreach ($izin->result() as $row) {
        $test=$this->db->get_where('wargaasrama',['id_warga'=>$row->id_warga])->row();
        array_push($nama_warga, $test->nama_warga);
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
                    <?php if($con_daftar!=0){ ?>
                    <div class="col-lg-6">
                        <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                            <div class="au-card-title" style="background-image:url('images/bg-title-02.jpg');">
                                <div class="bg-overlay bg-overlay--blue"></div>
                                <h3>
                                    <i class="zmdi zmdi-comment-text"></i>Butuh Kamar</h3>
                                <button class="au-btn-plus">
                                    <i class="fa fa-eye"></i>
                                </button>
                            </div>
                            <div class="au-inbox-wrap js-inbox-wrap">
                                <div class="au-message js-list-load">
                                    <div class="au-message__noti">
                                        <p>ada
                                            <span><?= $con_daftar; ?></span>
                                            warga yang belum mendapat kamar
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
                                                	<div class='avatar-wrap online'>
                                                        <div class="avatar">
                                                            <img src="images/icon/avatar-02.jpg" alt="John Smith">
                                                        </div>
                                                    </div>
                                                    <div class="text">
                                                        <h5 class="name"><?= $nama[$i]; ?></h5>
                                                        <p>belum mendapat kamar</p>
                                                    </div>
                                                </div>
                                                <div class="au-message__item-time">
                                                    <span>baru</span>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    	}
                                        ?>                                                
                                    </div>
                                    <div class="au-message__footer">
                                        <a href="<?php echo site_url('musahil/kamar'); ?>" class="au-btn au-btn-load js-load-btn">Lihat Semua</a>
                                    </div>
                                </div>
                                <div class="au-chat">
                                    <div class="au-chat__title">
                                        <div class="au-chat-info">
                                            <div class="avatar-wrap online">
                                                <div class="avatar avatar--small">
                                                    <img src="images/icon/avatar-02.jpg" alt="John Smith">
                                                </div>
                                            </div>
                                            <span class="nick">
                                                <a href="#">John Smith</a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="au-chat__content">
                                        <div class="recei-mess-wrap">
                                            <span class="mess-time">12 Min ago</span>
                                            <div class="recei-mess__inner">
                                                <div class="avatar avatar--tiny">
                                                    <img src="images/icon/avatar-02.jpg" alt="John Smith">
                                                </div>
                                                <div class="recei-mess-list">
                                                    <div class="recei-mess">Lorem ipsum dolor sit amet, consectetur adipiscing elit non iaculis</div>
                                                    <div class="recei-mess">Donec tempor, sapien ac viverra</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="send-mess-wrap">
                                            <span class="mess-time">30 Sec ago</span>
                                            <div class="send-mess__inner">
                                                <div class="send-mess-list">
                                                    <div class="send-mess">Lorem ipsum dolor sit amet, consectetur adipiscing elit non iaculis</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="au-chat-textfield">
                                        <form class="au-form-icon">
                                            <input class="au-input au-input--full au-input--h65" type="text" placeholder="Type a message">
                                            <button class="au-input-icon">
                                                <i class="zmdi zmdi-camera"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                	<?php }
                	if($con_izin!=0){
                		?>
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
                                        <a class="au-btn au-btn-load js-load-btn" href="<?php echo site_url('musahil/perizinan/');?>">Lihat Semua</a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                	<?php }?>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT-->
    <!-- END PAGE CONTAINER-->
</div>
</body>
</html>