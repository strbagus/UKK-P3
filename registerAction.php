<?php
    include 'config.php';

    $username = $_POST['username'];
    $nama = $_POST['nama'];
    $nohp = $_POST['nohp'];
    $password = md5($_POST['password']);

    $sql = "INSERT INTO tb_user 
            (user_username, user_nama, user_password, user_nohp, user_level) 
            VALUES 
            ('$username', '$nama', '$password', '$nohp', '5')";

    $result = $conn->query($sql);
    if ($result) {
        header("location: login?alert=insert");
    }else{
        header("location: login?alert=gagal");
    }

?>