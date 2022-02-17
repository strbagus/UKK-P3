<?php
    include '../../config.php';

    $id = $_GET['id'];
    $sql = "DELETE FROM tb_user WHERE user_id=$id";
    $result = $conn->query($sql);

    if($result){
        header("location:../user?alert=delete");
    }else{
        header("location:../user?alert=delete_gagal");
    }
?>