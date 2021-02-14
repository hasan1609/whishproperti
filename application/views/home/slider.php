<!-- ======= Intro Section ======= -->

<div class="intro intro-carousel">
    <div id="carousel" class="owl-carousel owl-theme">
    <?php foreach ($banner as $bannerku) : ?>

      <div class="carousel-item-a intro-item bg-image" style="background-image: url(gambar/web/<?php echo $bannerku->gambar ?>)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top"><?php echo $bannerku->kota ?>, Indonesia
                      <br> <?php echo $bannerku->kode_pos ?>
                    </p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b"><td><?php echo $bannerku->nama ?></td></span> 
                      <br><?php echo $bannerku->kota ?>
                    </h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a"><?php echo $bannerku->status ?> | Rp. <?php echo $bannerku->harga ?></span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>

    </div>
  </div><!-- End Intro Section -->
