<div class="container mt-5">
    <div class="row">
        <div class="col">
        <h1 class="display-4 d-inline">List Checkout</h1>
        <table class="table table-hover mt-4" >
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Jumlah click</th>
                </tr>
            </thead>
            <tbody>
             <?php
                $i = 1;
                foreach ($products as $product): ?>
                <tr>
                    <th scope="row"><?= $i++; ?></th>
                    <td><?= $product['nama_produk'] ?></td>
                    <td><?= $product['click'] ?></td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>            
        </div>
    </div>
</div>