<?php
    $this->load->view('Temp/pengurus/header');
    $izin=$this->db->get('izin')->result();
?>
<div class="page-container">
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
        <div class="row">
                    <div class="col-lg-9">
                        <h2 class="title-1 m-b-25">Data Permohonan Izin</h2>
                        <div class="table-responsive table--no-card m-b-40">
                            <table class="table table-borderless table-striped table-earning">
                                <thead>
                                    <?php
                                        echo "<tr>";
                                            echo "<th> No </th>";
                                            echo "<th> Nama </th>";
                                            echo "<th> NIM </th>";
                                            echo "<th> Prodi </th>";
                                            echo "<th> Tanggal mulai </th>";
                                            echo "<th> Tanggal kembali </th>";
                                            echo "<th> Keterangan </th>";
                                            echo "<th> Disetujui </th>";
                                            echo "<th> Action </th>";
                                        echo "</tr>";
                                    ?>
                                    
                                </thead>
                                <tbody>
                                    <?php
                                    $no=0;
                                    foreach ($izin as $row) {
                                        $warga=$this->db->get_where('wargaasrama',["id_warga" => $row->id_warga])->row();
                                        if($row->id_musahil!=""){
                                            $musahil=$this->db->get_where('musahil',["id_musahil" => $row->id_musahil])->row();
                                            $no+=1;
                                            echo "<tr>";
                                                echo "<td> $no</td>";
                                                echo "<td> $warga->nama_warga</td>";
                                                echo "<td> $warga->nim_warga</td>";
                                                echo "<td> $warga->prodi_warga</td>";
                                                echo "<td> $row->tglmulai</td>";
                                                echo "<td> $row->tglkembali</td>";
                                                echo "<td> $row->ket_izin</td>";
                                                echo "<td> $musahil->nama_musahil</td>";
                                                if($row->id_pengurus==""){ ?>
                                                <td> <a href="<?php echo site_url('pengurus/proses_perizinan/'); echo($row->id_izin); ?>" class="btn btn-success">Izinkan</a>
                                                <a href="<?php echo site_url('pengurus/proses_perizinan/'); echo($row->id_izin.'/');echo(0) ?>" class="btn btn-danger">Tolak</a>
                                                <?php }
                                                else{ ?>
                                                <td><a href="<?php echo site_url('pengurus/proses_perizinan/'); echo($row->id_izin.'/');echo(0) ?>" class="btn btn-danger">hapus</a>
                                            <?php } ?>
                                            </td>
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
