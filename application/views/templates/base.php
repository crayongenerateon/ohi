<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> PMOI | The Internet Of Money</title>
  <link rel="icon" href="<?php echo site_url('');?>media/template/media/images/ico/blood.png" type="icon">
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
            <li><a href="<?php echo site_url('');?>">News</a></li>
            <li><a href="<?php echo site_url('about');?>">About Us |</a></li>
            <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook" style=" color: #4267b2;"></i></a></li>
            <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter" style=" color: #5fb0e8;"></i></a></li>
            <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus" style=" color: #db4437;"></i></a></li>       
            <li><a href="" title="Contact Us"><small>081288007787</small></a></li>  
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
              <h1>one healt indonesia</h1>        
              <h3>kesehatan umum, kedokteran gigi Klinik</h3>
            </hgroup>
            <button class="snip1434">About Us<i class="ion-stats-bars"></i></button>
          </div>
        </div>
        <div class="item slides">
          <div class="slide-2"></div>
          <div class="hero">        
            <hgroup>
              <h1>one healt indonesia</h1>        
              <h3>It Pays to Live Healthy</h3>
            </hgroup>       
            <button class="snip1434">About Us<i class="ion-stats-bars"></i></button>
          </div>
        </div>
        <div class="item slides">
          <div class="slide-3"></div>
          <div class="hero">        
            <hgroup>
              <h1>one healt indonesia</h1>        
              <h3>Get start your next awesome project</h3>
            </hgroup>
            <button class="snip1434">About Us<i class="ion-stats-bars"></i></button>
          </div>
        </div>
      </div> 
    </div>


    <div class="container">
      <div class="section_wrapper clearfix">
        <div class="container">
          <h1 style="margin-top: 40px;">
            <div class="animated fadeInLeft">Post</div><div class="animated fadeInRight">News</div>
          </h1>
          <p class="animated fadeInUp delay-1">Lates Information</p>
        </div>
        <a class="btn btn-primary pull-right" href="#" style="margin-top: -50px;">View All News <i class="ion ion-eye"></i></a>
        <div class="caption">

          <div class="index-content">
            <div class="container">
              <div class="row">
               <?php $i = 1; ?>
               <?php foreach ($news as $key): ?>
                 <?php $item_class = ($i == 1) ? 'item active' : 'item'; ?>
                 <div class="<?php echo $item_class; ?>">
                  <div class="col-md-4 col-lg-4 col-sm-12">
                   <a href="<?php echo news_url($key) ?>" target="_blank">
                    <figure class="snip1543 hover">
                      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample108.jpg" alt="sample108" />
                      <figcaption>
                        <h3><?php echo $key['news_title'] ?></h3>
                        <small><?php echo pretty_date($key ['news_post_date'], 'l, d-m-Y', FALSE) ?></small>
                        <p><?php echo word_limiter($key['news_desc'], '10') ?></p>
                      </figcaption>
                    </figure>
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
</div>




  <div class="bgimg-3">
    <div class="caption">
      <div class="col-lg-12">
        <span class="border" style="background-color:transparent;font-size:30px;color: rgb(251, 186, 22) !important;">
         <center>
          <h1 style="margin-top: 50px;">
            <div class="animated fadeInLeft">Visi &</div> <div class="animated fadeInRight">Misi</div>
          </h1>
        </center>
        Mengembangkan pelayanan massage Olahraga yang bermutu tinggi dan kompetitif. Bersama Pemerintah dan organisasi profesi berperan secara substansif dalam penyediaan pelayanan massage olahraga yang handal dan berkualitas tinggi.
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
      <a href="#" class="list-group-item text-primary">Bagaimana meningkatkan pola pikir yang benar terhadap olahraga pada masyarakat sehingga membudayakan olahraga.</a>
      <a href="#" class="list-group-item">Bagaimana meningkatkan pola kualitas dan kuantitas penangan <strong>Sport Massage</strong> yang benar sehingga memungkinkan kembali ke aktivitas semula.</a>
      <a href="#" class="list-group-item">Tenaga Masseur olahraga yang masih kurang.</a>
      <a href="#" class="list-group-item">Pengobatan alternatif sudah membudaya karena lebih murah dan mudah diperoleh.</a>
      <a href="#" class="list-group-item">Sport Massage belum membudaya karena mahal dan sulit diperoleh.</a>
    </div>
  </div>

  <div class="col-xs-12 col-md-6">
   <div class="list-group list-cust">
    <a href="#" class="list-group-item active">
      <h2>Tujuan</h2>
    </a>
    <a href="#" class="list-group-item text-primary">Menjadi wadah peningkatan Sumber Daya Manusia tenaga ke-olahragaan di bidang masas olahraga.</a>
    <a href="#" class="list-group-item">Menciptakan standarisasi finansial & Kompetensi Masseur olahraga yang unggul dan profesional.</a>
    <a href="#" class="list-group-item">Memberikan dukungan kepada program pembinaan atlet tingkat daerah hingga Nasional dalam mencapai prestasi</a>
    <a href="#" class="list-group-item">Berkontribusi dalam melahirkan tenaga keolahragaan masas olahraga yang terbaik</a>
    <a href="#" class="list-group-item">Sebagai media silaturahmi dan sharing para masseur seluruh indonesia</a>
  </div>
</div>
</div>

<footer>
<div class="container">
  <div class="row text-center">   
    <div class="col-lg-6 col-lg-offset-3">
      <ul class="menu">

       <li>
        <a href="#">Home</a>
      </li>

      <li>
       <a href="#">About</a>
     </li>

     <li>
      <a href="#">News</a>
    </li>

    <li>
     <a href="#">081288007787</a>
   </li>

</ul>
</div>
</div>
</div>

</footer>


<div class="copyright">
 <div class="container">

   <div class="row text-center">
    <p>Copyright © 2017 All rights reserved</p>
  </div>

</div>
</div>

<!-- Footer 3 End -->

</body>
</html>

</body>
</html>