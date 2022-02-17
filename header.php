<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <script src="assets/js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css ">
    <title>Resto Bagus</title>

    <style>
        .kotak{
            width: 300px;
            color: white;
        }
    </style>
    <?php
    include 'config.php';
    session_start();
    ?>
</head>
<body style="background: #f0f0f0">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Resto Bagus</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="menu">Menu</a>
            </li>
        </ul>
        <span class="navbar-text">
            <?php
            if (empty($_SESSION['login'])) {
                echo "<a href='login' class='btn btn-sm btn-outline-info'>Masuk</a>";
            }else{
                echo $_SESSION['nama']
                ?>
                &nbsp;<a href='logout' onclick="return confirm('Keluar?');" class='btn btn-sm btn-outline-danger'>Keluar</a>
            <?php
            }
            ?>
        </span>
        </div>
    </div>
    </nav>
    <br>
    <?php
    if(isset($_GET['alert'])){
        if ($_GET['alert'] == "insert") {
            echo '<div class="col-md-4 mx-auto alert alert-success text-center m-1">Data Telah Ditambah</div>';
        }else if ($_GET['alert'] == "gagal") {
            echo '<div class="col-md-4 mx-auto alert alert-danger text-center m-1">Gagal</div>';
        }else if ($_GET['alert'] == "gagal_userpass"){
            echo '<div class="col-md-4 mx-auto alert alert-danger text-center m-1">Username atau Password Salah</div>';

        }
    }else {
        echo "<br><br>";
    }
    ?>
</body>
</html>