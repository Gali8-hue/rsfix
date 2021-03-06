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
                                <h2 class="card-title text-center">Tambah Data Paramedis</h2>
                                    <form action="simpan_data.php" method="post">

                                        <div class="form-group">
                                            <label for="">Nama Paramedis</label>
                                            <input type="text" class="form-control" name="nama" id="nama">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="">Jenis Kelamin</label>
                                            <select name="jk" id="jk" class="form-control">
                                                <option value="L">Laki-Laki</option>
                                                <option value="P">Perempuan</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="">Telepon</label>
                                            <input type="text" class="form-control" name="telepon" id="telepon">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Biaya Jasa</label>
                                            <input type="text" class="form-control" name="jasa" id="jasa">
                                        </div>

                                        <!-- Identitas form -->
                                        <input type="hidden" value="input_dokter" name="jenis">

                                        <button type="submit" class="btn waves-effect waves-light btn-rounded btn-primary">Simpan</button>
                                    
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- END ISI KONTEN 1 -->
       
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