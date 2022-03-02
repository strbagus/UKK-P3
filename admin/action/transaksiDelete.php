<?php 
include '../../config.php';

$id = $_GET['id'];
$sql2 = "DELETE FROM 
        tb_order WHERE order_transaksi=$id";
$result2 = $conn->query($sql2);

$sql = "DELETE FROM 
        tb_transaksi WHERE transaksi_id=$id";
$result = $conn->query($sql);

if ($result) {
    header("location:../transaksi.php?alert=delete");
}else {
    header("location:../transaksi.php?alert=delete_gagal");
}
?>
