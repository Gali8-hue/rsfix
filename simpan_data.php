<?php 
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




    }
    //int= tanpa tanda petik 
    //var= menggunakan tanda petik 


    //
  


?>