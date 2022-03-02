<?php include 'header.php' ?>]
<div class="container">
    <div class="bg-light py-3 px-4 rounded">
        <h3>Data Meja</h3>
        <hr>
        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered" id="table-datatable">
                <thead>
                    <tr>
                        <th>No Meja</th>
                        <th>status</th>
                        <th width="15%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM tb_meja";
                    $result = $conn->query($sql);
                    while ($d = $result->fetch_array()) {
                        ?>
                        <tr>
                            <td><?php echo $d['meja_no']?></td>
                            <td><?php echo $d['meja_status'] ?></td>
                            <td class="d-flex justify-content-center">
                                <a href="action/mejaUpdate.php?id=<?php echo $d['meja_no']."&status=".$d['meja_status'] ?>">
                                    <div class="btn btn-info btn-sm text-white">Ubah Status</div>
                                </a>
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