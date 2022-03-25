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
                        <th>Transaksi ID</th>
                        <th>Pelanggan</th>
                        <th>Total</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM tb_batal_log JOIN tb_user ON batal_pelanggan = user_id";
                    $result = $conn->query($sql);      
                    $no = 1;
                    while ($d=$result->fetch_array()) {
                        ?>
                        
                        <tr>
                            <td><?php echo $no++?></td>
                            <td><?php echo $d['batal_transaksi_id'] ?></td>
                            <td><?php echo $d['batal_pelanggan'] ?></td>
                            <td><?php echo "Rp.".number_format($d['batal_total']) ?></td>
                            <td><?php echo $d['batal_tanggal'] ?></td>
                           
                        </tr>
                        
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
include 'footer.php' ?>