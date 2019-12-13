<?php
  $warga=$this->db->get_where('wargaasrama',["user_warga" =>$_SESSION['user']])->row();
  $jk=$this->db->get_where('jk',["id_jk" => $warga->id_jk])->row();
  $this->load->view('temp/warga/header');
?>
<!--- Form Izin --->
<div class="container-fluid bg p-4">
    <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-12"></div>
      <div class="col-md-4 col-sm-4 col-xs-12 p-3 bg-light">
      <div class="">
      <img  src="<?php echo base_url();?>img/profil.jpg">
      </div>
      <table>
                            <?php
                            echo "<tr><td>NAMA </td><td>&nbsp;: ".$warga->nama_warga."</td></tr>";
                            echo "<tr><td>NIM </td><td>&nbsp;: ".$warga->nim_warga."</td></tr>";
                            echo "<tr><td>PRODI </td><td>&nbsp;: ".$warga->prodi_warga."</td></tr>";
                            echo "<tr><td>ALAMAT </td><td>&nbsp;: ".$warga->alamat."</td></tr>";
                            echo "<tr><td>JENIS KELAMIN </td><td>&nbsp;: ".$jk->jk."</td></tr>";
                            echo "<tr><td>TANGGAL LAHIR </td><td>&nbsp;: ".$warga->tgllahir."</td></tr>";
                            echo "<tr><td>NOMOR/WA </td><td>&nbsp;: ".$warga->nowa_warga."</td></tr>";
                            ?>
                            </table>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12"></div>
    </div>
  </div>
</body>
</html>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12"></div>
    </div>
  </div>
</body>
</html>
