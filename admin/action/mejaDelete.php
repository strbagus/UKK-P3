<?php
    include '../../config.php';

    $sql = "DELETE FROM tb_meja ORDER BY meja_no DESC LIMIT 1";
    $result = $conn->query($sql);

    if ($result) {
        header("location:../meja.php?alert=delete");
    }else{
        header("location:../meja.php?alert=delete_gagal");
    }
?>