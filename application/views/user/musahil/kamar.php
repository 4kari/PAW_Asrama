<?php
	$this->load->view('Temp/musahil/header');
    $this->load->view('Temp/musahil/modal');
    $warga=$this->db->get('wargaasrama')->result();
?>
<div class="page-container">
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
				<div class="row">
                    <div class="col-lg-11">
                        <h2 class="title-1 m-b-25">Data Warga Baru</h2>
                        <div class="table-responsive table--no-card m-b-40">
                            <table class="table table-borderless table-striped table-earning">
                                <thead>
                                    <?php
                                        echo "<tr>";
                                            echo "<th> Nama </th>";
                                            echo "<th> NIM </th>";
                                            echo "<th> Kamar </th>";
                                            echo "<th> Gedung </th>";
                                            echo "<th> Action </th>";
                                        echo "</tr>";
                                    ?>
                                    
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($warga as $row) {
                                        if($row->kamar=="" && $row->gedung==""){
                                            $id=$row->id_warga;
                                            echo "<tr>";
                                                echo "<td> $row->nama_warga</td>";
                                                echo "<td> $row->nim_warga</td>";
                                                echo "<td> $row->kamar</td>";
                                                echo "<td> $row->gedung</td>";?>
                                                <td>
                                                    <button type="button" class="btn btn-success tkbtn">Tambahkan</button>
                                                    <!-- <a data-toggle="modal" data-target="#Tkamar" href="" class="btn btn-success">Lihat</a> -->
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
                <div class="row">
                    <div class="col-lg-11">
                        <h2 class="title-1 m-b-25">Data Warga Lama</h2>
                        <div class="table-responsive table--no-card m-b-40">
                            <table class="table table-borderless table-striped table-earning">
                                <thead>
                                    <?php
                                        echo "<tr>";
                                            echo "<th> Nama </th>";
                                            echo "<th> NIM </th>";
                                            echo "<th> Kamar </th>";
                                            echo "<th> Gedung </th>";
                                            echo "<th> Action </th>";
                                        echo "</tr>";
                                    ?>
                                    
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($warga as $row) {
                                        if($row->kamar!="" || $row->gedung!=""){
                                            $id=$row->id_warga;
                                            echo "<tr>";
                                                echo "<td> $row->nama_warga</td>";
                                                echo "<td> $row->nim_warga</td>";
                                                echo "<td> $row->kamar</td>";
                                                echo "<td> $row->gedung</td>";?>
                                                <td>
                                                    <button type="button" class="btn btn-success ukbtn" onclick>Ubah</button>
                                                    <!-- <a data-toggle="modal" data-target="#Tkamar" href="" class="btn btn-success">Lihat</a> -->
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
<script type="text/javascript">
    $(document).ready(function(){
        $(".tkbtn").on('click',function(){
            $("#Tkamar").modal('show');

            $tr = $(this).closest('tr');
            var data=$tr.children("td").map(function(){
                return $(this).text();
            }).get();
            $("#kamar").val(data[2]);
            $("#gedung").val(data[3]);
        })
    })
    $(document).ready(function(){
        $(".ukbtn").on('click',function(){
            $("#Tkamar").modal('show');

            $tr = $(this).closest('tr');
            var data=$tr.children("td").map(function(){
                return $(this).text();
            }).get();
            $("#kamar").val(data[2]);
            $("#gedung").val(data[3]);
        })
    })
</script>
</html>