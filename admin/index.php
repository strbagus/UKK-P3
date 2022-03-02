<?php
    include 'header.php';
?>
<div class="container bg-light rounded p-4">
    <h3>DASHBOARD ADMIN</h3>
    <hr>
    <div class="row d-flex justify-content-evenly">
        <div class="col-md-2 rounded p-3 bg-info text-center text-white">
            <a href="meja.php" class="text-white text-decoration-none">
                <i class="fas fa-chair fa-5x"></i>
                <hr>
                <span>
                    <?php
                        $meja = $conn->query("SELECT *, COUNT(meja_no) AS utotal FROM tb_meja");
                        $dmeja = $meja->fetch_array();
                        echo "Jumlah Meja : ".$dmeja['utotal'];
                    ?>
                </span>
            </a>
        </div>
        <div class="col-md-2 rounded p-3 bg-info text-center text-white">
            <a href="user.php" class="text-white text-decoration-none">
                <i class="far fa-user-circle fa-5x"></i>
                <hr>
                <span>
                    <?php
                        $user = $conn->query("SELECT *, COUNT(user_id) AS utotal FROM tb_user");
                        $duser = $user->fetch_array();
                        echo "Jumlah User : ".$duser['utotal'];
                    ?>
                </span>
            </a>
        </div>
        <div class="col-md-2 rounded p-3 bg-info text-center text-white">
            <a href="menu.php" class="text-white text-decoration-none">
                <i class="fas fa-utensils fa-5x"></i>
                <hr>
                <span>
                    <?php
                        $menu = $conn->query("SELECT *, COUNT(menu_id) AS utotal FROM tb_menu");
                        $dmenu = $menu->fetch_array();
                        echo "Jumlah Menu : ".$dmenu['utotal'];
                    ?>
                </span>
            </a>
        </div>
        <div class="col-md-2 rounded p-3 bg-info text-center text-white">
            <a href="omset.php" class="text-white text-decoration-none">
                <i class="fas fa-dollar-sign fa-5x"></i>
                <hr>
                <span>
                    <?php
                        $omset = $conn->query("SELECT *,COUNT(transaksi_id) AS trantotal, SUM(transaksi_total) AS utotal FROM tb_transaksi");
                        $domset = $omset->fetch_array();
                        echo "Omset : Rp.".number_format($domset['utotal']);
                    ?>
                </span>
            </a>
        </div>
        <div class="col-md-2 rounded p-3 bg-info text-center text-white">
            <a href="transaksi.php" class="text-white text-decoration-none">
                <i class="fas fa-concierge-bell fa-5x"></i>
                <hr>
                <span>
                    <?php
                        echo "Jumlah Transaksi : ".$domset['trantotal'];
                    ?>
                </span>
            </a>
        </div>
    </div>
</div>



<?php include 'footer.php'?>