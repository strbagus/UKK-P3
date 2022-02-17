<?php include 'header.php' ?>]
<div class="container">
    <div class="bg-light py-3 px-4 rounded">
        <h3>Data Meja</h3>
        <hr>
        <div class="d-flex justify-content-end">
            <a href="action/mejaInsert" class="btn btn-primary m-2">Tambah</a>
            <a href="action/mejaDelete" onclick="return confirm('Hapus?');" class="btn btn-danger m-2">Delete</a>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered" id="table-datatable">
                <thead>
                    <tr>
                        <th>No Meja</th>
                        <th>status</th>
                        <th>Aksi</th>
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
                            <td>
                                NaN
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