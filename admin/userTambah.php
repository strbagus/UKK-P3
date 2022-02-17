<?php include 'header.php' ?>
<br><br>

<div class="container">
    <div class="col-md-5 mx-auto py-3 px-4 bg-light rounded">
        <h3>Tambah User</h3>
        <hr>
        <form action="action/userInsert" method="post">
            <div class="form-group">
                <label for="">Username</label>
                <input type="text" class="form-control" name="username" required="required">
            </div>
            <div class="form-group">
                <label for="">Nama</label>
                <input type="text" class="form-control" name="nama" required="required">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" name="password" required="required">
            </div>
            <div class="form-group">
                <label for="">No Handphone</label>
                <input type="number" class="form-control" name="nohp" required="required">
            </div>
            <div class="form-group">
                <label for="">Level</label>
                <select name="level" required="required" class="form-control">
                    <option value="" selected disabled>-- Pilih Level --</option>
                    <?php
                    $sql = "SELECT * FROM tb_level";
                    $result = $conn->query($sql);
                    while($d = $result->fetch_array()){
                        ?>
                        
                        <option value="<?php echo $d['level_id']?>"><?php echo $d['level_nama'] ?></option>
                        
                        <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-group d-flex justify-content-center mt-2">
                <input type="submit" value="Tambah" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>
<?php include 'footer.php' ?>