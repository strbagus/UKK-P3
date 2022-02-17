<?php 
include 'header.php' ;
?>

<div class="container">
    <div class="row bg-light rounded py-3 px-4">
        <h3>Data User</h3>
        <hr>
        <div class="d-flex justify-content-between">
            <div>
                <form action="">
                    <input type="submit" value="Staff" name="Staff" class="btn btn-info">
                    <input type="submit" value="Pelanggan" name="Pelanggan" class="btn btn-info">
                    <input type="submit" value="Semua" name="Semua" class="btn btn-info">
                </form>
            </div>
            <a href="userTambah" class="btn btn-primary m-2">Tambah</a>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered" id="table-datatable">
                <thead>
                    <tr>
                        <th width="1%">No</th>
                        <th>Username</th>
                        <th>Nama</th>
                        <th>Level</th>
                        <th width="15%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT * FROM tb_user INNER JOIN tb_level ON tb_user.user_level=tb_level.level_id";
                        $result = $conn->query($sql);
                        $no = 1;
                        while($d=$result->fetch_array()){
                            ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $d['user_username']?></td>
                                <td><?php echo $d['user_nama']?></td>
                                <td><?php echo $d['level_nama']?></td>
                                <td>
                                    <a href="userEdit?id=<?php echo $d['user_id']?>" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="action/userDelete?id=<?php echo $d['user_id']?>" onclick="return confirm('Hapus?');" class="btn btn-sm btn-danger">Hapus</a>
                                </td>
                            </tr>
                            
                            <?php
                        }
                    ?>
                </tbody>
                
            </table>
        </div>
        
        
    </div>
</div>

<?php include 'footer.php' ?>