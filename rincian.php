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

    $id = $_GET['id'];

    $query = "select * from data_pasien where id=$id";
    $hasil = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_assoc($hasil);




?>






            <!-- ISI KONTEN 1 -->
            <div class="page-breadcrumb">
               
            <div class="card">
            <div class="card-header">
                Rincian Pasien
            </div>
            <div class="card-body">
                <h5 class="card-title"><?=$data['nama']?></h5>
                <p class="card-text"></p>
                    <table>
                        <tr>
                            <td width="200px">no. registrasi</td>                           
                            <td width="10px">:</td>
                            <td width="200px"><?=$data['noreg']?></td>
                        </tr>

                        <tr>
                            <td width="200px">Jenis Kelamin</td>                           
                            <td width="10px">:</td>
                            <td width="200px"><?=$data['gender']?></td>
                        </tr>
                            <!-- ubah format tanggal -->
                            <?php

                                $tampung = $data ['tanggal_masuk'];
                                $array = explode('-',$tampung);
                                $tgl_masuk = $array[2].'-'.$array[1].'-'.$array[0];

                            ?>

                    
                        <tr>
                            <td width="200px">tanggal masuk</td>
                            <td width="10px">:</td>
                            <td width="200px"><?=$tgl_masuk?></td>
                        </tr>

                         <!-- ubah format tanggal -->
                         <?php

                            $tampung = $data ['tanggal_keluar'];
                            $array = explode('-',$tampung);
                            $tgl_keluar = $array[2].'-'.$array[1].'-'.$array[0];

                            ?>


                            <tr>
                            <td width="200px">tanggal keluar</td>
                            <td width="10px">:</td>
                            <td width="200px"><?=$tgl_keluar?></td>
                            </tr>
                           
                            <?php

                            $tampung = $data ['ruangan'];
                            $array = explode('-',$tampung);
                           
                            $query2 = "select * from paramedis where nomor=$array[0]";
                            $hasil2 = mysqli_query($koneksi, $query2);
                            $data2 = mysqli_fetch_assoc($hasil2);

                            $ruangan = $data2['nama_ruang'];
                            $kelas = $array[1];
                             

                            ?>
                            <tr>
                            <td width="200px">ruangan</td>
                            <td width="10px">:</td>
                            <td width="200px"><?=$ruangan?></td>
                            </tr>

                            <tr>
                            <td width="200px">Kelas</td>
                            <td width="10px">:</td>
                            <td width="200px"><?=$kelas?></td>
                            </tr>

                            <tr>
                            <td width="200px">Dokter Visit</td>
                            <td width="10px">:</td>
                            <td width="200px"><?=$id_dokter?></td>
                            </tr>

                           
                            <?php
                                $tampung = $data['nama_dokter'];
                                $array = explode('-',$tampung);
                                $dokter_visit = "";

                                for ($i=0; $i<5 ;$i++) {
                                    
                                    $id_dokter = $array[$i];

                                    if ($id_dokter!=''){

                                        $query3 = "select * from dokter where id_dokter = $id_dokter";
                                        $hasil3 = mysqli_query($koneksi, $query3);
                                        $data3 = mysqli_fetch_assoc($hasil3);
                                        $dokter_visit = $dokter_visit.' '.$data3['nama']. ',';
                                
                                    }elseif ($i==4){
                                        $dokter_anak=$data3{'nama'};
                                    }
                                }
                            ?>

                            




                    </table>












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