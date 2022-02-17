<?php
    include '../../config.php';

    $sql = $conn->query("SELECT * FROM tb_meja");
    $row = $sql->num_rows;
    $no = $row + 1;
    $sql2 = "INSERT INTO tb_meja (meja_no, meja_status) VALUES ('$no', 'Kosong')";
    $result = $conn->query($sql2);
    if ($result) {
        header("location:../meja?alert=insert");
    }else {
        header("location:../meja?alert=insert_gagal");
    }
?>