<div class="container mt-5">
    <div class="row">
        <div class="col">
        <h1 class="display-4 d-inline">List Product</h1>
        <a href="<?= base_url('admin/create') ?>" class="btn btn-success btn-sm mt-4  float-right">tambah data</a>
        <table class="table table-hover table-responsive mt-4" >
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Harga</th>
                <th scope="col">Interior Produk</th>
                <th scope="col">Luas Produk</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Sertifikat</th>
                <th scope="col">Gambar</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
             <?php
                $i = 1;
                foreach ($products as $product): ?>
                <tr>
                <th scope="row"><?= $i++; ?></th>
                <td><?= $product['nama_produk'] ?></td>
                <td><?= $product['harga_produk'] ?></td>
                <td><?= $product['interior_produk'] ?></td>
                <td><?= $product['luas_produk'] ?></td>
                <td><?= $product['deskripsi_produk'] ?></td>
                <td><?= $product['sertifikat'] ?></td>
                <td><img src="<?= base_url('assets/images/') ?><?= $product['gambar'] ?>" class="img-thumbnail w-75"></td>
                <td>
                    <a href="<?= base_url('admin/edit/') ?><?= $product['id_produk'] ?>" class="btn btn-sm btn-info w-100">update</a>
                    <a href="<?= base_url('admin/delete/') ?><?= $product['id_produk'] ?>"  class="btn btn-sm btn-danger w-100" onclick="return confirm('apakah anda yakin')">Hapus</a>
                </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>            


        </div>
    </div>
</div>