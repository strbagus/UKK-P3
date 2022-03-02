<?php
    include '../../config.php';

    $id = $_POST['id'];
    $menu = $_POST['menu'];
    $harga = $_POST['harga'];
    $tipe = $_POST['tipe'];
    $status = $_POST['status'];

    if($tipe=="" && $status==""){
        $sql = "UPDATE tb_menu SET 
            menu_nama='$menu', menu_harga='$harga'
            WHERE menu_id=$id";
    }else if($tipe==""){
        $sql = "UPDATE tb_menu SET 
            menu_nama='$menu', menu_harga='$harga', menu_status='$status' 
            WHERE menu_id=$id";
    }else if($status==""){
        $sql = "UPDATE tb_menu SET 
            menu_nama='$menu', menu_harga='$harga', menu_tipe='$tipe' 
            WHERE menu_id=$id";        
    }else{
        $sql = "UPDATE tb_menu SET 
            menu_nama='$menu', menu_harga='$harga', menu_tipe='$tipe',menu_status='$status' 
            WHERE menu_id=$id";
    }
    $result = $conn->query($sql);
    if ($result) {
        header("location:../menu.php?alert=update");
    }else {
        header("location:../menu.php?alert=update_gagal");
    }

?>