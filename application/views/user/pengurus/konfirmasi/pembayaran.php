<?php
	$this->load->view('Temp/pengurus/header');
    $pendaf=$this->db->get('pendaftaran')->result();
?>
<div class="page-container">
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
				<div class="row">
                    <div class="col-lg-9">
                        <h2 class="title-1 m-b-25">Data pendaftaran</h2>
                        <div class="table-responsive table--no-card m-b-40">
                            <table class="table table-borderless table-striped table-earning">
                                <thead>
                                    <?php
                                        echo "<tr>";
                                            echo "<th> Nama </th>";
                                            echo "<th> NIM </th>";
                                            echo "<th> Prodi </th>";
                                            echo "<th> Alamat </th>";
                                            echo "<th> Jenis Kelamin </th>";
                                            echo "<th> Action </th>";
                                        echo "</tr>";
                                    ?>
                                    
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($pendaf as $row) {
                                        if($row->keterangan!="Sudah di verivikasi silahkan buat akun"){
                                            $jk=$this->db->get_where('jk',["id_jk" => $row->id_jk])->row();
                                            $id=$row->id_daftar;
                                            echo "<tr>";
                                                echo "<td> $row->namalengkap</td>";
                                                echo "<td> $row->nim</td>";
                                                echo "<td> $row->prodi</td>";
                                                echo "<td> $row->alamat</td>";
                                                echo "<td> $jk->jk</td>";?>
                                                <td> <a href="<?php echo site_url('pengurus/proses_pendaftaran/'); echo($id); ?>" class="btn btn-success">Lihat</a></td>
                                            <?php
                                            echo "</tr>";
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                            </div>
                        </div>
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
