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
 
     
     $nama = $_POST['nama_ruang'];
     

    $query = "INSERT INTO paramedis (nama) VALUES ('$nama_ruang')";
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

}






?>