<?php include 'header.php' ;?>
<div class="container">
    <div class="col-md-5 mx-auto bg-light rounded py-3 px-4">
        <h3>Tambah Menu</h3>
        <hr>
        <form method="post" action="action/menuUpdate.php">
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <div class="form-group">
                <label for="">Nama Menu</label>
                <input type="text" name="menu" value="<?php echo $d['masakan_nama'] ?>" class="form-control" required="required">
            </div>
            <div class="form-group">
                <label for="">Harga</label>
                <input type="number" name="harga" value="<?php echo $d['masakan_harga'] ?>" class="form-control" required="required">
            </div>
            <div class="form-group">
                <label for="">Tipe</label>
                <select name="tipe" class="form-control" required="required">
                    <option selected disabled>--Pilih Tipe--</option>
                    <option value="Minuman">Minuman</option>
                    <option value="Makanan">Makanan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Status</label>
                <select name="status" class="form-control" required="required">
                    <option selected disabled>--Pilih Status--</option>
                    <option value="Tersedia">Tersedia</option>
                    <option value="Habis">Habis</option>
                </select>
            </div>
            <div class="form-group d-flex justify-content-center">
                <input type="submit" value="Simpan" class="m-2 btn btn-primary">
            </div>
        </form>
    </div>
</div>

<?php include 'footer.php' ?>
