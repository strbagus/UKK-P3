<?php
    include '../../config.php';

    $file_tmp = $_FILES['gambar']['tmp_name'];
    $file_name = $_FILES['gambar']['name'];
    $file_path = "/assets/img/".$file_name;


    $menu = $_POST['menu'];
    $harga = $_POST['harga'];
    $tipe = $_POST['tipe'];
    $status = $_POST['status'];

    $p = move_uploaded_file($file_tmp, $file_path);

    var_dump($p);
    die;
    $sql = "INSERT INTO tb_menu 
            (menu_nama, menu_harga, menu_tipe, menu_status, menu_gambar) 
            VALUES 
            ('$menu', '$harga', '$tipe', '$status','$file_name')";
    $result = $conn->query($sql);


    if ($result) {
        header("location:../menu.php?alert=insert");
    }else{
        header("location:../menu.php?alert=insert_gagal");
    }

?>