<?php

include '../../config.php';
$id = $_GET['id'];
$meja = $_GET['meja'];
$conn->query("UPDATE tb_meja SET meja_status='Kosong' WHERE meja_no=$meja");
$sql = "UPDATE tb_transaksi SET transaksi_status='Dibayar' WHERE transaksi_id=$id";
$result = $conn->query($sql);
if ($result) {
    header("location: ../transaksi.php?alert=update");
}else{
    header("location: ../transaksi.php?alert=update_gagal");
}
?>