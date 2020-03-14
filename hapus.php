<?php
    include 'inc/koneksi.php';
   $jenis = $_GET['jenis'];

   if ($jenis = 'hapus_dokter') {

        $id_dokter = $_GET['id_dokter'];
        $query = "delete from dokter where id_dokter=$id_dokter";
        $hapus = mysqli_query ($koneksi, $query) or die (mysqli_error($koneksi));


        if ($hapus) {
            echo "<script>
                    alert ('data berhasil dihapus!');
                    document.location.href = 'data_dokter.php';
                    </script>";
        }else {
            echo "<script>
                     alert ('data gagal dihapus!');
                    
                 </script>";

        }
   }

?>