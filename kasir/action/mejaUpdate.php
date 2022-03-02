<?php
    include '../../config.php';

    $id = $_GET['id'];
    $status = $_GET['status'];

    if($status == "Dipakai"){
        $sql = "UPDATE tb_meja SET meja_status='Kosong' WHERE meja_no=$id";
    }else{
        $sql = "UPDATE tb_meja SET meja_status='Dipakai' WHERE meja_no=$id";
    }
    $result = $conn->query($sql);
    if($result){
        header("location:../meja.php?alert=update");
    }else{
        header("location:../meja.php?alert=update_gagal");
    }
?>