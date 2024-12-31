<?php 
// koneksi database
include 'koneksi.php';

 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"DELETE FROM jadwals WHERE jadwal_id ='$id'");
 
header("location:../kalender.php");
 
?>