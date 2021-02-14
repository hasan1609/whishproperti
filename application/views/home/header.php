<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>WISH Properti</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('assetss/'); ?>img/favicon.png" rel="icon">
  <link href="<?= base_url('assetss/'); ?>img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('assetss/'); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('assetss/'); ?>vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?= base_url('assetss/'); ?>vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?= base_url('assetss/'); ?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?= base_url('assetss/'); ?>vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url('assetss/'); ?>css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: EstateAgency - v2.2.1
  * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Property Search Section ======= -->
  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Cari Rumah</h3>
    </div>
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a">
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label for="Type">Kata Kunci</label>
              <input type="text" class="form-control form-control-lg form-control-a" placeholder="Kata Kunci">
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="Type">Status</label>
              <select class="form-control form-control-lg form-control-a" id="Type">
                <option>Semua Type</option>
                <option>Dijual</option>
                <option>Disewakan</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="city">Kota</label>
              <select class="form-control form-control-lg form-control-a" id="city">
                <option>Semua kota</option>
                <option>Sidoarjo</option>
                <option>Surabaya</option>
                <option>Malang</option>
                <option>Pasuruan</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="bedrooms">Kamar Tidur</label>
              <select class="form-control form-control-lg form-control-a" id="bedrooms">
                <option>Any</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="garages">Garasi</label>
              <select class="form-control form-control-lg form-control-a" id="garages">
                <option>Any</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="bathrooms">Kamar Mandi</label>
              <select class="form-control form-control-lg form-control-a" id="bathrooms">
                <option>Any</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="price">Harga Minimal</label>
              <select class="form-control form-control-lg form-control-a" id="price">
                <option>Semua</option>
                <option>Dibawah 500 Juta</option>
                <option>Dibawah 1 Miliar</option>
                <option>Dibawah 300 Juta</option>
              </select>
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-b">Cari Properti</button>
          </div>
        </div>
      </form>
    </div>
  </div><!-- End Property Search Section -->>

  <!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.html">WISH<span class="color-b">&nbsp; Properti</span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="home">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about">Tentang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="property">Properti</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="kontak">Hubungi Kami</a>
          </li>
        </ul>
      </div>
      <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
    </div>
  </nav><!-- End Header/Navbar -->