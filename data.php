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
                                                
                                                <th>Nama*</th>
                                                <th>No Reg*</th>                                             
                                                <th>Lama Opname*</th>                                             
                                                <th>Hari*</th>                                             
                                                <th>Ruang*</th>
                                                <th>Nama Dokter</th>                                             
                                                <th>Jumlah Dokter</th>                                             
                                                <th>Nama PM</th>                                             
                                                <th>Jumlah PMr</th>                                             
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                                $query = "select * from data";
                                                $hasil = mysqli_query($koneksi, $query);
                                                $no =1;

                                                while ($data = mysqli_fetch_array($hasil)) {
                                                    echo '
                                                    
                                                    <tr>
                                                    <td>'.$no.'</td>
                                                   
                                                    <td>'.$data ['nama'].'</td>
                                                    <td>'.$data ['noreg'].'</td>
                                                    <td>'.$data ['lamaopname'].'</td>
                                                    <td>'.$data ['hari'].'</td>
                                                    <td>'.$data ['ruang'].'</td>
                                                    <td>'.$data ['nama_dokter'].'</td>
                                                    <td>'.$data ['jumlah_dokter'].'</td>
                                                    <td>'.$data ['nama_pm'].'</td>
                                                    <td>'.$data ['jumlah_pm'].'</td>
                                                <td>
                                                    <a href="#"><i class="fas fa-edit"></i></a>
                                                    <a href="#" class="tbl_eraser"><i class="fas fa-eraser"></i></a>
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