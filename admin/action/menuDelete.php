<?php 
include '../../config.php' ;

$id = $_GET['id'];

$sql = "DELETE FROM tb_menu WHERE menu_id=$id";
$result = $conn->query($sql);

if ($result) {
    header("location:../menu?alert=delete");
}else {
    header("location:../menu?alert=delete_gagal");
}
?>
