<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Donatur</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets") ?>/css/font.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets") ?>/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets") ?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets") ?>/css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets") ?>/css/style.css">
    <link rel='stylesheet' type='text/css' href="<?php echo site_url('assets/css/jasny-bootstrap.min.css');?>" />

    <style type="text/css">
     
      #background-carousel{
        position:absolute;
        width:100%;
        height:100%;
        z-index:-1;
      }
      .carousel,
      .carousel-inner {
        width:100%;
        height:100%;
        z-index:0;
        overflow:hidden;
      }
      .item {
        width:100%;
        height:100%;
        background-position:center center;
        background-size:cover;
        z-index:0;
      }
       
      #content-wrapper {
        position:absolute;
        z-index:1 !important;
        min-width:100%;
        min-height:100%;
      }
      .well {
          opacity:0.85
      }
      #lastdonate p,#lastdonate h3{
        color: #fff;
      }
    </style>
    
  </head>
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  <div class="header">
      
      <div id="background-carousel">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="item active" style="background-image:url(<?php echo site_url("assets/img/banner1.jpg") ?>)"></div>
            <div class="item" style="background-image:url(<?php echo site_url("assets/img/banner2.jpg") ?>)"></div>
            <div class="item" style="background-image:url(<?php echo site_url("assets/img/banner3.jpg") ?>)"></div>  
          </div>
        </div>
      </div>

      <div class="bg-color">
        <header id="main-header">
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#lauraMenu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Salsabila</a>
            </div>
            <div class="collapse navbar-collapse" id="lauraMenu">
              <ul class="nav navbar-nav navbar-right navbar-border">
                <li class="active"><a href="#main-header">Home</a></li>
                <li><a href="#about">Tentang Salsabila</a></li>
                <li><a href="#galeri">Galeri</a></li>
                <li><a href="#portfolio">Donasi</a></li>
                <li><a href="#contact">Kontak</a></li>
                <?php if ($this->session->userdata("loged_in")=="Y"): ?>
                <li><a href="<?php echo site_url("home/logout") ?>">Logout</a></li>
                <?php endif ?>
              </ul>
            </div>
          </div>
        </nav>
        </header>
        <div class="wrapper">
        <div class="container" style="min-height: 100vh;">
          <div class="row">
            <div class="col-md-12 wow fadeIn delay-05s">
              <div class="banner-text">
                <h2>Donasikan uang anda pada <span>Salsabila</span></h2>
                <p>Aman dan terpercaya, <br>Pasti sampai ke tangan yang membutuhkan :D</p>
              </div>
              <div id="lastdonate" class="row">
                <div class="col-sm-offset-3 col-sm-6">
                  <h3 class="text-center"><strong>Donasi Terakhir :</strong></h3>
                  <div class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <?php $i=0; foreach ($lastdonasi as $row): $i++; ?>
                        <div class="item <?php echo $i==1?'active':'' ?>"><p class="text-center"><span class="deco"><?php echo date_format(date_create($row['tanggal_donasi']),'d M Y')." - ".$row['nama_donatur']." (Rp. ".rp($row['jumlah_donasi']).")" ?></span></p></div>
                      <?php endforeach ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="overlay-detail text-center">
                  <a href="#about"><i class="fa fa-angle-down"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
