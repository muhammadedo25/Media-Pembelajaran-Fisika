<?php
include('../system/session_login.php');
include ("../system/koneksi.php");
$SessionUser=$_SESSION['username'];
$datausers = mysqli_query($koneksi,("SELECT * FROM users WHERE username='$SessionUser'"));
while ($data = mysqli_fetch_array($datausers)){
  $nama = $data['nama'];
  $username = $data['username'];
  $NIS = $data['nis'];
  $kelas = $data['kelas'];
  $walimurid=$data['wali'];
}
?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>SaintOurHome</title>



  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
  <!-- progress barstle -->
  <link rel="stylesheet" href="../css/css-circular-prog-bar.css">
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,600&display=swap" rel="stylesheet">
  <!-- font wesome stylesheet -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <!-- Custom styles for this template -->
  <link href="../css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../css/responsive.css" rel="stylesheet" />




  <link rel="stylesheet" href="css/css-circular-prog-bar.css">


</head>

<body class="sub_page">
  <div class="top_container ">
    <!-- header section strats -->
    
<!-- <?php
session_start();
?> -->
  <link rel="stylesheet"  href="../css/main.css">
<header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <span>
              SaintOurHome
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="../index.php"> Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="../about.php"> About </a>
                </li>

                <li class="nav-item ">
                  <a class="nav-link" href="../admission.php"> Jadwal </a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="../kalender.php"> Kalender </a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="../materi.php"> Materi </a>
                </li>
                <?php
                if(isset($_SESSION['username'])){
                  ?>
                  <div class="dropdown">
                    <li class="nav-item">
                      <a class="nav-link text-dark" href="../contact.php"><?php echo($_SESSION['username']); ?></a>
                    
                    <div class="dropdown-content">
                      <a href="../contact.php">Profil</a>
                      <a href="../page/logout.php">Log Out</a>
                    </div>
                    </li>
                  </div>
                <?php 
                }else{
                  ?>
                   <li class="nav-item">
                  <a href="../page/login.php" class="call_to-btn btn-outline-dark p-2 mr-3">Login</a>
                </li>
                <li  class="nav-item">
                  <a href="../page/signup.php" class="call_to-btn btn-outline-dark p-2">Sign-Up</a>
                </li>
                <?php  
                }
                  ?>
              </ul>
            </div>
        </nav>
      </div>
    </header>
  </div>
  <!-- end header section -->


  <!-- contact section -->

  <section class="contact_section ">

    <div class="container">

      <div class="row">
        <div class="col-md-6">
          <div class="d-flex justify-content-center d-md-block">
            <h2>
              Contact Us
            </h2>
          </div>
          <form action="../system/proses_edit.php" method="POST">
            <div class="contact_form-container">
              <div>
                <div>
                  <p class="mb-0">Nama :</p>
                  <input type="text" placeholder="Name" value="<?php echo ($nama); ?>" readonly>
                </div>
                <div>
                  <p class="mb-0">username :</p>
                  <input type="text" placeholder="username" value="<?php echo ($username); ?>" readonly>
                </div>
                <div>
                  <p class="mb-0">Nomor Induk Siswa :</p>
                  <input type="text" placeholder="Nomor Induk Siswa" value="<?php echo ($NIS); ?>" readonly>
                </div>
                <div>
                  <p class="mb-0">Kelas :</p>
                  <input type="text" placeholder="Kelas" name="kelas" value="<?php echo ($kelas); ?>">
                </div>
                <div>
                  <p class="mb-0">Wali Murid :</p>
                  <input type="text" placeholder="Wali Murid" name="wali" value="<?php echo ($walimurid); ?>">
                </div>
                <div class="mt-5">
                  <button type="submit">Simpan</button>
                  </div>
              </div>
            </div>

          </form>
        </div>
        <div class="col-md-6">
          <div class="contact_img-box">
            <img src="../images/students.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- contact section end -->

   <!-- footer saction -->
   <section class="info_section layout_padding-top">
        <div class="info_logo-box">
          <h2>
              SaintOurHome
          </h2>
        </div>
          <div class="container layout_padding2">
            <div class="row">
              <div class="col-md-3">
                <h5>
                    About Me                                                                             
                </h5>
                <p class="text-justify">
                   Mahasiswa Fakultas Teknik <br> Program Studi Teknik Informatika <br> Universitas Trunojoyo Madura 
                </p>
              </div>
              <div class="col-md-3">
                <h5>
                    Useful Link 
                </h5>
                <ul>
                  <li>
                    <a href="https://wordwall.net/" target="blank">
                        Study Games
                    </a>
                  </li>
                  <li>
                   <a href="https://quizizz.com/admin/quiz/5d8e12ba6c8300001a9a78b3/latihan-soal-ipa-sd" target="blank">
                      Quiz Games
                   </a>
                  </li>
                  <li>
                    <a href="https://www.mathway.com/id/BasicMath" target="blank">
                        Math Answer
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-md-3">
                <h5>
                    Contact Me
                </h5>
                <p>
                You can contact me from social media below &#128516; <br> And don't forget to follow my social media &#128517;
                </p>
              </div>
              <div class="col-md-3">
           
                <div class="subscribe_container">
                  <h5>
                  Motivation
                  </h5>
                  <p class="text-justify">
                  "Jangan biarkan ucapan orang lain menjatuhkan mimpimu. Bungkam mulut mereka dengan prestasimu"
                  </p>
                </div>
                
              </div>
            </div>
          </div>
          <div class="container">
              <div class="social_container">
                 
                  <div class="social-box">
                    <a href="https://web.facebook.com/muhammad.edo.777" target="blank">
                      <img src="../images/fb.png" alt="fb">
                    </a>
      
                    <a href="https://twitter.com/Edoardnsyah" target="blank">
                      <img src="../images/twitter.png" alt="twtr">
                    </a>
                    <a href="https://www.linkedin.com/in/muhammad-edo-878a6b1b5/" target="blank">
                      <img src="../images/linkedin.png" alt="in">
                    </a>
                    <a href="https://www.instagram.com/edoardnsyah/" target="blank">
                      <img src="../images/instagram.png" alt="ig">
                    </a>
                  </div>
                </div>
          </div>
        </section>

  <section class="container-fluid footer_section">
    <p>
      Copyright &copy; 2022 All Rights Reserved By Edoardnsyah
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>


</body>

</html>