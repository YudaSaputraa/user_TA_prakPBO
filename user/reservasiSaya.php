<?php
session_start();
if (empty($_SESSION['username'])) {
  header("location:../index.php?message=belum_login");
}
$_SESSION['id_userr'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <link rel="stylesheet" href="../style.css">
  <title>Reservasi</title>
</head>
<style>
  .card_img {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
  }

  .table-style {
    width: 60%;
    background-color: white;
    border-radius: 10px;
  }

  .main {
    min-height: calc(100vh - 60.97px - 72px);
    display: flex;
    justify-content: center;
    font-size: 40px;
    font-family: 'roboto';
    align-items: center;
    color: rgb(231, 231, 231);
    background-color: #282A3A;
  }
</style>

<body>
  <nav class="navbar navbar-expand-lg ">
    <div class="container-fluid ">
      <a class="navbar-brand text-white" href="#">
        <img src="../assets/icon.png" class="icon d-inline-block align-center ms-2 me-2" alt="">
        Yulje Medical Centre
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link text-secondary" aria-current="page" href="../index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-secondary" href="pendaftaran.php">Pendaftaran</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white active" href="reservasiSaya.php">Reservasi Saya</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
  <div class="main" style="font-family: 'Poppins';">
    <div class="judul mt-4">
      <center>
        <h2>DAFTAR RESERVASI</h2>
        <hr size="5px" width="20%" color="white" />
        <p>Berikut merupakan history reservasi</p>
      </center>
    </div>
    <div class="table-style">
      <table class="table table-striped fs-4 table-hover text-center">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Kode Registrasi</th>
            <th scope="col">Nama Dokter</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include '../connection/connection.php';
          $no = 1;
          $id = $_SESSION['id_userr'];
          $sql = "SELECT registrasi.kode_registrasi, registrasi.id_user, registrasi.id_dokter, registrasi.status, user.id_user, dokter.nama
                  FROM registrasi
                  INNER JOIN dokter ON dokter.id_dokter = registrasi.id_dokter
                  INNER JOIN user ON user.id_user = registrasi.id_user
                  WHERE registrasi.id_user = $id;";
          $myquery = mysqli_query($connect, $sql);
          while ($data_reservasi = mysqli_fetch_array($myquery)) {
          ?>
            <tr>
              <th scope="row"><?= $no ?></th>
              <td><?= $data_reservasi['kode_registrasi'] ?></td>
              <td><?= $data_reservasi['nama'] ?></td>
              <td><?= $data_reservasi['status'] ?></td>
            </tr>
          <?php
            $no++;
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
  <footer class="bg-dark py-4 mt-auto">
    <div class="container px-5">
      <div class="row align-items-center justify-content-between flex-column flex-sm-row">
        <div class="col-auto">
          <div class="small m-0 text-white">&copy; copyright 2023 by anonymous</div>
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