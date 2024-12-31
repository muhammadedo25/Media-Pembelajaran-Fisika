<?php
    session_start(); 
    include('../system/koneksi.php');
    $username = $_SESSION["username"];

    $cekNIS =mysqli_query ($koneksi,("SELECT nis FROM users WHERE username ='$username'"));
    while ($dataNIS = mysqli_fetch_array($cekNIS)){
        $NIS = $dataNIS['nis'];
    }
    //mengambil data dari form input
    $kegiatan   = $_POST['kegiatan'];
    $mulai      = $_POST['mulai'];
    $selesai    = $_POST['selesai'];

    //insert data ke dalam database
    mysqli_query($koneksi, "insert into jadwals set jadwal_id='', kegiatan='$kegiatan', mulai='$mulai', selesai='$selesai', nis='$NIS'");
    

    //kembali ke halaman index.php
    header("location:../kalender.php");

?>