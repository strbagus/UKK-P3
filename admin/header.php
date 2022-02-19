<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <script type="text/javascript" src="../assets/js/jquery.js"></script>
    <script type="text/javascript" src="../assets/DataTables/datatables.js"></script>
    <script type="text/javascript" src="../assets/DataTables/jquery.dataTables.js"></script>
    <link rel="stylesheet" type="text/css" href="../assets/DataTables/datatables.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css ">
    <title>Admin - Resto Bagus</title>

    <style>
        .kotak{
            width: 300px;
            color: white;
        }
    </style>
    <?php
    include '../config.php';
    session_start();
    if(!$_SESSION['status']==="admin_login"){
        header("location: ../login?alert=belum_login");
    }
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
            <a class="nav-link" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="menu.php">Menu</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="order.php">Order</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="transaksi.php">Transaksi</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="omset.php">Omset</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="meja.php">Meja</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="user.php">User</a>
            </li>
        </ul>
        <span class="navbar-text">
            <?php
                echo $_SESSION['nama']
                ?>
                &nbsp;<a href='action/logout.php' onclick="return confirm('Keluar?');" class='btn btn-sm btn-outline-danger'>Keluar</a>
                <?php
            ?>
        </span>
        </div>
    </div>
    </nav>

    <?php
if(isset($_GET['alert'])){
    if ($_GET['alert'] == "insert") {
        echo '<div class="col-md-4 mx-auto alert alert-success text-center m-1">Data Telah Ditambah</div>';
    }else if ($_GET['alert'] == "update") {
        echo '<div class="col-md-4 mx-auto alert alert-warning text-center m-1">Data Telah Diedit</div>';
    }else if ($_GET['alert'] == "delete") {
        echo '<div class="col-md-4 mx-auto alert alert-danger text-center m-1">Data Telah Dihapus</div>';
    }
}else {
    echo "<br><br><br>";
}
?>