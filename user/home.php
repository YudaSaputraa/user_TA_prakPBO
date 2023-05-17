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
    <title>Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <link rel="stylesheet" href="../style.css">
</head>
<style>
    .dropdown-input {
        background-color: rgba(31, 31, 44, 255)
    }

    .container {
        border-radius: 10px;
    }

    h1 {
        font-family: 'Poppins';
    }

    .main-content {
        display: flex;
        justify-content: center;
        width: 100%;
        height: 1200px;
        background-color: #282A3A;
        font-family: 'roboto';
        flex-direction: column;
        align-items: center;
        color: rgb(231, 231, 231);
    }

    .main-content2 {
        display: flex;
        justify-content: center;
        width: 100%;
        height: 200px;
        background-color: #DEF5E5;
        font-family: 'roboto';
        flex-direction: column;
        align-items: center;
        color: rgb(231, 231, 231);
    }

    .card-body {
        margin-top: -60px;
        height: 200px;
        width: 200px;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: aquamarine;
        border-radius: 10px;
    }

    .icon-button:hover {
        transform: scale(1.2);
        transition: all 0.2s;
    }

    .content-main {
        display: flex;
        width: 80%;
        align-items: center;
        justify-content: center;
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
                        <a class="nav-link text-white active" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="pendaftaran.php">Pendaftaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="reservasiSaya.php">Reservasi Saya</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>
    <div class="main">
        <div class="main-content">
            <div class="content-main row">
                <div class="col-7">
                    <a style="font-family: 'Poppins'; font-size: 50px; font-weight: bold;">SELAMAT DATANG DI</a>
                    <h1 style="font-family: 'Poppins'; color:aqua;">YULJE MEDICAL CENTRE</h1>
                    <p class="text-left" style="font-size: 17px; font-family: 'Poppins';">Yulje Medical Centre adalah fasilitas pelayanan kesehatan yang menyelenggarakan upaya kesehatan masyarakat dan upaya kesehatan perseorangan tingkat pertama, dengan lebih mengutamakan upaya promotif dan preventif di wilayah kerjanya.</p>
                    <div class="d-grid mt-3 gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                        <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#started">Get Started</a>
                        <a class="btn btn-outline-light btn-lg px-4" href="#!">Learn More</a>
                    </div>
                </div>
                <div class="col-5 text-center">
                    <img style="padding-left: 30px;" src="../assets/doktergif2.gif" width="500px" alt="">
                </div>

            </div>

            <marquee class="mt-3" width="80%" direction="left" style="font-size: 20px; font-family: 'Poppins';">Utamakan kesehatan bukan Pacaran, kesehatan nomor 1 pacaran nomor sekian!!</marquee>

            <h2 class="mt-3" style="font-weight :bold;">INFORMATION</h2>
            <hr size="5px" width="20%" color="white" />
            <div class="mt-3 w-100 container" style="background-color: rgba(49, 49, 77, 0.815);">
                <center>
                    <div class="slider" style="width: 60%;">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="../assets/bg-doctor.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../assets/gambar02.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../assets/gambar03.png" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </center>
            </div>

            <h2 class="mt-4">MENU</h2>
            <hr size=" 5px" width="10%" color="white" />
        </div>
        <div class="main-content2" id="started">
            <div class="profil row text-center">
                <div class="card-body ms-5 col">
                    <a href="pendaftaran.php"><img src="../assets/pendaftaran_icon.png" class="icon-button" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Pendaftaran" alt=""></a>

                </div>
                <div class="card-body ms-5 col">
                    <a href="reservasiSaya.php"><img src="../assets/jadwal_icon.png" class="icon-button" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Reservasi Saya" alt=""></a>

                </div>
            </div>
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
<script>
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
</script>

</html>