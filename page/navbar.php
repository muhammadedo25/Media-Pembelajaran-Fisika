<!-- <?php
      session_start();
      ?> -->
<link rel="stylesheet" href="css/main.css">
<header class="header_section">
  <div class="container">
    <nav class="navbar navbar-expand-lg custom_nav-container ">
      <a class="navbar-brand" href="index.php">
        <span>
          SaintOurHome
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
          <ul class="navbar-nav  ">
            <li class="nav-item active">
              <a class="nav-link" href="index.php"> Beranda <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="about.php"> Tentang </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="kalender.php"> Agenda </a>
            </li>
            <div class="dropdown">
              <li class="nav-item">
                <a class="nav-link"> Materi </a>
                <div class="dropdown-content" style="z-index:9999;">
                  <a href="Materi.php">Hemat Energi</a>
                  <a href="tumbuhan.php">Bagian Tumbuhan</a>
                  <a href="hewan.php">Perkembangan Hewan</a>
                  <a href="manusia.php">Pertumbuhan manusia</a>
                  <!-- <a href="#">Hewan dan Tumbuhan</a> -->
                </div>
              </li>
            </div>
            <?php
            if (isset($_SESSION['username'])) {
            ?>
              <div class="dropdown">
                <li class="nav-item">
                  <a class="nav-link text-dark" href="#" enable><?php echo ($_SESSION['username']); ?></a>

                  <div class="dropdown-content">
                    <a href="contact.php">Profil</a>
                    <a href="page/logout.php">Log Out</a>
                  </div>
                </li>
              </div>
            <?php
            } else {
            ?>
              <li class="nav-item">
                <a href="page/login.php" class="nav-link">Login</a>
              </li>
              <li class="nav-item">
                <a href="page/signup.php" class="nav-link">Sign-Up</a>
              </li>
            <?php
            }
            ?>



          </ul>
        </div>
    </nav>
  </div>
</header>