<div class="container">
        
         <!-- Product -->
         <div class="row mt-5 mb-3">
            <div class="col-md-12 text-center">
                <h1 class="hh">Produk</h1>
            </div>
        </div>
        <!-- Searching -->
        <center>
        <form action="<?= base_url('product') ?>" method="GET">
          <div class="input-group mb-3  w-50 mb-4">
              <input type="text" class="form-control" placeholder="Search product..." name="search" aria-label="Recipient's username" aria-describedby="button-addon2">
              <div class="input-group-append">
                  <button class="btn btn-success" type="submit" id="button-addon2">Search</button>
              </div>
          </div>
        </form>
        </center>
        <!-- Card -->
        <div class="row">
           <?php foreach( $products as $product ) : ?>
              <div class="col-lg-4 mb-4">
                  <a href="#" class="card-link text-dark" >
                    <div class="card" data-price="<?= $product['harga_produk']  ?>" data-id="<?= base_url('product/checkout/') ?><?= $product['id_produk']  ?>" data-wide="<?= $product['luas_produk']  ?>" data-interior="<?= $product['interior_produk']  ?>" data-sertificate="<?= $product['sertifikat']  ?>">
                        <img src="<?= base_url('assets/') ?>images/<?= $product['gambar']  ?>" class="card-img-top">
                        <div class="card-body">
                          <h5 class="card-title"><?= $product['nama_produk']  ?></h5>
                          <p class="card-text"><?= $product['deskripsi_produk']  ?></p>
                        </div>
                    </div>
                </a>
              </div> 
           <?php endforeach; ?>
        </div>

</div>