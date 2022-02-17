<?php 
include 'header.php' ;
$id = $_GET['id'];
$sql = "SELECT * FROM tb_user WHERE user_id=$id";
$result = $conn->query($sql);
$d = $result->fetch_array();

?>
<br><br>

<div class="container">
    <div class="col-md-5 mx-auto py-3 px-4 bg-light rounded">
        <h3>Tambah User</h3>
        <hr>
        <form action="action/userUpdate" method="post">
            <input type="hidden" value="<?php echo $id ?>" name="id">
            <div class="form-group">
                <label for="">Username</label>
                <input type="text" class="form-control" value="<?php echo $d['user_username'] ?>" name="username" required="required">
            </div>
            <div class="form-group">
                <label for="">Nama</label>
                <input type="text" class="form-control" value="<?php echo $d['user_nama'] ?>" name="nama" required="required">
            </div>
            <div class="form-group">
                <label for="">Level</label>
                <select name="level" class="form-control">
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