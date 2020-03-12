<?php // file untuk koneksi ke database  
$koneksi = mysqli_connect("localhost", "root", "") or die(mysqli_error($koneksi));   // buka koneksi   
mysqli_select_db($koneksi, "db_rumahsakit") or die(mysqli_error($koneksi));   // pilih database ?> 