<?php
    include 'config.php';

    if (isset($_POST['Masuk'])) {
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        
        $sql = "SELECT * FROM tb_user 
                WHERE 
                user_username='$username' 
                AND 
                user_password='$password'";

        $result = $conn->query($sql);


        if ($result->num_rows > 0) {
            $d = $result->fetch_assoc();
            
            session_start();
            $_SESSION['login'] = $d['user_level'];
            $_SESSION['nama'] = $d['user_nama'];
            $_SESSION['uid'] = $d['user_id'];

            if($d['user_level'] == 1){
                $_SESSION['status']="admin_login";
                header("location:admin");
            }else if($d['user_level'] == 2){
                $_SESSION['status']="waiter_login";
                header("location:waiter");
            }else if($d['user_level'] == 3){
                $_SESSION['status']="kasir_login";
                header("location:kasir");
            }else if($d['user_level'] == 4){
                $_SESSION['status']="owner_login";
                header("location:owner");
            }else{
                $_SESSION['status']="pelanggan_login";
                header("location:index.php");
            }

        }else{
            header("location:login.php?alert=gagal_userpass");
        }
        
    }

?>