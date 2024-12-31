<?php
include('system/session_login.php');
include('system/koneksi.php');
$username = $_SESSION["username"];

$cekNIS = mysqli_query($koneksi, ("SELECT nis FROM users WHERE username ='$username'"));
while ($dataNIS = mysqli_fetch_array($cekNIS)) {
    $NIS = $dataNIS['nis'];
}
$jadwal = mysqli_query($koneksi, ("SELECT * FROM jadwals WHERE nis='$NIS'"));
$bykdata = mysqli_num_rows($jadwal);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SaintOurHome</title>
    <!-- bootstrap cdn  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- fullcalendar css  -->
    <!-- <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.css' rel='stylesheet' /> -->

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
    <!-- progress barstle -->
    <link rel="stylesheet" href="../css/css-circular-prog-bar.css">
    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,600&display=swap" rel="stylesheet">
    <!-- font wesome stylesheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>
    <div class="top_container">
        <?php
        include("system/koneksi.php");
        include("page/navbar.php");
        ?>
        <section class="kalender_section">
            <div class="container mt-4">
                <div class="row">
                    <div class="col-lg-4" style="z-index:999;">
                        <div class="alert alert-warning" role="alert">
                            <h4>Penugasan Siswa</h4>
                        </div>
                        <div class="card">
                            <form action="page/proses_jadwal.php" method="POST">
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="form-label">Keterangan Kegiatan</div>
                                        <textarea name="kegiatan" class="form-control" id="kegiatan" cols="30" rows="2" style="resize: none;"></textarea>
                                    </div>
                                    <div class="form-group mt-4">
                                        <div class="form-label">Tgl Mulai</div>
                                        <input type="datetime-local" class="form-control" name="mulai" id="mulai">
                                    </div>
                                    <div class="form-group mt-4">
                                        <div class="form-label">Tgl Selesai</div>
                                        <input type="datetime-local" class="form-control" name="selesai" id="selesai">
                                    </div>
                                    <div class="form-group mt-4" style="text-align:center">
                                        <button type="submit" class="btn btn-success">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- <div class="col-md-4"> -->
                    <div class="col-md-8">
                        <div class="admission_detail-box">
                            <?php
                            if ($bykdata > 0) {
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
                                } else {
                                    echo ('<h3>Tidak ada tugas yang tersedia </h3>');
                                }
                                for ($i = 1; $i <= $bykdata; $i++) {
                                    while ($data = mysqli_fetch_array($jadwal)) {
                                        $no = $data['jadwal_id'];
                                        $agenda = $data['kegiatan'];
                                        $mulai = $data['mulai'];
                                        $selesai = $data['selesai'];
                                    ?>
                                        <tbody>
                                            <tr>
                                                <th scope="row"> <?php echo ($i++) ?> </th>

                                                <td><?php echo $agenda ?></td>
                                                <td><?php echo $mulai ?></td>
                                                <td><?php echo $selesai ?></td>
                                                <td><a href="system/delete_jadwal.php?id=<?php echo ("$no"); ?>" class="btn" style="background-color:red">Selesai</a></td>
                                        <?php }
                                } ?>
                                            </tr>
                                        </tbody>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <br>
    <?php
    include("page/footer.php")
    ?>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
</body>

</html>