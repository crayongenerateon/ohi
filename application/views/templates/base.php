<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> OHI | One Healthcare Indonesia</title>
  <link rel="shortcut icon" href="<?php echo base_url('media/template/media/images/ico/logo2.png') ?>">
  <!-- Bootstrap Core CSS -->
  <link href="<?php echo base_url('');?>media/template/media/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url('');?>media/template/media/css/ionicons.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url('');?>media/template/media/font/font-awesome/font-awesome.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url('');?>media/template/media/css/animate.min.css" rel="stylesheet" type="text/css">
  <!-- <link href="media/css/material.indigo-pink.min.css" rel="stylesheet" type="text/css"> -->

  <!-- Custom CSS -->
  <link href="<?php echo base_url('');?>media/template/media/css/custom.css" rel="stylesheet" type="text/css">

  <!-- Core JavaScript Files -->
  <script type="text/javascript" src="<?php echo base_url('');?>media/template/media/js/jquery-1.10.2.js"></script>
  <script type="text/javascript" src="<?php echo base_url('');?>media/template/media/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/1bd7d78741.js"></script>
  <!-- Custom Theme JavaScript -->
  <!-- <script type="text/javascript" src="media/js/material.min.js"></script> -->
  <script type="text/javascript" src="<?php echo base_url('');?>media/template/media/js/wow.js"></script>
  <script type="text/javascript" src="<?php echo base_url('');?>media/template/media/js/jquery.easing.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url('');?>media/template/media/js/custom.js"></script>


  <script>
    $(document).ready(function(){
      $('a[href^="#"]').on('click',function (e) {
        e.preventDefault();

        var target = this.hash;
        var $target = $(target);

        $('html, body').stop().animate({
          'scrollTop': $target.offset().top
        }, 900, 'swing', function () {
          window.location.hash = target;
        });
      });

    });

    $(window).scroll(function() {    
      var scroll = $(window).scrollTop();

      if (scroll >= 200) {
        $(".fixed-header").slideDown();
      } else {
        $(".fixed-header").slideUp();
      }
    })
  </script>
</head>

