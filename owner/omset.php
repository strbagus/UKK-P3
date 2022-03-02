<?php include 'header.php' ?>
<div class="container bg-light rounded p-4">
    <h3>Omset</h3>
    <hr>
    <h5>Omset Alltime</h5>
    <div class="col-md-10 mx-auto">
        <table class="table table-bordered table-striped">
            <tr>
                <th>Total Transaksi</th>
                <th>Transaksi Selesai</th>
                <th>Omset</th>
            </tr>
            <?php
            $sql2 = "SELECT COUNT(transaksi_total) AS jumlah FROM tb_transaksi";
            $result2 = $conn->query($sql2);
            $d2 = $result2->fetch_array();

            $sql = "SELECT *,COUNT(transaksi_total) AS jumlah, SUM(transaksi_total) AS trantotal FROM tb_transaksi WHERE transaksi_status='Dibayar'";
            $result = $conn->query($sql);
            while($d = $result->fetch_array()){
                ?>
                <tr>
                    <td><?php echo $d2['jumlah'] ?></td>
                    <td><?php echo $d['jumlah'] ?></td>
                    <td><?php echo "Rp.".number_format($d['trantotal']) ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
        <span class="text-secondary fst-italic">note: Transaksi yang masih bejalan/belum selesai tidak masuk ke perhitugan omset. </span>
    </div>
</div>
<?php include 'footer.php' ?>