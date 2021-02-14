
  <main id="main">

    <!-- ======= Services Section ======= -->
    <section class="section-services section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Layanan Kami</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <span class="fa fa-gamepad"></span>
                </div>
                <div class="card-title-c align-self-center">
                  <h2 class="title-c">Kontak</h2>
                </div>
              </div>
              <div class="card-body-c">
                <p class="content-c">
                  Info kontak property
                </p>
              </div>
              <div class="card-footer-c">
                <a href="kontak" class="link-c link-icon">tekan menuju ke kontak
                  <span class="ion-ios-arrow-forward"></span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <span class="fa fa-usd"></span>
                </div>
                <div class="card-title-c align-self-center">
                  <h2 class="title-c">Sewa </h2>
                </div>
              </div>
              <div class="card-body-c">
                <p class="content-c">
                  Sewa Rumah
                </p>
              </div>
              <div class="card-footer-c">
                <a href="sewa" class="link-c link-icon">tekan untuk sewa rumah
                  <span class="ion-ios-arrow-forward"></span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <span class="fa fa-home"></span>
                </div>
                <div class="card-title-c align-self-center">
                  <h2 class="title-c">Jual Rumah</h2>
                </div>
              </div>
              <div class="card-body-c">
                <p class="content-c">
                  Jual Rumah
                </p>
              </div>
              <div class="card-footer-c">
                <a href="dijual" class="link-c link-icon">tekan untuk beli rumah
                  <span class="ion-ios-arrow-forward"></span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Latest Properties Section ======= -->
    <section class="section-property section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Properti Terbaru</h2>
              </div>
              <div class="title-link">
                <a href="property-grid.html">Semua Properti
                  <span class="ion-ios-arrow-forward"></span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div id="property-carousel" class="owl-carousel owl-theme">
        <?php foreach ($produk as $produks) : ?>
          <div class="carousel-item-b">
            <div class="card-box-a card-shadow">
              <div class="img-box-a">

                <img src="gambar/produk/<?php echo $produks->gambar ?>" alt="" class="img-a img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-overlay-a-content">
                  <div class="card-header-a">
                    <h2 class="card-title-a">
                      <a href="Properti_detail"><?php echo $produks->nama ?>
                    </h2>
                  </div>
                  <div class="card-body-a">
                    <div class="price-box d-flex">
                      <span class="price-a"><?php echo $produks->status ?> | Rp. <?php echo $produks->harga ?></span>
                    </div>
                    <a href="#" class="link-a">Click here to view
                      <span class="ion-ios-arrow-forward"></span>
                    </a>
                  </div>
                  <div class="card-footer-a">
                    <ul class="card-info d-flex justify-content-around">
                      <li>
                        <h4 class="card-info-title">Luas</h4>
                        <span><?php echo $produks->luas?>
                          <sup>2</sup>
                        </span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Kamar Tidur</h4>
                        <span> <center><?php echo $produks->kamar_tidur ?></center></span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Kamar Mandi</h4>
                        <span><center><?php echo $produks->kamar_mandi ?></center></span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Garasi</h4>
                        <span><center> <?php echo $produks->garasi ?></center></span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section><!-- End Latest Properties Section -->

    <!-- ======= Testimonials Section ======= -->
    <section class="section-testimonials section-t8 nav-arrow-a">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Testimoni Pembeli</h2>
              </div>
            </div>
          </div>
        </div>
        <div id="testimonial-carousel" class="owl-carousel owl-arrow">
        <?php foreach ($testimoni as $testimonis) : ?>
          <div class="carousel-item-a">
            <div class="testimonials-box">
              <div class="row">
                <div class="col-sm-12 col-md-6">
                  <div class="testimonial-img">
                    <img src="gambar/web/<?php echo $testimonis->gambar ?>" alt="" class="img-fluid">
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="testimonial-ico">
                    <span class="ion-ios-quote"></span>
                  </div>
                  <div class="testimonials-content">
                    <p class="testimonial-text">
                    <?php echo $testimonis->keterangan ?>
                    </p>
                  </div>
                  <div class="testimonial-author-box">
                    <img src="assets/img/mini-testimonial-1.jpg" alt="" class="testimonial-avatar">
                    <h5 class="testimonial-author"><?php echo $testimonis->nama ?></h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->

