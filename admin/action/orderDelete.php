<?php
    include '../../config.php';

    $id = $_GET['id'];
    $sql = "DELETE FROM tb_order WHERE order_id=$id";
    $result = $conn->query($sql);

    if($result){
        header("location:../order?alert=delete");
    }else{
        header("location:../order?alert=delete");
    }    
?>