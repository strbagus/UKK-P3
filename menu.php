<?php include 'header.php' ?>

<div class="container bg-light p-4 rounded">
    <h3>Daftar Menu Makanan & Minuman</h3>
    <hr>
    <table class="table table-bordered table-striped">
        <tr>
            <th colspan="5" class="text-center">MAKANAN</th>
        </tr>
        <tr class="text-center">
            <th width="1%">No</th>
            <th>Menu</th>
            <th>Status</th>
            <th>Harga</th>
        </tr>   
        <?php
            $no=1;
            $sqlmakan = "SELECT * FROM tb_menu WHERE menu_tipe = 'Makanan'";
            $resultmakan = $conn->query($sqlmakan); 
            while($dmakan = $resultmakan->fetch_array()){
                ?>
                <tr>
                    <td><?php echo $no++?></td>
                    <td><?php echo $dmakan['menu_nama'] ?></td>
                    <td><?php echo $dmakan['menu_status'] ?></td>
                    <td><?php echo "Rp.".number_format($dmakan['menu_harga']) ?></td>
                </tr>
                <?php
            }
        ?>
        <tr>
            <th colspan="5" class="text-center">MIMUMAN</th>
        </tr>
        <tr class="text-center">
            <th width="1%">No</th>
            <th>Menu</th>
            <th>Status</th>
            <th>Harga</th>
        </tr>
    
        <?php
            $no=1;
            $sqlminum = "SELECT * FROM tb_menu WHERE menu_tipe = 'Minuman'";
            $resultminum = $conn->query($sqlminum); 
            while($dminum = $resultminum->fetch_array()){
                ?>
                <tr>
                    <td><?php echo $no++?></td>
                    <td><?php echo $dminum['menu_nama'] ?></td>
                    <td><?php echo $dminum['menu_status'] ?></td>
                    <td><?php echo "Rp.".number_format($dminum['menu_harga']) ?></td>
                </tr>
                <?php
            }
        ?>
    </table>
   
    <div class="d-flex justify-content-center">
        <a href="pesan.php" class="btn btn-info text-white">Pesan</a>
    </div>
</div>    

<?php include 'footer.php' ?>