<?php 
include 'header.php';
?>
    <div class="container">
        <div class="col-md-5 mx-auto px-4 py-3 rounded bg-light">
            <h3>Registrasi</h3>
            <hr>
            <form action="registerAction" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" required="required">
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama" required="required">
                </div>
                <div class="form-group">
                    <label>No Handphone</label>
                    <input type="number" class="form-control" name="nohp" required="required">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" required="required">
                </div>
                <div class="form-group d-flex justify-content-center">
                    <input type="submit" value="Daftar" class="m-2 btn btn-primary">
                </div>
            </form>
        </div>
    </div>
<?php include 'footer.php' ?>