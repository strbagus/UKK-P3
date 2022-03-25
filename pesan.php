<?php
    include 'header.php';
    if(!$_SESSION['status']=="pelanggan_login"){
        header("location: login.php?alert=belum_login");
    }
    // $_SESSION["nomeja"];
    $date=getdate(date("U"));
    $tanggal = "$date[year]-$date[mon]-$date[mday]";
    $uid = $_SESSION['uid'];

    if(isset($_POST['Pesan'])){
        $sql5 = $conn->query("SELECT * FROM tb_transaksi ORDER BY transaksi_id DESC LIMIT 1");
        $d5 = $sql5->fetch_array();
        $_SESSION['notransaksi'] = $d5["transaksi_id"] + 1;
        $nomeja = $_POST['nomeja'];
        
        $conn->query("UPDATE tb_meja SET meja_status='Dipakai' WHERE meja_no=$nomeja");
        $_SESSION["nomeja"] = $nomeja;
        $notransaksi = $_SESSION['notransaksi'];
        $sql3 = "INSERT INTO 
                tb_transaksi 
                VALUES 
                ('$notransaksi','$nomeja','$tanggal','0','$uid','Belum')";
        $result3 = $conn->query($sql3);
        
    }
    if(isset($_POST["TambahMenu"])){
        $menu = $_POST['menu'];
        $jumlah = $_POST['jumlah'];
        $keterangan = $_POST['keterangan'];
        $notransaksi = $_SESSION['notransaksi'];

        $sql6 = "INSERT INTO tb_order
                (order_transaksi, order_menu, order_jumlah, order_keterangan)
                VALUES
                ('$notransaksi', '$menu','$jumlah','$keterangan' )";
        $result6 = $conn->query($sql6);
    }
    //ACTION
    
    if(isset($_GET['minus'])){
        $id = $_GET['id'];
        $sql8 = "UPDATE tb_order SET order_jumlah = order_jumlah-1 WHERE order_id=$id";
        $result8 = $conn->query($sql8);
    }
    if(isset($_GET['plus'])){
        $id = $_GET['id'];
        $sql9 = "UPDATE tb_order SET order_jumlah = order_jumlah+1 WHERE order_id=$id";
        $result9 = $conn->query($sql9);
    }
    if(isset($_GET['delete'])){
        $id = $_GET['id'];
        $sql10 = "DELETE FROM tb_order WHERE order_id=$id";
        $result10 = $conn->query($sql10);
    }

    if(isset($_GET['idt'])){
        header("location: pesan.php");
    }
