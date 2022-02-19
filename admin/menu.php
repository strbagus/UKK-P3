<?php 
    include 'header.php';
?>
    <div class="container">
        <div class="bg-light py-3 px-4 rounded">
            <h3>Data Menu</h3>
            <hr>
            <div class="d-flex justify-content-end">
                <a href="menuTambah.php" class="btn btn-primary mb-3">Tambah</a>
            </div>
            <div class="tables-responsive">
                <table class="table table-striped table-hover table bordered" id="table-datatable">
                    <thead>
                        <tr>
                            <th width="1%">No</th>
                            <th>Nama Menu</th>
                            <th>Harga</th>
                            <th>Tipe</th>
                            <th>Status</th>
                            <th width="15%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM tb_menu";
                            $result = $conn->query($sql);
                            $no = 1;
                            while ($d=$result->fetch_array()) {
                                ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $d['menu_nama'] ?></td>
                                    <td><?php echo $d['menu_harga'] ?></td>
                                    <td><?php echo $d['menu_tipe'] ?></td>
                                    <td><?php echo $d['menu_status'] ?></td>
                                    <td>
                                        <a href="menuEdit.php?id=<?php echo $d['menu_id']?>" class="btn-warning btn btn-sm">Edit</a>
                                        <a href="action/menuDelete.php?id=<?php echo $d['menu_id']?>" onclick="return confirm('Hapus?');" class="btn-danger btn btn-sm">Hapus</a>
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