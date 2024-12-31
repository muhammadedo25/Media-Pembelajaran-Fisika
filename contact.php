<?php
include('system/session_login.php');
include ("system/koneksi.php");
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
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- progress barstle -->
  <link rel="stylesheet" href="css/css-circular-prog-bar.css">
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,600&display=swap" rel="stylesheet">
  <!-- font wesome stylesheet -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

  <link rel="stylesheet" href="css/css-circular-prog-bar.css">

</head>

<body class="sub_page">
  <div class="top_container ">
    <!-- header section strats -->
    <?php include("page/navbar.php") ?>

  </div>
  <!-- end header section -->

  <!-- contact section -->

  <section class="contact_section ">

    <div class="container">

      <div class="row">
        <div class="col-md-6">
          <div class="d-flex justify-content-center d-md-block">
            <h2>
              My Profile
            </h2>
          </div>
          <form action="page/edit_profile.php">
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
                  <input type="text" placeholder="Kelas belum terdata" value="<?php echo ($kelas); ?>" readonly>
                </div>
                <div>
                  <p class="mb-0">Wali Murid :</p>
                  <input type="text" placeholder="Wali Murid belum terdata" value="<?php echo ($walimurid); ?>" readonly>
                </div>
                <div class="mt-5">
                  <button type="submit">Edit</button>
                  </div>
              </div>
            </div>

          </form>
        </div>
        <div class="col-md-6">
          <div class="contact_img-box">
            <img src="images/students.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- contact section end -->

  <?php
    include("page/footer.php")
  ?>

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

</body>

</html>