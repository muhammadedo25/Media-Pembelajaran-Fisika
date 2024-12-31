<?php
include('system/session_login.php');
include('system/koneksi.php');
$username = $_SESSION['username'];
$cekNIS =mysqli_query ($koneksi,("SELECT nis FROM users WHERE username ='$username'"));
while ($dataNIS = mysqli_fetch_array($cekNIS)){
    $NIS = $dataNIS['nis'];
}
$jadwal = mysqli_query($koneksi,("SELECT * FROM jadwals WHERE nis='$NIS'"));
$bykdata = mysqli_num_rows($jadwal);
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

  <div class="common_style">



    <!-- admission section -->
    <section class="admission_section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="admission_detail-box">
              <h3>
                Agenda Siswa
              </h3>
              <?php
                if ($bykdata>0){
              ?>
              <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Agenda</th>
            <th scope="col">Tangal Mulai</th>
            <th scope="col">Tanggal Selesai</th>
            <th scope="col">Keterangan</th>
        </tr>
      </thead>
        <?php
                }else{
                  echo ('<h3>Tidak ada tugas yang tersedia </h3>');
                }
         

         
          for ($i=1; $i<=$bykdata; $i++){
          while ($data = mysqli_fetch_array($jadwal)){
            $no = $data['jadwal_id'];
            $agenda = $data['kegiatan'];
            $mulai = $data['mulai'];
            $selesai = $data['selesai'];
          ?>
      <tbody>
        <tr>
          <th scope="row"> <?php echo ($i++)?> </th>
          
          <td><?php echo $agenda?></td>
          <td><?php echo $mulai ?></td>
          <td><?php echo $selesai ?></td>
          <td><a href="system/delete_jadwal.php?id=<?php echo("$no"); ?>" class="btn" style="background-color:red">Selesai</a></td>
          <?php }
        } ?>
        </tr>
      </tbody>
    </table>
            </div>
          </div>
          <div class="col-md-4">
            <div class="admission_img-container">
              <img src="images/admission.png" alt="" >
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end admission section -->
  </div>

  <?php
    include("page/footer.php")
  ?>

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>


</body>

</html>