<body>

  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
   <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand hidden-xs" href="#"><strong><img src="media/template/media/images/ico/logo.png" class="img-resposive" alt="PMOI" width="10%" style="margin-top: -17px;"></a>
        <a class="navbar-brand hidden-sm hidden-md hidden-lg" href="#"><strong><img src="media/template/media/images/ico/logo.png" class="img-resposive" alt="PMOI" width="35%" style="margin-top: -65px;"></a>
        </div>
        <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-2">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo site_url('');?>">Home</a></li>
            <li><a href="#section1">News</a></li>
            <li><a href="#section2">About Us</a></li>
  <!--           <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook" style=" color: #4267b2;"></i></a></li>
            <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter" style=" color: #5fb0e8;"></i></a></li>
            <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus" style=" color: #db4437;"></i></a></li>   -->     
          </ul>
        </div>
        <!--/.navbar-collapse-->
      </div>
    </nav>

    <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
      <!-- Overlay -->
      <div class="overlay"></div>

      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#bs-carousel" data-slide-to="1"></li>
        <li data-target="#bs-carousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item slides active">
          <div class="slide-1"></div>
          <div class="hero">
            <hgroup>
              <h1>one healthcare Indonesia</h1>        
              <h3>One Step Home Care Therapy</h3>
            </hgroup>
          </div>
        </div>
        <div class="item slides">
          <div class="slide-2"></div>
          <div class="hero">        
            <hgroup>
              <h1>one healthcare Indonesia</h1>        
              <h3>Pemeriksaan dokter spesialis - fisioterapi - terapi latihan - masas terapi - masas kebugaran</h3>
            </hgroup>       
          </div>
        </div>
        <div class="item slides">
          <div class="slide-3"></div>
          <div class="hero">        
            <hgroup>
              <h1>one healthcare Indonesia</h1>        
              <h3>Health Improves Productivity</h3>
            </hgroup>
          </div>
        </div>
      </div> 
    </div>

    <section class="section1">
      <br><br><br>
      <div class="container">
        <div class="row-lg-12" align="leo">
          <div class="col-md-8" style="color: #ffffff; font-size:22px;">
           <h2>" One Healthcare Indonesia adalah suatu layanan perawatan kesehatan di rumah anda. Perawatan kesehatan One Healthcare Indonesia terutama untuk masalah otot, tulang dan persendian. Tenaga kesehatan One Healthcare Indonesia terdiri dari <strong style="color: #ffc200">sarjana strata 1,2 dan 3</strong> di bidang profesinya masing-masing "</h2>
         </div>
         <div class="col-md-4" style="color: #ffffff; font-size:12px; margin-top: -30px">
          <h2><i class="ion ion-heart" style="color:#FF0000;"></i> Layanan Kesehatan One Healthcare Indonesia</h2>
          <article class="module">
            <div class="inside-module">
              <div class="bar-full">
                <span class="bar"></span>
                <div class="bar-box">
                  <span class="bar-flip">Awesome Flip!</span>
                </div> 
              </div>

              <div class="pad">
                <p>Pemeriksaan dokter spesialis di bidang keahlian mengenai otot, tulang dan persendian</p>
              </div>
            </div>

          </article>
          <article class="module">
            <div class="inside-module">
              <div class="bar-full">
                <span class="bar"></span>
                <div class="bar-box">
                  <span class="bar-flip">Awesome Flip!</span>
                </div> 
              </div>
              <div class="pad">
                <p>Fisioterapi & Terapi latihan</p>
              </div>
            </div>
          </article>
          <article class="module">
            <div class="inside-module">
              <div class="bar-full">
                <span class="bar"></span>
                <div class="bar-box">
                  <span class="bar-flip">Awesome Flip!</span>
                </div> 
              </div>
              <div class="pad">
                <p>Masas untuk cedera dan masas untuk pemulihan kebugaran. </p>
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>
    <br><br><br>
  </section>

  <div class="container" id="section1">
    <div class="section_wrapper clearfix">
      <div class="container">
        <h1 style="margin-top: 40px;">
          <div class="animated fadeInLeft">Post</div><div class="animated fadeInRight">News</div>
        </h1>
        <p class="animated fadeInUp delay-1">Lates Information</p>
        <a href="<?php echo site_url('news/index');?>" class="animated fadeInUp delay-1 pull-right" style="margin-top: -30px;">All News</a>
      </div>
      <!-- <a class="btn btn-primary pull-right" href="#" style="margin-top: -50px;">View All News <i class="ion ion-eye"></i></a> -->


      <div class="index-content">
        <div class="container">
          <div class="row">
           <?php $i = 1; ?>
           <?php foreach ($news as $key): ?>
             <?php $item_class = ($i == 1) ? 'item active' : 'item'; ?>
             <div class="<?php echo $item_class; ?>">
              <div class="col-md-4 col-lg-4 col-sm-12">


                <a href="<?php echo news_url($key) ?>" target="_blank">
                  <div class="cards">
                    <article class="card card_main">
                      <header class="card__header">
                        <!-- <img class="card__preview" src="<?php echo base_url();?>/media/template/media/images/support/1.JPG" alt="Preview img"> -->
                        <button class="card__main-action" type="button">In bookmarks</button>
                      </header>
                      <div class="card__body">
                        <div class="card__content">
                          <h3 class="card__title">
                            <a href="#0" class="card__showmore"><?php echo $key['news_title'] ?></a></h3>
                            <div class="card__description">
                              <p><?php echo word_limiter($key['news_desc'], '15') ?></p>
                            </div>
                          </div>
                          <footer class="card__footer">
                            <span class="card__author"><?php echo pretty_date($key ['news_post_date'], 'l, d-m-Y', FALSE) ?></span>
                            <div class="card__meta">
                              <div class="card__meta-item">
                                <i class="ion ion-eye"></i>
                                <a href="<?php echo news_url($key) ?>" target="_blank"">
                                  <span class="card__label">Read More</span>
                                </a>
                              </div>
                            </div>
                          </footer>
                        </div>
                      </article>
                    </div>
                  </a>


                </div>
              </div>

              <?php $i++; ?>
            <?php endforeach ?>
          </div>

        </div>
      </div>

    </div>
  </div>




  <div class="bgimg-3" style="margin-top: -80px" id="section2">
    <div class="caption">
      <div class="col-lg-12">
        <span class="border" style="background-color:transparent;font-size:30px;color: #fff !important;">
         <center>
          <h1 style="margin-top: 50px;">
            <div class="animated fadeInLeft">Visi &</div> <div class="animated fadeInRight">Misi</div>
          </h1>
        </center>
        Menyediakan layanan kesehatan dan kebugaran secara profesional dalam rangka meningkatkan derajat kesehatan dan produktivitas kerja pada masyarakat Indonesia.
      </span>
    </div>
  </div>
