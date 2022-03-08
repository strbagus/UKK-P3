<?php
    include 'config.php';
    $id = $_GET['id'];
    $sql = "UPDATE tb_order SET order_status='dipesan' WHERE order_transaksi=$id";
    $result = $conn->query($sql);
    if($result){
        header("location: pesan.php");
    }else{
        header("location: pesan.php?alert=gagal");
    }
?>