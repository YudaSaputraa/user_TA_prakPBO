<?php
session_start();
if (empty($_SESSION['username'])) {
  header("location:../index.php?message=belum_login");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pendaftaran</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <link rel="stylesheet" href="../style.css">
</head>
<style>
  .dropdown-input {
    background-color: #3A8891;
  }

  .main {
    background-color: #282A3A;
  }

  .form-input {
    background-color: #0E5E6F;
    border-radius: 20px;
    height: 300px;
  }

  .main-right {
    background-color: #3A8891;
    border-radius: 20px;
    height: 300px;
  }

  ::placeholder {

    color: white !important;
    opacity: 1;

  }
</style>

<body style="font-family: 'Poppins';">
  <nav class="navbar navbar-expand-lg ">
    <div class="container-fluid ">
      <a class="navbar-brand text-white" href="#">
        <img src="../assets/icon.png" class="icon d-inline-block align-center ms-2 me-2" alt="">
        Yulje Medical Centre
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link text-secondary" aria-current="page" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white active" href="pendaftaran.php">Pendaftaran</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-secondary" href="daftar_klinik.php">Reservasi Saya</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="main">
    <div class="mt-3 w-100 container">
      <div class="title mt-3">
        <center>
          <a style="font-family: 'Poppins'; font-size: 40px; font-weight: bold;">PENDAFTARAN PASIEN YULJE MEDICAL CENTRE</a>
          <marquee class="mt-3" width="40%" direction="left" style="font-size: 20px; font-family: 'Poppins';">Harap melakukan pendaftaran dahulu jika ingin periksa, kalo tidak jangan!</marquee>

        </center>
      </div>
      <div class="row">
        <div class="col-7">
          <img src="../assets/puskesmasEdited.png" height="450px" alt="puskesmas image">
          <div class="warning text-center" style="font-size: 15px;">
          </div>
        </div>
        <div class="form-input col-5">
          <form method="POST" action="../operation/pendaftaran_process.php">
            <center class="mt-1">
              <img src="../assets/checklist.png" width="50px" alt="">
              <a style="font-family: 'Poppins';">Pendaftaran
                <hr size="1px" width="100%" color="white" />
              </a>
              <div class="main-right row mt-2">
                <h5 class="mt-3">Masukkan Data Diri</h5>
                <br>
                <div class="col">
                  <?php
                  $random = rand();
                  ?>
                  <input type="text" value="<?= $random ?>" class="form-control bg-secondary text-white font-weight-normal" placeholder="Kode Registrasi" name="kode_registrasi" readonly>
                </div>

                <div class="col">

                  <input type="text" class="form-control bg-transparent text-white font-weight-normal" placeholder="Nama" name="nama">

                </div>
                <div class="mb-1">
                  <select class="dropdown-input form-select text-white font-weight-normal " name="dropdown_dokter" aria-label="Default select example">
                    <option selected>Dokter [Spesialisasi]</option>
                    <?php
                    include '../connection/connection.php';
                    $mysql = "SELECT * FROM dokter";
                    $query = mysqli_query($connect, $mysql);
                    while ($data_dokter = mysqli_fetch_array($query)) {
                    ?>
                      <option value="<?= $data_dokter['id_dokter'] ?>"><?= $data_dokter['nama'] ?> [ <?= $data_dokter['spesialisasi'] ?> ]</option>
                    <?php
                    }
                    ?>
                  </select>
                </div>
                <div class="col">
                  <input type="submit" class=" w-100 btn btn-success text-white font-weight-normal" value="Submit">
                </div>
                <div class="col">
                  <input type="reset" class="w-100 btn btn-secondary text-white font-weight-normal" value="Reset">
                </div>
              </div>
            </center>
          </form>
        </div>
      </div>
    </div>
  </div>
  <footer class="bg-dark py-4 mt-auto">
    <div class="container px-5">
      <div class="row align-items-center justify-content-between flex-column flex-sm-row">
        <div class="col-auto">
          <div class="small m-0 text-white">&copy; copyright 2022 by anonymous</div>
        </div>
        <div class="col-auto">
          <a class="link-light small" href="#!">Privacy</a>
          <span class="text-white mx-1">&middot;</span>
          <a class="link-light small" href="#!">Terms</a>
          <span class="text-white mx-1">&middot;</span>
          <a class="link-light small" href="#!">Contact</a>
        </div>
      </div>
    </div>
  </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

</html>