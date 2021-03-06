<?php require_once('inc/header.php'); ?>
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
                            <div class="row justify justify-content-end">
                                    <div class="col-sm-3">
                                      <h2>Data Ruangan</h2>
                                    </div> 

                                    <div class="col-sm-5 mt-2 ">
                                        <a href="" class="tbl_print"><i class="fas fa-print" data-toggle="tooltip" title="print"></i></a>
                                        <a href="" class="tbl_print"><i class="fas fa-download" data-toggle="tooltip" title="download"></i></a>
                                       
                                    </div>  
                                </div>
                                


                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                        <tr>
                                             
                                                
                                                <th>No.Ruang</th>
                                               
                                                <th>nama ruang</th>

                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $query = "select * from paramedis";
                                                $hasil = mysqli_query($koneksi,$query);
                                                $no =1; 
                                                
                                                while($data = mysqli_fetch_array($hasil)) {
                                                    echo '
                                                    <tr>
                                                       
                                                       
                                                        <td>'.$data ['nomor'].'</td>
                                                        <td>'.$data ['nama_ruang'].'</td>
                                                        
                                                 
                                                
                                                <td>
                                                 
                                                    <a href="edit_ruangan.php?id_ruangan='.$data['nomor'].'"><i class="fas fa-edit" data-toggle="tooltip" title="Edit"></i></a>
                                                    
                                                    <a href="hapus.php?id_ruangan='. $data['nomor'].'&jenis=hapus_ruangan"><i class="fas fa-eraser" data-toggle="tooltip" title="Hapus"></i></a>
                                                </td>
                                                    </tr>
                                                    ';//line 79 mengedit tombol "edit"
                                                    $no++;// nomer ditambah satu otomatis

                                                }
                                            ?>
                                          
                                        <tbody>
                                            
                                        </tbody>
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