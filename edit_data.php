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

            <?php
            $id = $_GET ['id'];
            $query = "SELECT * from data_pasien where id=$id";
            $hasil = mysqli_query($koneksi, $query);
            $data = mysqli_fetch_assoc($hasil);//ubah hasil ke array assosiatif

            

            ?>

            <!-- ISI KONTEN 1 -->
            <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title text-center">Edit Data </h2>
                                    <form action="simpan_data.php" method="post">

                                    <input type="hidden" name="jenis" value="tambah_pasien">

    <!---------------------------------------1.Hari Perawatan-------------------------------------------- -->

    <p class="ml-3 " ><b>1. Hari Perawatan</b></p>
         <div class="row" >
             <!-- nama & no.reg -->
            <div class="col mt-sm-1 ml-4">
                <label for="Nama">Nama</label>
                 <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap" name="nama"> 
                 <div class="checkbox ml-3">
                    <input type="radio" id="male" name="gender" value="L">
                    <label for="female">Laki-laki</label>  
                    <input type="radio" id="female" name="gender" value="P">
                    <label for="female">Perempuan</label>
                       
                 </div>
                 
            </div>
            <div class="col mt-sm-1 mr-4 ">
                <label for="Nama"><No class="registrasi"></No>No.Registrasi</label>
                <input type="text" class="form-control" id="nomor_reg" placeholder="Nomor" name="nomor_reg">
            </div>
        </div> 
          
        <div class="row">
            <!-- tanggal & Ruangan -->
            <div class="col-6 ml-2 ">
                <div class="col mt-4">
                    <label for="date" class=" mb-2 mr-sm-2">Tanggal Masuk-Keluar </label>
                    <input type="date" class="form-control mb-2 mr-sm-2" id="tanggal" placeholder="tgl masuk" name="tgl_masuk"> 
                    <input type="date" class="form-control" id="tanggal" placeholder="tgl keluar" name="tgl_keluar"> 
                </div>
                <div class="col">
                </div>
            </div>

            <div class="col mt-4 mr-4 ">
                <label for="room">Ruangan</label>
                    <select name="ruangan" id="" class="custom-select mb-3">
                        <option value="pilih ruang">Pilih Ruangan</option>
                        <?php
                        $query = "select * from paramedis";
                        $hasil2 = mysqli_query($koneksi, $query);
                         while ($data2 = mysqli_fetch_array($hasil2)){
                             ?>

                             <option value="<?php echo $data2['nomor'] ?>"><?=$data2['nama_ruang'] ?></option>
                         <?php } ?>
                       
                     <!-- mengkoneksikan row ruangan di INPUTDATA.php ke Database -->
                      
                     </select>

                     <select name="kelas" id="" class="custom-select mb-3">
                        <option value="VVIP">VVIP</option>
                        <option value="VIP">VIP</option>
                        <option value="I">I</option>
                        <option value="II">II</option>
                        <option value="III">III</option>                        
                     </select>
            </div>
        </div>


<!---------------------------------2.Visite Dokter/ Konsultasi-------------------------------------------- -->
 
<p class="ml-3 mt-5 "><b>2. Visite Dokter/ Konsultasi</b></p>
        <div class="row" > 
            <div class="col mt-sm-1 ml-4">
                <select  id="" class="custom-select mb-3" name="dokter_1">
                        <option value="">Pilih Dokter</option>
                        <?php 
                             $query = "select * from dokter";
                             $hasil3 = mysqli_query($koneksi, $query);
                            while ($data3 = mysqli_fetch_array($hasil3)){
                                ?>

                            <option value="<?php echo $data3['id_dokter'] ?>"><?=$data3['nama'] ?></option>
                         <?php } ?>

                </select>  
            </div>

            <div class="col mt-sm-1 ml-4">
                <select  id="" class="custom-select mb-3" name="dokter_2">
                        <option value="">Pilih Dokter</option>
                        <?php 
                             $query = "select * from dokter";
                             $hasil3 = mysqli_query($koneksi, $query);
                            while ($data3 = mysqli_fetch_array($hasil3)){
                                ?>

                            <option value="<?php echo $data3['id_dokter'] ?>"><?=$data3['nama'] ?></option>
                         <?php } ?>

                </select>  
            </div>

