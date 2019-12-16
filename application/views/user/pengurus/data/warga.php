<?php
	$this->load->view('Temp/pengurus/header');
    $warga=$this->db->get('wargaasrama')->result();
?>
<div class="page-container p-l-0">
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
				<div class="row">
                    <div class="col-lg-12">
                        <h2 class="title-1 m-b-25">Data Warga</h2>
                        <div class="table-responsive table--no-card m-b-40">
                            <table class="table table-borderless table-striped">
                                <thead class="bg-dark text-light">
                                    <tr>
                                        <th> Nama </th>
                                        <th> NIM </th>
                                        <th> Prodi </th>
                                        <th> Jenis Kelamin </th>
                                        <th> Action </th>
                                    </tr>                                    
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($warga as $row) {
                                        $jk=$this->db->get_where('jk',["id_jk" => $row->id_jk])->row();
                                        $id=$row->id_warga;
                                        echo "<tr>";
                                            echo "<td> $row->nama_warga</td>";
                                            echo "<td> $row->nim_warga</td>";
                                            echo "<td> $row->prodi_warga</td>";
                                            echo "<td> $jk->jk</td>";?>
                                            <td> <a href="<?php echo site_url('pengurus/proses_warga/'); echo($id); ?>" class="btn btn-success">Lihat</a></td>
                                        <?php
                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
<?php   
$this->load->view('Temp/pengurus/footer');
?>