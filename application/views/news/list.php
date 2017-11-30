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
      <a class="navbar-brand hidden-xs" href="#"><strong><img src="<?php echo base_url();?>media/template/media/images/ico/logo.png" class="img-resposive" alt="PMOI" width="10%" style="margin-top: -17px;"></a>
        <a class="navbar-brand hidden-sm hidden-md hidden-lg" href="#"><strong><img src="<?php echo base_url();?>media/template/media/images/ico/logo.png" class="img-resposive" alt="PMOI" width="35%" style="margin-top: -65px;"></a>
        </div>
        <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-2">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo site_url('');?>">Home</a></li>
          </ul>
        </div>
        <!--/.navbar-collapse-->
      </div>
    </nav>


    <div class="container" style="margin-top: 150px;">
      <div class="row">
        <div class="index-content">




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
      <div >
        <?php echo $this->pagination->create_links(); ?>
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
                    Perumahan Jatinegara indah  <br/>Jl.Gunung Agung No 15 <br/>Jakarta Timur
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
                  <a href="https://www.instagram.com/onehealth1/" target="_blank"><i class="ion ion-social-instagram-outline"></i> Intagram : onehealth1</a>
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
        <p>Copyright © 2017 All rights reserved</p>
      </div>

    </div>
  </div>

  <!-- Footer 3 End -->




</body>
</html>