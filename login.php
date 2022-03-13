<?php
if(empty($_SESSION['status'])){
    include 'header.php';
    ?>
        <div class="container ">
            <div class="col-md-5 mt-5 mx-auto rounded py-3 px-4 bg-light">
                <h3>Login</h3>
                <hr>
                <form action="loginAction.php" method="post">
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                        <input type="text" name="username" class="form-control" required="required" placeholder="Username">
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                        <input type="password" name="password" class="form-control" required="required" placeholder="Password">
                    </div>
                    <div class="form-group d-flex justify-content-center">
                        <input type="submit" value="Masuk" name="Masuk" class="btn btn-primary m-2">
                    </div>
                </form>
                
                <p class="regis-text fw-light text-muted">Belum punya akun?&nbsp;<a href="register.php">Buat Akun</a></p>
            </div>
        </div>
    <?php
    include 'footer.php';
}else if($_SESSION['status']==="admin_login"){
    header("location:admin");
}else if($_SESSION['status']==="waiter_login"){
    header("location:admin");
}else if($_SESSION['status']==="kasir_login"){
    header("location:admin");
}else if($_SESSION['status']==="owner_login"){
    header("location:admin");
}else if($_SESSION['status']==="pelanggan_login"){
    header("location:admin");
}

?>