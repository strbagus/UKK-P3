<?php
include '../../config.php';

$id = $_POST['id'];
$username = $_POST['username'];
$nama = $_POST['nama'];
$level = $_POST['level'];

if($level==""){
    $sql = "UPDATE tb_user SET 
        user_username='$username', user_nama='$nama' WHERE user_id=$id";
}else{
    $sql = "UPDATE tb_user SET 
        user_username='$username', user_nama='$nama', user_level='$level' WHERE user_id=$id";
}

$result = $conn->query($sql);

if ($sql) {
    header("location:../user?alert=update");
}else{
    header("location:../user?alert=update_gagal");
}

?>