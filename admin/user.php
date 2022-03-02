<?php 
include 'header.php' ;
?>

<div class="container">
    <div class="row bg-light rounded py-3 px-4">
        <h3>Data User</h3>
        <hr>
        <div class="d-flex justify-content-between">
            <?php
                if(isset($_GET['staff'])){
                    $sql = "SELECT * FROM 
                            tb_user INNER JOIN tb_level 
                            ON 
                            tb_user.user_level=tb_level.level_id 
                            WHERE 
                            tb_user.user_level='1'
                            OR tb_user.user_level='2'
                            OR tb_user.user_level='3'
                            OR tb_user.user_level='4'";
                            ?>
                    <div>
                        <div class="btn btn-info text-white disabled">Staff</div>
                        <a href="user.php?pelanggan=true"><div class="btn btn-info text-white">Pelanggan</div></a>
                        <a href="user.php?semua=true"><div class="btn btn-info text-white">Semua</div></a>
                    </div>
                            <?php
                }else if(isset($_GET['pelanggan'])){
                    $sql = "SELECT * FROM 
                            tb_user INNER JOIN tb_level 
                            ON 
                            tb_user.user_level=tb_level.level_id 
                            WHERE 
                            tb_user.user_level = '5'";
                            ?>
                <div>
                    <a href="user.php?staff=true"><div class="btn btn-info text-white">Staff</div></a>
                    <div class="btn btn-info text-white disabled">Pelanggan</div>
                    <a href="user.php?semua=true"><div class="btn btn-info text-white">Semua</div></a>
                </div>
                            <?php
                }else{
                    $sql = "SELECT * FROM tb_user INNER JOIN tb_level ON tb_user.user_level=tb_level.level_id";
                    ?>
                        <div>
                            <a href="user.php?staff=true"><div class="btn btn-info text-white">Staff</div></a>
                            <a href="user.php?pelanggan=true"><div class="btn btn-info text-white">Pelanggan</div></a>
                            <div class="btn btn-info text-white disabled" >Semua</div>
                        </div>
                    <?php
                }
            ?>
            
            <a href="userTambah.php" class="btn btn-primary m-2">Tambah</a>
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
                                    <a href="userEdit.php?id=<?php echo $d['user_id']?>" class="btn btn-sm btn-warning">Edit</a>
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