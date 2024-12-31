<?php

session_start();
include ('koneksi.php');
$username = $_SESSION['username'];

$cekNIS =mysqli_query ($koneksi,("SELECT nis FROM users WHERE username ='$username'"));
while ($dataNIS = mysqli_fetch_array($cekNIS)){
    $NIS = $dataNIS['nis'];
}

include 'koneksi.php';

$kelas = $_POST['kelas'];
$wali = $_POST['wali'];

$update = mysqli_query($koneksi,("UPDATE users SET kelas='$kelas', wali='$wali' WHERE nis='$NIS'"));
if ($update){
    header('location:../contact.php');
}



?>
