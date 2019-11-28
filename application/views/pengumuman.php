<?php
    $_SESSION['page']='Pengumuman';
    $this->load->view('Temp/header');
    $this->load->view('Temp/mlog');
?>
<div class="page-container">
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-9">
                      <h2 class="text-center m-b-25">Pengumuman</h2>
                        <div class="table-responsive table--no-card m-b-40">
                            <table class="table table-borderless table-striped table-earning">
                                <thead>
                                  <tr>
                                    <th>Nama</th>
                                    <th>NIM</th>
                                    <th>Keterangan</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php $pendaftaran = $this->db->get('pendaftaran');
                                  foreach($pendaftaran->result() as $row){
                                    echo "<tr>";
                                      echo "<td> $row->namalengkap</td>";
                                      echo "<td> $row->nim</td>";
                                      echo "<td> $row->keterangan</td>";
                                    echo "</tr>";
                                  }?>
                                </tbody>
                            </table>
                        </div>
                        buat akun kamu <a href="<?php echo site_url('daftar/buatakun'); ?>" class="btn btn-success">disini</a><br>
                            *jika belum mengirimkan bukti pembayaran silahkan tekan tombol <a href="<?php echo site_url('daftar/pembayaran'); ?>" class="btn btn-success">pembayaran</a>
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