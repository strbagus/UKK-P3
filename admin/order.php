<?php include 'header.php' ?>

<div class="container">
    <div class="bg-light rounded py-3 px-4">
        <h3>Data Order</h3>
        <hr>
        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered" id="table-datatable">
                <thead>
                    <tr class="text-center">
                        <th width="1%">No</th>
                        <th width="1%">Transaksi</th>
                        <th>Menu</th>
                        <th width="1%">Jumlah</th>
                        <th>Keterangan</th>
                        <th width="10%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM tb_order INNER JOIN tb_menu ON order_menu=menu_id";
                    $result = $conn->query($sql);
                    $no = 1;
                    while ($d=$result->fetch_array()) {
                        ?>
                        
                        <tr>
                            <td><?php echo $no++?></td>
                            <td><?php echo $d['order_transaksi'] ?></td>
                            <td><?php echo $d['menu_nama'] ?></td>
                            <td><?php echo $d['order_jumlah'] ?></td>
                            <td><?php echo $d['order_keterangan'] ?></td>
                            <td class="d-flex justify-content-center">
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