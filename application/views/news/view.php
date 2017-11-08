<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> OHI | one healt indonesia</title>
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
      <a class="navbar-brand hidden-xs" href="#"><strong><img src="<?php echo base_url();?>media/template/media/images/ico/logo.png" class="img-resposive" alt="PMOI" width="10%" style="margin-top: -17px;"></a>
        <a class="navbar-brand hidden-sm hidden-md hidden-lg" href="#"><strong><img src="<?php echo base_url();?>media/template/media/images/ico/logo.png" class="img-resposive" alt="PMOI" width="35%" style="margin-top: -65px;"></a>
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


    <div class="container" style="margin-top: 100px;">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <section class="blog-post">
            <div class="panel panel-default">
              <center>
                <img src="media/images/support/3.JPG" class="img-responsive" width="100%">
              </center>
              <div class="panel-body">
                <div class="blog-post-meta">
                  <span class="label label-light">News</span>
                  <p class="blog-post-date pull-right">Publish Date : <?php echo pretty_date($news ['news_post_date'], 'l, d-m-Y', FALSE) ?></p>
                </div>
                <div class="blog-post-content">
                  <!-- <a href="#" target="_blank">
                    <h2 class="blog-post-title">Materialize Tutorial for Beginners</h2>
                  </a> -->
                  <p><?php echo $news['news_desc'] ?>  </p>
                  <a class="btn btn-more" href="#">Read more</a>
                  <a class="blog-post-share pull-right" href="#">
                    <i class="ion ion-thumbsup"></i>
                  </a>
                </div>
              </div>
            </div>

        </section><!-- /.blog-post -->
      </div>
    </div>


  </div>

  <div class='container'>
    <center>
      <h2>
        Share Social Media
      </h2>
      <p>
        Random selection of button styles. May change over time as I get alot of stupid ideas. Feel free to follow me on  <a href="https://twitter.com/simonbusborg" target="_blank" class="twitter">twitter</a>
      </p>
    </center>
    <div class="button-container">
      <div class='button -blue center'>
        <a href="http://www.facebook.com/sharer/sharer.php?u=<?php echo news_url($news) ?>&title=<?php echo $news['news_title'] ?>&summary=<?php echo word_limiter($news['news_desc'], '10') ?>" target="_blank" style="color: #fff;">
          Facebook
        </a>
      </div>

      <div class='button -salmon center'>
        <a href="https://plus.google.com/share?url=<?php echo news_url($news) ?>&title=<?php echo $news['news_title'] ?>&summary=<?php echo word_limiter($news['news_desc'], '10') ?>" target="_blank" style="color: #fff;">
          Google Plus
        </a>
      </div>

      <div class='button -green center'>
        <a href="http://twitter.com/share?url=<?php echo news_url($news) ?>&title=<?php echo $news['news_title'] ?>&summary=<?php echo word_limiter($news['news_desc'], '10') ?>" target="_blank" style="color: #fff;">
        Twitter
      </a>
    </div>

    <div class='button -dark center'>
      <a href="http://www.linkedin.com/shareArticle?url=<?php echo news_url($news) ?>&title=<?php echo $news['news_title'] ?>&summary=<?php echo word_limiter($news['news_desc'], '10') ?>" target="_blank" style="color: #fff;">
        Linkedin
      </a>
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