<!-- cara efisien col.3-4 -->
<?php 
    $query = "select * from dokter";
    $hasil3 = mysqli_query($koneksi, $query);
    $dokter ="";

    while ($data3 = mysqli_fetch_array($hasil3)){
        $dokter= $dokter.'<option value="'.$data3["id_dokter"].'">'.$data3["nama"].'</option>';
    }

 ?>

             <div class="col mt-sm-1 ml-4">
                <select  id="" class="custom-select mb-3" name="dokter_3">
                <option value="">Pilih Dokter</option>     
                <?=$dokter ?>
                </select>  
            </div>


            <?php 
    $query = "select * from dokter";
    $hasil3 = mysqli_query($koneksi, $query);
    $dokter ="";

    while ($data3 = mysqli_fetch_array($hasil3)){
            $dokter= $dokter.'<option value="'.$data3["id_dokter"].'">'.$data3["nama"].'</option>';
    }

 ?>
            <div class="col mt-sm-1 ml-4">
                <select  id="" class="custom-select mb-3" name="dokter_4">
                        <option value="">Pilih Dokter</option>
                        <?=$dokter?>
                       
                </select>  
            </div>
        </div> 
        
        
<!--------------------------------------3.Tindakan/Operasi----------------------------------------------->
            <p class="ml-3 mt-5 "><b>3. Tindakan/Operasi</b></p>
            <!-- Dokter operator -->
            <div class="row" >
                <div class="col">
                    <label for="dokteroperator" class="ml-3 mt-1">Dokter Operator</label>              
                    <select  id="" class="custom-select mb-3" name="dokteroperator_1">
                        <option value="">Pilih Dokter</option>
                        <?=$dokter?>
                       
                </select>  
                </div>  
                <div class="col mr-3">
                    <label for="dokteroperator" class="ml-2 mt-1">Dokter Operator </label>              
                    <select  id="" class="custom-select mb-3" name="dokteroperator_2">
                        <option value="">Pilih Dokter</option>
                        <?=$dokter?>
                       
                </select>  
                </div>  
            </div>
            <!-- dokter anastesi & anak -->
            <div class="row" >
                <div class="col">
                    <label for="dokteroperator" class="ml-3 mt-1">Dokter Anastesi</label>              
                    <select  id="" class="custom-select mb-3" name="dokteranastesi">
                        <option value="">Pilih Dokter</option>
                        <?=$dokter?>
                       
                </select>  
                </div>  
                <div class="col mr-3">
                    <label for="dokteroperator" class="ml-2 mt-1">Dokter Anak</label>              
                    <select  id="" class="custom-select mb-3" name="dokteranak">
                        <option value="">Pilih Dokter</option>
                        <?=$dokter?>
                       
                </select>  
                </div>  
            </div>
            <!-- Asisten operator -->
            <div class="row" >
                <div class="col">
                    <label for="dokteroperator" class="ml-3 mt-1">Asisten Operator </label>              
                    <select  id="" class="custom-select mb-3" name="asistenoperator">
                        <option value="">Pilih Dokter</option>
                        <?=$dokter?>
                       
                </select>  
                </div>  

                <div class="col mr-3" >
                <label for="dokteroperator" class="ml-3 mt-1">Perawat </label>              
                <select  id="" class="custom-select mb-3" name="perawat">
                        <option value="">Pilih </option>
                        <?php
                        $query = "select * from paramedis";
                        $hasil2 = mysqli_query($koneksi, $query);
                         while ($data2 = mysqli_fetch_array($hasil2)){
                             ?>

                             <option value="<?php echo $data2['nomor'] ?>"><?=$data2['nama_ruang'] ?></option>
                         <?php } ?>
                </select>   
                </div>  
            </div>

            <!-- tombol -->
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