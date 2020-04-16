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
                                <h2 class="card-title text-center">Input Ruangan</h2>
                                
                                <div class="table-responsive">
                                    <!-- <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Harga</th>                                             
                                                <th>Aksi</th>                                             
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                                $query = "select * from ruangan";
                                                $hasil = mysqli_query($koneksi, $query);
                                                $no =1;

                                                while ($data = mysqli_fetch_array($hasil)) {
                                                    echo '
                                                    
                                                    <tr>
                                                    <td>'.$no.'</td>
                                                   
                                                    <td>'.$data ['nama_ruangan'].'</td>
                                                    <td>'.$data ['harga'].'</td>
                                                <td>
                                                    <a href="#"><i class="fas fa-edit"></i></a>
                                                    <a href="#" class="tbl_eraser"><i class="fas fa-eraser"></i></a>
                                                </td>
                                                    </tr>
 
                                                    ';
                                                    $no++;
                                                }
                                            
                                            
                                            ?>
                                            


                                    <div class="container-form">
    <form action="/rawatinap.php">
    <!---------------------------------------1.Hari Perawatan-------------------------------------------- -->

    <p class="ml-3 " ><b>1. Hari Perawatan</b></p>
         <div class="row" >
             <!-- nama & no.reg -->
            <div class="col mt-sm-1 ml-4">
                <label for="Nama">Nama</label>
                 <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap" name="nama"> 
                 <div class="checkbox ml-3">
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="female">Laki-laki</label>  
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female">Perempuan</label>
                       
                 </div>
                 
            </div>
            <div class="col mt-sm-1 mr-4 ">
                <label for="Nama"><No class="registrasi"></No>No.Registrasi</label>
                <input type="text" class="form-control" id="nomor-reg" placeholder="Nomor" name="nomor-reg">
            </div>
        </div> 
          
        <div class="row">
            <!-- tanggal & Ruangan -->
            <div class="col-6 ml-2 ">
                <div class="col mt-4">
                    <label for="date" class=" mb-2 mr-sm-2">Tanggal </label>
                    <input type="date" class="form-control mb-2 mr-sm-2" id="tanggal" placeholder="tgl masuk" name="nomor-reg"> 
                    <input type="text" class="form-control" id="tanggal" placeholder="tgl keluar" name="nomor-reg"> 
                </div>
                <div class="col">
                </div>
            </div>

            <div class="col mt-4 mr-4 ">
                <label for="room">Ruangan</label>
                    <select name="ruangan" id="" class="custom-select mb-3">
                        <option value="pilih ruang">Anggrek</option>
                        <option value="pilih ruang">Mawar</option>
                        <option value="pilih ruang">Melati</option>
                        <option value="pilih ruang">cempaka</option>
                        <option value="pilih ruang">Tulip</option>
                        <option value="pilih ruang">Nusa Indah</option>
                        <option value="pilih ruang">Edelwis</option>
                        <option value="pilih ruang">Kenanga</option>
                        <option value="pilih ruang">Teratai</option>
                     </select>

                     <select name="ruangan" id="" class="custom-select mb-3">
                        <option value="pilih ruang">VVIP</option>
                        <option value="pilih ruang">VIP</option>
                        <option value="pilih ruang">I</option>
                        <option value="pilih ruang">II</option>
                        <option value="pilih ruang">III</option>                        
                     </select>
            </div>
        </div>


<!---------------------------------2.Visite Dokter/ Konsultasi-------------------------------------------- -->
 
            <p class="ml-3 mt-5 "><b>2. Visite Dokter/ Konsultasi</b></p>
        <div class="row" > 
            <div class="col mt-sm-1 ml-4">
                 <input type="text" class="form-control" id="nama" placeholder="Dr" name="nama">   
            </div>

            <div class="col mt-sm-1 mr-4 ">
                <input type="text" class="form-control" id="nomor-reg" placeholder="Dr" name="nomor-reg">
            </div>
            <div class="col mt-sm-1 ml-4">
                 <input type="text" class="form-control" id="nama" placeholder="Dr" name="nama">   
            </div>

            <div class="col mt-sm-1 mr-4 ">
                <input type="text" class="form-control" id="nomor-reg" placeholder="Dr" name="nomor-reg">
            </div>
        </div> 
        
        
<!--------------------------------------3.Tindakan/Operasi----------------------------------------------->
            <p class="ml-3 mt-5 "><b>3. Tindakan/Operasi</b></p>
            <!-- Dokter operator -->
            <div class="row" >
                <div class="col">
                    <label for="dokteroperator" class="ml-3 mt-1">Dokter Operator</label>              
                    <input type="text" class="form-control mb-2 mr-sm-2 ml-3" id="dokteroperator" placeholder="Dr" name="dokteroperator">
                </div>  
                <div class="col mr-3">
                    <label for="dokteroperator" class="ml-2 mt-1">Dokter Operator </label>              
                    <input type="text" class="form-control mb-2 mr-sm-2 " id="dokteroperator" placeholder="Dr" name="dokteroperator">
                </div>  
            </div>
            <!-- dokter anastesi & anak -->
            <div class="row" >
                <div class="col">
                    <label for="dokteroperator" class="ml-3 mt-1">Dokter Anastesi</label>              
                    <input type="text" class="form-control mb-2 mr-sm-2 ml-3" id="dokteranastesi" placeholder="Dr" name="dokteroperator">
                </div>  
                <div class="col mr-3">
                    <label for="dokteroperator" class="ml-2 mt-1">Dokter Anak</label>              
                    <input type="text" class="form-control mb-2 mr-sm-2 " id="dokteranak" placeholder="Dr" name="dokteroperator">
                </div>  
            </div>
            <!-- Asisten operator -->
            <div class="row" >
                <div class="col">
                    <label for="dokteroperator" class="ml-3 mt-1">Asisten Operator </label>              
                    <input type="text" class="form-control mb-2 mr-sm-2 ml-3" id="dokter" placeholder="Dr" name="dokter">
                </div>  
                <div class="col mr-3" >
                    <!-- <label for="dokteroperator" class="ml-2 mt-1">Dokter Anak</label>               -->
                    <input type="text" class="form-control mb-2 mr-sm-2 " id="Perawat" placeholder="Perawat" name="Perawat">
                </div>  
            </div>
            <div class="row ml-5">
                <div class="col-sm-1">
                  <button type="submit" class="btn btn-primary mt-3"> kirim</button>
                </div>
            </div>

            












        
    </form>
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