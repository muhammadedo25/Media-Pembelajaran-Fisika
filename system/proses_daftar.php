<?php

session_start();

include 'koneksi.php';

$name = $_POST['name'];
$username = $_POST['username'];
$NIS = $_POST['NIS'];
$password = $_POST['password'];

$cek = ("SELECT username FROM users WHERE username = '$username'");
$cek2 = ("SELECT nis FROM users WHERE nis = '$NIS'");
$cekuser =  (mysqli_query($koneksi, $cek));
$ceknis =  (mysqli_query($koneksi, $cek2));
if (mysqli_num_rows($cekuser)>0){ //proses mengingatkan data sudah ada
     echo "<script>alert('Username telah digunakan');history.go(-1) </script>";
     
 }else if (mysqli_num_rows($ceknis)>0){ //proses mengingatkan data sudah ada
     echo "<script>alert('Nomor Induk Siswa telah digunakan');history.go(-1) </script>";

 }else {$daftar = ("INSERT INTO users (nama, username, nis, password) VALUES ('$name', '$username', '$NIS', '$password')");
     if (mysqli_query($koneksi, $daftar)) {
          ?>
          <script>
          alert('Daftar Berhasil, Selamat Belajar');
          location='../index.php';
          </script>
     <?php
     }else {
          log("Error: " . $daftar . "<br>") . 
          mysqli_error($koneksi, $daftar);
     }

 }
?>















?>