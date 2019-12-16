<?php
	$this->load->view('Temp/pengurus/header');
    $this->load->view('Temp/pengurus/modal');
    $musahil=$this->db->get('musahil')->result();
?>
<div class="page-container p-l-0">
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
				<div class="row">
                    <div class="col-lg-12">
                        <h2 class="title-1 m-b-25">Data pendaftaran</h2>
                        <div class="table-responsive table--no-card m-b-40">
                            <table class="table table-borderless table-striped">
                                <thead class="bg-dark text-light">
                                    <tr class="text-center">
                                        <th> Id </th>
                                        <th> Nama </th>
                                        <th> Username </th>
                                        <th> Gedung </th>
                                        <th> Kamar </th>
                                        <th> No WA </th>
                                        <th> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($musahil as $row) {
                                        $id=$row->id_musahil;
                                        echo "<tr>";
                                            echo "<td> $row->id_musahil</td>";
                                            echo "<td> $row->nama_musahil</td>";
                                            echo "<td> $row->user_musahil</td>";
                                            echo "<td> $row->gedung_musahil</td>";
                                            echo "<td> $row->kamar_musahil</td>";
                                            echo "<td> $row->nowa_musahil</td>";?>
                                            <td class="text-center"><button type="button" class="btn btn-info UMbtn" onclick>Ubah</button>
                                                <button type="button" class="btn btn-danger DMbtn" onclick>Delete</button></td>
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
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#Imusahil">Tambah Data</button>
<script type="text/javascript">
    $(document).ready(function(){
        $(".UMbtn").on('click',function(){
            $("#Umusahil").modal('show');

            $tr = $(this).closest('tr');
            var data=$tr.children("td").map(function(){
                return $(this).text();
            }).get();

            $("#id").val(data[0]);
            $("#Nama").val(data[1]);
            $("#Username").val(data[2]);
            $("#Gedung").val(data[3]);
            $("#Kamar").val(data[4]);
            $("#WA").val(data[5]);
        })
    })
    $(document).ready(function(){
        $(".DMbtn").on('click',function(){
            $("#Dmusahil").modal('show');

            $tr = $(this).closest('tr');
            var data=$tr.children("td").map(function(){
                return $(this).text();
            }).get();

            $("#id2").val(data[0]);
        })
    })
</script>
          <?php   
$this->load->view('Temp/pengurus/footer');
?>
