<?php
session_start();
include "koneksi.php"; //menghubungkan ke database

if( isset($_POST["tombol"]) ){ // jika terdapat nama tombol
    $user = $_POST["username"];
    $pass = $_POST["password"];

    //penyeleksian apakah inputan user berada di database
    $login = mysqli_query($koneksi,"SELECT * FROM users where BINARY username='$user' and password='$pass'");
    $cek = mysqli_num_rows($login);
    if ($cek > 0){
    //jika ada maka hasilnya nanti pasti satu
    if( mysqli_num_rows($login) == 1){
        $row = mysqli_fetch_assoc($login); // berfungsi untuk mengambil data dalam satu baris
        echo $row;
        if( $row["password"] == $pass){
            $_SESSION["username"] = $user;
            header("location:../index.php");
            exit;
        }
    }else{
                echo "Data tidak bisa di update";
            };
        }
    ?>
    <div style="color: red; margin: 5px;"><i><?= "username atau password salah";?></i></div>
<?php 
}
?>