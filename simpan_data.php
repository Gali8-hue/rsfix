<?php ////////////////////////////////////////////DOKTER/////////////////////////////////////////////////////////////
    include 'inc/koneksi.php';

    $jenis = $_POST['jenis'];

    //perintah

    if ($jenis == 'input_dokter') {
     
         $nama = $_POST['nama'];
         $kode_dokter = $_POST['kode_dokter'];
         $kategori = $_POST['kategori'];
         $tarif_bangsal = $_POST['tarif_bangsal'];
         $tarif_operasi = $_POST['tarif_operasi'];

        $query = "INSERT INTO dokter (nama, kode_dokter, kategori, tarif_bangsal, tarif_operasi) VALUES ('$nama', '$kode_dokter', '$kategori', $tarif_bangsal, $tarif_operasi)";
        $hasil = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));

        //menambah pesan setelah perintah
        if ($hasil) {
            echo "<script>
                    alert ('data berhasil ditambahkan!');
                    document.location.href = 'data_dokter.php';
                    </script>";
        }else {
            echo "<script>
                     alert ('data gagal ditambahkan!');
                    
                 </script>";

        }




    }elseif ($jenis=='edit_dokter'){

        $nama = $_POST['nama'];
         $kode_dokter = $_POST['kode_dokter'];
         $kategori = $_POST['kategori'];
         $tarif_bangsal = $_POST['tarif_bangsal'];
         $tarif_operasi = $_POST['tarif_operasi'];
         $id_dokter = $_POST['id_dokter'];

         //update table dokter yg sdh di tambah id
         $query = "update dokter set nama='$nama', kode_dokter='$kode_dokter', kategori='$kategori' , tarif_bangsal=$tarif_bangsal , tarif_operasi=$tarif_operasi where id_dokter=$id_dokter";

         $update = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));

         if ($update) {
            echo "<script>
                    alert ('data berhasil diupdate!');
                    document.location.href = 'data_dokter.php';
                    </script>";
        }else {
            echo "<script>
                     alert ('data gagal ditambahkan!');
                    
                 </script>";

        }

    }
    //int= tanpa tanda petik 
    //var= menggunakan tanda petik 


    //
  


?>

<?php  ///////////////////////////////////////////////PARAMEDIS(Ruangan/Bangsal)/////////////////////////////////////////
    include 'inc/koneksi.php';

    $jenis = $_POST['jenis'];

    //perintah 

    if ($jenis == 'input_ruangan') {
 
         $nama = $_POST['nama_ruangan'];
     

        $query = "INSERT INTO paramedis (nama_ruang) VALUES ( '$nama')";
        $hasil = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));

         if ($hasil) {
            echo "<script>
                alert ('data berhasil diupdate!');
                document.location.href = 'data_ruangan.php';
                </script>";
         }else {
             echo "<script>
                 alert ('data gagal ditambahkan!');
                
                </script>";
         }     

    }elseif ($jenis == 'edit_ruangan'){

         $nomor = $_POST['nomor'];
         $nama_ruang = $_POST['nama_ruangan'];
       

         //update table dokter yg sdh di tambah id
         $query = "update paramedis set nama_ruang='$nama_ruang' where nomor=$nomor";

         $update = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));

         if ($update) {
            echo "<script>
                    alert ('data berhasil diupdate!');
                    document.location.href = 'data_ruangan.php';
                    </script>";
        }else {
            echo "<script>
                     alert ('data gagal ditambahkan!');
                    
                 </script>";

        }
     }
     elseif ($jenis == 'tambah_pasien'){

        $nama =$_POST['nama'];
        $gender =$_POST['gender'];
        $nomor_reg =$_POST['nomor_reg'];
        $tgl_masuk =$_POST['tgl_masuk'];
        $tgl_keluar =$_POST['tgl_keluar'];
        $ruangan =$_POST['ruangan'];
        $kelas =$_POST['kelas'];
        $dokter_1 =$_POST['dokter_1'];
        $dokter_2 =$_POST['dokter_2'];
        $dokter_3 =$_POST['dokter_3'];
        $dokter_4 =$_POST['dokter_4'];
        $dokteroperator_1 =$_POST['dokteroperator_1'];
        $dokteroperator_2 =$_POST['dokteroperator_2'];
        $dokteranastesi =$_POST['dokteranastesi'];
        $dokteranak =$_POST['dokteranak'];
        $asistenoperator =$_POST['asistenoperator'];
        $perawat =$_POST['perawat'];

        $data_ruangan = $ruangan.'-'.$kelas;
        $data_dokter = $dokter_1.'-'.$dokter_2.'-'.$dokter_3.'-'.$dokter_4.'-'.$dokteranak.'-'.$perawat;
        $data_operator= $dokteroperator_1.'-'.$dokteroperator_2.'-'.$asistenoperator;

        $query = "INSERT INTO data_pasien (nama, gender, noreg, tanggal_masuk, tanggal_keluar, ruangan, nama_dokter, operator)
         VALUES ( '$nama','$gender','$nomor_reg','$tgl_masuk','$tgl_keluar','$data_ruangan','$data_dokter','$data_operator')";
        $hasil = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));

        if ($hasil) {
            echo "<script>
                alert ('data berhasil ditambah!');
                document.location.href = 'data.php';
                </script>";
         }else {
             echo "<script>
                 alert ('data gagal ditambahkan!');
                
                </script>";
         }     
     }
    
?>