</div>


<div class="container" style="margin-top: 40px; margin-bottom: 40px;">
  <div class="col-xs-12 col-md-6">
    <div class="list-group list-cust">
      <a href="#" class="list-group-item active">
        <h2>Latar Belakang</h2>
      </a>
      <div class="list-group-item text-primary">Semakin meningkatnya kasus gangguan sistem muskuloskeletal (otot, tulang dan persendian) pada masyarakat Indonesia.</div>
      <div class="list-group-item">Rendahnya tingkat kebugaran masyarakat Indonesia.</div>
      <div class="list-group-item">Tingginya angka kesakitan yang diikuti dengan rendahnya tingkat kebugaran dapat menyebabkan menurunnya produktivitas kerja masyarakat Indonesia.</div>
      <div class="list-group-item">Sulitnya masyarakat  Indonesia mendapat layanan kesehatan dan kebugaran  yang efektif dan efisien.</div>
    </div>
  </div>

  <div class="col-xs-12 col-md-6">
   <div class="list-group list-cust">
    <a href="#" class="list-group-item active">
      <h2>Tujuan</h2>
    </a>
    <div class="list-group-item text-primary">Menjadi wadah bagi tenaga kesehatan untuk mengabdikan ilmunya kepada masyarakat di Indonesia </div>
    <div class="list-group-item"> Memberikan solusi kepada masyarakat di Indonesia yang mengalami gangguan kesehatan dalam mendapatkan layanan kesehatan dan kebugaran yang efektif dan efisien.</div>
    <div class="list-group-item">Memberikan dukungan kepada program pembinaan atlet tingkat daerah hingga Nasional dalam mencapai prestasi</div>
    <div class="list-group-item">Membantu pelakasanaan program pemerintah dalam meningkatkan derajat kesehatan dan kebugaran pada masyarakat di Indonesia</div>
  </div>
</div>
</div>



<footer id="footer-Section">
  <div class="footer-top-layout">
    <div class="container">
      <div class="row">
        <div class=" col-lg-9 col-lg-offset-2">
          <div class="col-sm-4">
            <div class="footer-col-item">
              <h4>Alamat</h4>
              <address>
                Perumahan Jatinegara Indah  <br/>Jl.Gunung Agung No 15 <br/>Jakarta Timur
              </address>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="footer-col-item">
              <h4>Kontak Kami</h4>
              <div class="item-contact"> 
                <a href="tel:630-885-9200"><span class="link-id">Phone</span>:<span>0812-8667-6543</span></a> 
                <a href="tel:630-839.2006"><span class="link-id">Phone</span>:<span>0812-8800-7787</span></a> 
                <a href="mailto:info@brandcatmedia.com"><span class="link-id">WA</span>:<span>0816-1407-095</span></a> 
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="footer-col-item">
              <h4>Sosial Media</h4>
              <a href="https://www.instagram.com/onehealth1/" target="_blank"><i class="ion ion-social-instagram-outline"></i> Instagram : onehealth1</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</footer>


<div class="copyright">
 <div class="container">

   <div class="row text-center">
    <p>Copyright © 2017 All rights reserved<br/>
      <small>Design by: Rumahcg.com</small></p>
    </div>

  </div>
</div>

<!-- Footer 3 End -->

</body>
</html>

</body>
</html>