<?php
    include '../../config.php';

    $username = $_POST['username'];
    $nama = $_POST['nama'];
    $password = md5($_POST['password']);
    $level = $_POST['level'];

    $sql = "INSERT INTO tb_user 
            (user_username, user_nama, user_password, user_level) 
            VALUES 
            ('$username', '$nama', '$password', '$level')";

    $result = $conn->query($sql);
    if($result){
        header("location:../user.php?alert=insert");
    }else{  
        header("location:../user.php?alert=insert_gagal");
    }
?>