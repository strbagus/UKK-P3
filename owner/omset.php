<?php include 'header.php' ?>
<div class="container bg-light rounded p-4">
    <h3>Omset</h3>
    <hr>
    
    <?php
    if(isset($_GET['filter'])){
        ?>
        <div class="d-flex col-md-3 justify-content-evenly">
            <a href="omset.php"><div class="btn btn-sm btn-info text-white">All time</div></a>
            <div class="btn btn-sm btn-info text-white disabled">Filter Tanggal</div>
        </div>
        <h5>Omset Tanggal</h5>
        <form method="post">
            <div class="d-flex">
                <div class="form-group">
                    <label for="">Dari</label>
                    <input type="date" name="tgldari" required="required" class="form-control mx-1">
                </div>
                <div class="form-group">
                    <label for="">Sampai</label>
                    <input type="date" name="tglsampai" required="required" class="form-control mx-1">
                </div>
                <div class="form-group">
                    <label for=""></label>
                    <input type="submit" name="filter" value="Filter" class="form-control btn btn-primary mx-1">
                </div>
            </div>
        </form>
        <br>
        <?php
            if (isset($_POST['filter'])) {
                $tgldari = $_POST['tgldari'];
                $tglsampai =$_POST['tglsampai'];

                ?>
                <div class="col-md-10 mx-auto">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Total Transaksi</th>
                            <th>Transaksi Selesai</th>
                            <th>Omset</th>
                        </tr>
                        <?php
                        $sqlrow = "SELECT * FROM tb_transaksi WHERE transaksi_tanggal >= '$tgldari' AND transaksi_tanggal <= '$tglsampai'";
                        $resultrow = $conn->query($sqlrow);
                        $row = $resultrow->num_rows;

                        $sql = "SELECT 
                                COUNT(transaksi_id) AS jumlah, SUM(transaksi_total) AS trantotal 
                                FROM 
                                tb_transaksi 
                                WHERE 
                                transaksi_status='Dibayar'
                                AND 
                                transaksi_tanggal >= '$tgldari' AND transaksi_tanggal <= '$tglsampai'";
                        $result = $conn->query($sql);
                        $d = $result->fetch_array();

                        ?>
                        <tr>
                            <td><?php echo $row ?></td>
                            <td><?php echo $d['jumlah'] ?></td>
                            <td><?php echo "Rp ".number_format($d['trantotal']) ?></td>
                        </tr>
                    </table>
                    <span class="text-secondary fst-italic">note: Transaksi yang masih bejalan/belum selesai tidak masuk ke perhitugan omset. </span>
                </div>
                <?php
            }
    }else{
        ?>
        <div class="d-flex col-md-3 justify-content-evenly">
            <div class="btn btn-info btn-sm text-white disabled">All time</div>
            <a href="omset.php?filter=true"><div class="btn btn-info btn-sm text-white">Filter Tanggal</div></a>
        </div>
        <h5>Omset Alltime</h5>
        <div class="col-md-10 mx-auto">
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Total Transaksi</th>
                    <th>Transaksi Selesai</th>
                    <th>Omset</th>
                </tr>
                <?php
                $sqlrow = "SELECT * FROM tb_transaksi";
                $resultrow = $conn->query($sqlrow);
                $row = $resultrow->num_rows;
    
                $sql = "SELECT COUNT(transaksi_id) AS jumlah, SUM(transaksi_total) AS trantotal FROM tb_transaksi WHERE transaksi_status='Dibayar'";
                $result = $conn->query($sql);
                $d = $result->fetch_array();
    
                ?>
                <tr>
                    <td><?php echo $row ?></td>
                    <td><?php echo $d['jumlah'] ?></td>
                    <td><?php echo "Rp ".number_format($d['trantotal']) ?></td>
                </tr>
            </table>
            <span class="text-secondary fst-italic">note: Transaksi yang masih bejalan/belum selesai tidak masuk ke perhitugan omset. </span>
        </div>
        <?php
    }
    ?>
</div>
<?php include 'footer.php' ?>