<div class="row justify-content-center m-5">
    <div class="col-6">
    <?= form_open_multipart('admin/create'); ?>
    <div class="form-group">
        <label for="productNameId">Nama Produk</label>
        <input type="text" value="<?= set_value('productName'); ?>" name="productName" class="form-control" id="productNameId" placeholder="Masukkan nama produk..">
        <?= form_error('productName','<small class="text-danger">','</small>'); ?>
    </div>
    <div class="form-group">
        <label for="descriptionId">Deskripsi</label>
        <textarea class="form-control" name="description" id="descriptionId" rows="3" placeholder="Masukkan deskripsi produk.."><?= set_value('description'); ?></textarea>
        <?= form_error('description','<small class="text-danger">','</small>'); ?>
    </div>
    <div class="form-group">
        <label for="productPrice">Harga</label>
        <input type="text" value="<?= set_value('productPrice'); ?>" name="productPrice" class="form-control" id="productPrice" placeholder="Masukkan harga produk..">
        <?= form_error('productPrice','<small class="text-danger">','</small>'); ?>
    </div>
    <div class="form-group">
        <label for="interiorId">Interior</label>
        <input type="text" value="<?= set_value('interior'); ?>" name="interior" class="form-control" id="interiorId" placeholder="Masukkan interior produk..">
        <?= form_error('interior','<small class="text-danger">','</small>'); ?>
    </div>
    <div class="form-group">
        <label for="productAreatId">Luas</label>
        <input type="text" value="<?= set_value('productArea'); ?>" name="productArea" class="form-control" id="productAreatId" placeholder="Masukkan luas produk..">
        <?= form_error('productArea','<small class="text-danger">','</small>'); ?>
    </div>
    <div class="form-group">
        <label for="productSertificateId">Sertifikat</label>
        <input type="text" value="<?= set_value('productSertificate'); ?>" name="productSertificate" class="form-control" id="productSertificateId" placeholder="Masukkan sertifikat produk..">
        <?= form_error('productSertificate','<small class="text-danger">','</small>'); ?>
    </div>
    <div class="form-group">
    <label for="productAreatId">Gambar</label>
    <div class="custom-file">
        <input type="file" class="custom-file-input" id="image" name="image" required>
        <label class="custom-file-label" for="image">Choose file</label>
        <?= form_error('image','<small class="text-danger">','</small>'); ?>
    </div>
    </div>
    <div class="row justify-content-center mb-5 mt-5">
        <button type="submit" class="btn btn-primary">Tambah Produk</button>
    </div>
    </form>
    </div>
</div>