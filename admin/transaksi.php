<?php include 'header.php' ?>
<div class="container">
    <div class="bg-light rounded py-3 px-4">
        <h3>Data Transaksi</h3>
        <hr>
        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="table-datatable">
                <thead>
                    <tr class="text-center">
                        <th width="1%">No</th>
                        <th>No Meja</th>
                        <th>Tanggal</th>
                        <th>Pelanggan</th>
                        <th>Subtotal</th>
                        <th>Status Bayar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM tb_transaksi JOIN tb_user ON transaksi_pelanggan = user_id";
                    $result = $conn->query($sql);
                    $no = 1;
                    while ($d=$result->fetch_array()) {
                        $idtransaksi = $d['transaksi_id'];
                        $sql2 = "SELECT SUM(order_sub_total) as transaksi_total FROM tb_order WHERE order_transaksi=$idtransaksi";
                        $result2 = $conn->query($sql2);
                        $d2 = $result2->fetch_array();
                        ?>
                        
                        <tr>
                            <td><?php echo $no++?></td>
                            <td><?php echo $d['transaksi_meja'] ?></td>
                            <td><?php echo $d['transaksi_tanggal'] ?></td>
                            <td><?php echo $d['user_nama'] ?></td>
                            <td><?php echo "Rp.".number_format($d2['transaksi_total']) ?></td>
                            <td><?php echo $d['transaksi_status'] ?></td>
                            <td class="d-flex justify-content-evenly">
                                <?php
                                    if($d['transaksi_status']=="Belum"){
                                        ?>
                                        <a href="action/transaksiUpdate.php?id=<?php echo $d['transaksi_id']."&meja=".$d['transaksi_meja'] ?>" onclick="return confirm('Ubah Menjadi Dibayar?');" class="btn btn-sm btn-success">Lunas</a>
                                        <?php
                                    }
                                ?>
                                <a href="action/transaksiDelete.php?id=<?php echo $d['transaksi_id']?>" onclick="return confirm('Hapus?');" class="btn btn-sm btn-danger">Hapus</a>

                            </td>
                        </tr>
                        
                        <?php
                        $trantotal = $d2['transaksi_total'];
                        $sql3 = "UPDATE tb_transaksi SET transaksi_total = '$trantotal' WHERE transaksi_id=$idtransaksi";
                        $result3 = $conn->query($sql3);
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
include 'footer.php' ?>