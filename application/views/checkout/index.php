<div class="container mt-5">
    <div class="row">
        <div class="col">
        <h1 class="display-4 d-inline">List Checkout</h1>
           <!-- Searching -->
        <form action="<?= base_url('checkout') ?>" method="GET">
          <div class="input-group mt-2 mb-3 w-25">
              <input type="text" class="form-control" placeholder="Search list checkout..." name="search" aria-label="Recipient's username" aria-describedby="button-addon2">
              <div class="input-group-append">
                  <button class="btn btn-success" type="submit" id="button-addon2">Search</button>
              </div>
          </div>
        </form>
        <table class="table table-hover" >
            <thead>
                <tr>
                    <th scope="col">No</th>
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