<?php require_once('inc/header.php'); ?>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div><?php require_once('inc/header.php'); ?>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar Navbar - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php require_once('inc/navbar.php') ?>
        <!-- ============================================================== -->
        <!-- End Topbar Navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php require_once('inc/sidebar.php') ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->

            <!-- ISI KONTEN 1 -->
            <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title text-center">Data</h2>
                                <div class="table-responsive">

                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                
                                                <th>No</th>
                                                <th>Nama*</th>
                                                <th>Gender</th>
                                                <th>No Reg*</th>                                             
                                                <th>Lama Opname*</th>                                             
                                                <th>Tgl Keluar*</th>                                             
                                                <th>Ruang*</th>
                                                <th>Nama Dokter</th>                                         
                                                <th>Aksi</th>                                             
                                                                                      
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                                $query = "select * from data_pasien";
                                                $hasil = mysqli_query($koneksi, $query);
                                                $no =1;

                                                while ($data = mysqli_fetch_array($hasil)) {
                                                    
                                                    //visit nama dokter pertama
                                                    $tampung_dokter = $data['nama_dokter'];
                                                    $array_dokter = explode('-',$tampung_dokter);
                                                    $id_dokter = $array_dokter[0];
                                                    
                                                    $query2 = "SELECT * FROM dokter WHERE id_dokter=$id_dokter";
                                                    $hasil2 = mysqli_query($koneksi, $query2);
                                                    $hasil_dokter = mysqli_fetch_assoc($hasil2);
                                                    
                                                    $nama_dokter =$hasil_dokter['nama']; //menampung nama dokter

                                                    
                                                    //selisih hari
                                                    $keluar = new DateTime($data['tanggal_keluar']);
                                                    $masuk = new DateTime($data['tanggal_masuk']);
                                                    $lama = $keluar->diff($masuk)->days;


                                                    // mengubah tampilan tanggal
                                                    $tgl_k=$data['tanggal_keluar'];
                                                    $tglK=explode('-',$tgl_k);
                                                    $tgl_keluar=$tglK[2].'-'.$tglK[1].'-'.$tglK[0];
                                                    
                                                    echo '
                                                    
                                                    <tr>
                                                    <td>'.$no.'</td>
                                                   
                                                    <td>'.$data ['nama'].'</td>
                                                    <td>'.$data ['gender'].'</td>
                                                    <td>'.$data ['noreg'].'</td>
                                                    <td>'.$lama.'</td>P
                                                    <td>'.$tgl_keluar.'</td>
                                                    <td>'.$data ['ruangan'].'</td>
                                                    <td>'.$nama_dokter.'</td>
                                                    
                                                <td>
                                                <a href="rincian.php?id='.$data["id"].'"><i class="fas fa-ellipsis-h" data-toggle="tooltip" title="rincian"></i></a>
                                                    <a href="edit_data.php?id='.$data["id"].'"><i class="fas fa-edit" data-toggle="tooltip" title="edit"></i></a>
                                                    <a href="hapus.php"?id='.$data["id"].'&jenis=hapus_data""><i class="fas fa-eraser"data-toggle="tooltip" title="hapus"></i></a>
                                                </td>
                                                
                                                    </tr>
 
                                                    ';
                                                    $no++;
                                                }
                                            
                                            
                                            ?>
                                            


                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            
        
                <!-- END ISI KONTEN 1 -->
        </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <!-- ISI KONTEN 2 -->
            <div class="container-fluid">
            
            
             
            </div>
            <!-- END ISI KONTEN 2 -->
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
        <?php require_once('inc/footer.php'); ?>
