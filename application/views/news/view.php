<!DOCTYPE html>
<html lang="eng">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>PMOI</title>
  <link rel="shortcut icon" href="<?php echo base_url('media/img/logo.png') ?>">
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,600,700,800">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

  <link href="<?php echo base_url('media/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url('media/css/main.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('media/css/article.css') ?>">
  
</head>

<style>


</style>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
	
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <span>
          <a href="<?php echo site_url(); ?>" style="cursor:hand"><img class="img_logo" src="<?php echo base_url('media/img/logo.png') ?>" alt=""></a>
      </span>
        <a class="navbar-brand page-scroll" href="#page-top">PMOI</a> 
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a class="page-scroll active" href="<?php echo site_url(); ?>">Beranda</a></li>
          <!--<li><a class="page-scroll" href="index.html">Berita</a></li>
          <li><a class="page-scroll" href="index.html">Tentang Kami</a></li>-->
          <!--<li><a class="page-scroll" href="#">Tujuan</a></li>-->
          <!--<li class="dropdown page-scroll">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tentang Kami <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Visi Misi</a></li>
              <li><a href="#">Latar Belakang</a></li>
              <li><a href="#">Tujuan</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li> 
            </ul>
          </li>-->
        </ul>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
    <div class="wrapper">
  <section class="title">
    <!--<div class="container">
      <div class="row">
        <div class="col-md-8">
          <h1>Long Title Text That is very Interesting to read.
            <span>Teegan Lincoln</span>
          </h1>
        </div>
      </div>
    </div>-->
  </section>
  <section class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-8 main">
          <p class="publish-date"><strong>Publish</strong> <?php echo pretty_date($news ['news_post_date'], 'l, d-m-Y', FALSE) ?></p>
          <p>
            &nbsp;&nbsp;&nbsp; <?php echo $news['news_desc'] ?>
          </p>
        </div>
      </div>
    </div>
    <div class="sosmed center">
            <!-- Social Button HTML -->   
              <div>
                <h3>Shared this article :</h3>
              </div>
            <!-- Twitter -->
            <a href="http://twitter.com/share?url=<?php echo news_url($news) ?>&title=<?php echo $news['news_title'] ?>&summary=<?php echo word_limiter($news['news_desc'], '10') ?>" target="_blank" class="share-btn twitter">
              <i class="fa fa-twitter"></i>
            </a>

            <!-- Google Plus -->
            <a href="https://plus.google.com/share?url=<?php echo news_url($news) ?>&title=<?php echo $news['news_title'] ?>&summary=<?php echo word_limiter($news['news_desc'], '10') ?>" target="_blank" class="share-btn google-plus">
              <i class="fa fa-google-plus"></i>
            </a>

            <!-- Facebook -->
            <a href="http://www.facebook.com/sharer/sharer.php?u=<?php echo news_url($news) ?>&title=<?php echo $news['news_title'] ?>&summary=<?php echo word_limiter($news['news_desc'], '10') ?>" target="_blank" class="share-btn facebook">
              <i class="fa fa-facebook"></i>
            </a>

            <!-- LinkedIn -->
            <a href="http://www.linkedin.com/shareArticle?url=<?php echo news_url($news) ?>&title=<?php echo $news['news_title'] ?>&summary=<?php echo word_limiter($news['news_desc'], '10') ?>" target="_blank" class="share-btn linkedin">
              <i class="fa fa-linkedin"></i>
            </a>

            <!-- Email -->
            <!-- <a href="mailto:?subject=<SUBJECT&body=<BODY>" target="_blank" class="share-btn email">
              <i class="fa fa-envelope"></i>
            </a> -->
          </div>
  </section>
</div>

  <!-- Main Content End -->

<div class="footer">
 <div class="container">
   <div class="col-md-12">
     <p class="text-muted">Created by &nbsp;<a href="http://www.rumahcg.com" target="_blank">RumahCG</a></p>
   </div>
 </div>
</div>

<!-- jQuery -->
<script src="<?php echo base_url('media/js/jquery.js') ?>"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url('media/js/bootstrap.min.js') ?>"></script>

<!-- Scrolling Nav JavaScript -->
<script src="<?php echo base_url('media/js/jquery.easing.min.js') ?>"></script>
<script src="<?php echo base_url('media/js/scrolling-nav.js ') ?>"></script>
<script>
jQuery(document).ready(function($) {
  $('.popup').click(function(event) {
    var width  = 575,
        height = 400,
        left   = ($(window).width()  - width)  / 2,
        top    = ($(window).height() - height) / 2,
        url    = this.href,
        opts   = 'status=1' +
                 ',width='  + width  +
                 ',height=' + height +
                 ',top='    + top    +
                 ',left='   + left;
    
    window.open(url, 'twitter', opts);
 
    return false;
  });
   });
</script>

</body>
</html>