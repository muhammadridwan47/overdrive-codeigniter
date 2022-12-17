    <!-- slider -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?= base_url('assets/') ?>images/item-a-1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="<?= base_url('assets/') ?>images/item-a-2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="<?= base_url('assets/') ?>images/item-a-3.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </button>
    </div>

    <div class="container">
        <!-- Deskripsi -->
        <div class="description">
          <div class="row mt-5 mb-3">
              <div class="col-md-12 text-center">
                  <h1>Deskripsi</h1>
              </div>
          </div>
          <div class="row text-center">
              <div class="col-md-6">
                  <p class="desc">Selamat karena Anda telah berkunjung ke halaman yang tepat untuk Bisnis Properti Anda. Kunjungan Anda di halaman ini akan menjadi Langkah Besar dalam perjalanan bisnis properti anda.</p>
              </div>
              <div class="col-md-6">
                  <p class="desc">Kami siap membantu Anda menciptakan Winning Marketing Strategy yang Terbukti Efektif dan Efisien! Kami berhasil membantu lebih dari 145 Proyek Perumahan di Area Jabodetabek! Dan kini, proyek Andalah yang berikutnya!</p>
              </div>
          </div>
      </div>
        <!-- Product -->
        <div class="row mt-5 mb-3">
            <div class="col-md-12 text-center">
                <h1>Produk</h1>
            </div>
        </div>
        <!-- Searching -->
        <center>
        <form action="<?= base_url('product') ?>" method="GET">
          <div class="input-group mb-3  w-50 mb-4">
              <input type="text" required class="form-control" placeholder="Search product..." name="search" aria-label="Recipient's username" aria-describedby="button-addon2">
              <div class="input-group-append">
                  <button class="btn btn-success" type="submit" id="button-addon2">Search</button>
              </div>
          </div>
        </form>
        </center>
        <!-- Card -->
        <div class="row">
           <?php foreach( $products as $product ) : ?>
              <div class="col-lg-4">
                  <a href="<?= base_url('product') ?>" class="card-link text-dark" >
                    <div class="card"  >
                        <img src="<?= base_url('assets/') ?>images/<?= $product['gambar']  ?>" class="card-img-top">
                        <div class="card-body">
                          <h5 class="card-title"><?= $product['nama_produk']  ?></h5>
                          <p class="card-text"><?= $product['deskripsi_produk']  ?> </p>
                        </div>
                    </div>
                </a>
              </div>
           <?php endforeach; ?>
        </div>

        <!-- Tombol -->
        <div class="row mt-5 mb-3">
          <div class="col-md-12 text-center">
            <a href="<?= base_url('product') ?>" class="btn btn-success btn-lg">Selengkapnya</a>
          </div>
        </div>
    </div>