?>

    <div class="col-md-8 mx-auto bg-light rounded p-4">
        <h3>Form Pesanan</h3>
        <hr>
        <?php
            if(empty($_SESSION["nomeja"])){
            ?>
            <div class="col-md-5 mx-auto">
                <form method="post">
                <label for="">No Meja:</label>
                    <select name="nomeja" class="form-control" required>
                        <option selected disabled class="text-center">-- Pilih Nomor Meja --</option>
                        <?php
                            $sql2 = "SELECT * FROM tb_meja WHERE meja_status='Kosong'";
                            $result2 = $conn->query($sql2);
                            while($d2 = $result2->fetch_array()){
                                ?>
                                    <option><?php echo $d2['meja_no']; ?></option>
                                <?php
                            }
                        ?>
                    </select>
                    <div class="form-group">
                        <label for="">Atas Nama:</label>
                        <input type="text" value="<?php echo $_SESSION['nama'] ?>" class="form-control" disabled>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                        <input type="submit" value="Pesan" name="Pesan" class="btn btn-info mt-3">
                    </div>
                </form>
            </div>
            
             <?php
            }else{
                $notransaksi = $_SESSION['notransaksi'];
                $sqltrans = "SELECT transaksi_status FROM tb_transaksi WHERE transaksi_id=$notransaksi";
                $resulttrans = $conn->query($sqltrans);
                $dtrans = $resulttrans->fetch_array();
                if($dtrans['transaksi_status']=="Belum"){
                    ?>
                    <form method="post">
                        
                        <h5>Pilih Menu</h5>
                        <div class="form-group">
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-8">
                                    <select name="menu" class="form-control" required="required">
                                        <option selected disabled class="text-center">-- Pilih Menu --</option>
                                        <option disabled class="text-center">-- Makanan --</option>
                                        <?php
                                            $sql1 = "SELECT * FROM tb_menu WHERE menu_tipe='Makanan' AND menu_status='Tersedia'";
                                            $result1 = $conn->query($sql1);
                                            while($d1 = $result1->fetch_array()){
                                                ?>
                                                    <option value="<?php echo $d1['menu_id']; ?>"><?php echo $d1['menu_nama']; ?></option>
                                                <?php
                                            }
                                        ?>
                                        <option disabled class="text-center">-- Minuman --</option>
                                        <?php
                                            $sql4 = "SELECT * FROM tb_menu WHERE menu_tipe='Minuman' AND menu_status='Tersedia'";
                                            $result4 = $conn->query($sql4);
                                            while($d4 = $result4->fetch_array()){
                                                ?>
                                                    <option value="<?php echo $d4['menu_id']; ?>"><?php echo $d4['menu_nama']; ?></option>
                                                <?php
                                            }
                                        ?>
                                        
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <input type="number" name="jumlah" placeholder="Jumlah" class="text-center form-control" required="required">
                                </div>
                                
                            </div>
                            <div class="row d-flex justify-content-center mt-3">
                                <div class="col-md-8">
                                    <textarea name="keterangan" class="form-control" placeholder="Tulis Keterangan Disini (OPSIONAL)"></textarea>
                                </div>
                                <div class="col-md-2">
                                    <input type="submit" name="TambahMenu" value="Tambah" class="text-center btn btn-info text-white">
                                </div>
                            </div>
                        </div>
                    </form>
                    <br><hr>
                    <?php
                }

                ?>  
                    
                    
                    <h5>Menu Dipilih</h5>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr class="bg-dark text-white text-center">
                                <th width="1%">No</th>
                                <th width="40%">Menu</th>
                                <th width="4%">Jumlah</th>
                                <th width="20%">Harga</th>
                                <th width="20%">Total</th>
                                <th width="15%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql7 = "SELECT 
                                *
                                FROM 
                                tb_order INNER JOIN tb_menu 
                                ON 
                                tb_order.order_menu=tb_menu.menu_id 
                                WHERE 
                                tb_order.order_transaksi=$notransaksi";
                                $result7 = $conn->query($sql7);
                                $no = 1;
                                while($d7=$result7->fetch_array()){

                                    $total = $d7['menu_harga']*$d7['order_jumlah'];
                                    if($d7['order_status']=="dipesan"){
                                        $oid = $d7['order_id'];
                                        $sqltotal = "UPDATE tb_order SET order_sub_total=$total WHERE order_id=$oid";
                                        $totalharga = $conn->query($sqltotal);
                                    }
                                    ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td>
                                            <?php 
                                            echo $d7['menu_nama'];
                                            if(!empty($d7['order_keterangan'])){
                                                echo "<br> <span class='fst-italic text-secondary'> Catatan : ".$d7['order_keterangan']."</span>";
                                            }
                                            ?>
                                        </td>
                                        <td><?php echo $d7['order_jumlah']?></td>
                                        <td><?php echo "Rp ".number_format($d7['menu_harga']) ?></td>
                                        <td><?php 
                                            
                                            echo "Rp ".number_format($total);
                                            ?>
                                        </td>
                                        <td class="text-center">
                                            <?php
                                                if($d7['order_status']=="dipilih"){
                                                    ?>
                                                    <div class="d-flex justify-content-evenly">
                                                        <a href="pesan.php?minus=true&id=<?php echo $d7['order_id']?>" class="text-warning"><i class="fas fa-minus-square"></i></a>
                                                        <a href="pesan.php?plus=true&id=<?php echo $d7['order_id']?>" class="text-success"><i class="fas fa-plus-square"></i></a>
                                                        <a href="pesan.php?delete=true&id=<?php echo $d7['order_id']?>" class="text-danger"><i class="fas fa-trash-alt"></i></a>

                                                    </div>
                                                    <?php
                                                }else{
                                                    echo "dipesan";
                                                }
                                            ?>
                                        </td>
                                    </tr>
                                    
                                    <?php
                                }
                            ?>
                        </tbody>
                    </table>
                        
                        <?php
                        if(isset($_GET['idt'])){
                            $idt = $_GET['idt'];
                            $sqlpesan = "UPDATE tb_order SET order_status='dipesan' WHERE order_transaksi=$idt";
                            $conn->query($sqlpesan);
                        }
                        if($dtrans['transaksi_status']=="Belum"){
                        ?>
                            <div class="d-flex justify-content-center">
                                <a href="pesan.php?idt=<?= $notransaksi ?>"><div class="btn btn-info text-white">Pesan</div></a>
                            </div>
                        <?php
                        }else{
                            ?>
                            <div class="d-flex justify-content-center">
                                Transaksi Selesai. Terima Kasih 
                            </div>
                            <?php
                        }
            }
        ?>
        
    </div>
    <?php 
  
include 'footer.php' ?>