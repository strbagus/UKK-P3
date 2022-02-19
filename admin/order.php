<?php include 'header.php' ?>
<div class="container">
    <div class="bg-light rounded py-3 px-4">
        <h3>Data Order</h3>
        <hr>
        <div class="d-flex justify-content-end">
            <a href="orderTambah.php" class="btn btn-primary mb-2">Tambah</a>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered" id="table-datatable">
                <thead>
                    <tr>
                        <th width="1%">No</th>
                        <th>No Meja</th>
                        <th>Tanggal</th>
                        <th>status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM tb_order";
                    $result = $conn->query($sql);
                    $no = 1;
                    while ($d=$result->fetch_array()) {
                        ?>
                        
                        <tr>
                            <td><?php echo $no++?></td>
                            <td><?php echo $d['order_meja'] ?></td>
                            <td><?php echo $d['order_tanggal'] ?></td>
                            <td><?php echo $d['order_status'] ?></td>
                            <td>
                                <a href="orderEdit.php?id=<?php echo $d['order_id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                                <a href="action/orderDelete.php?id=<?php echo $d['order_id'] ?>" onclick="return confirm('Hapus?');" class="btn btn-sm btn-danger">Hapus</a>
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