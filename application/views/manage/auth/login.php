<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>OHI | Login</title>
  <link rel="shortcut icon" href="<?php echo base_url('media/template/media/images/ico/logo2.png') ?>">
  <link href="<?php echo base_url('media/css/bootstrap.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('media/css/login.css');?>" rel="stylesheet">


</head>
<body>

  <div class="center">
    <div class="card bordered z-depth-2" style="margin:0% auto; max-width:400px;">
      <div class="card-header">
        <div class="brand-logo">
          PENGELOLAAN WEBSITE OHI
        </div>
      </div>
      <?php echo form_open(current_url(), array('role'=>'form', 'class'=>'form-signin')); ?>
      <div class="card-content">
        <?php if($this->session->flashdata('errorLogin')):?>
          <div class="alert alert-danger"><?php echo $this->session->flashdata('errorLogin');?></div>
        <?php elseif(validation_errors()):?>
          <?php echo validation_errors();?>
        <?php endif;?>
        <div class="form-group">
          <label class="control-label">Username</label>
          <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
        </div>
        <div class="form-group">
          <label for="inputPassword" class="control-label">Password</label>
          <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
       <!--  <div class="form-group">
          <div class="checkbox">
            <label>
              <input type="checkbox" name="remember"> Remember me
            </label>
          </div>
        </div> -->
      </div>
      <div class="card-action clearfix">
        <div class="pull-right">
          <button class="btn btn-lg btn-link btn-text" type="submit">
            Sign in
          </button>
        </div>
      </div>
      <?php echo form_close(); ?>
    </div>
  </div>

</body>

<script src="<?php echo base_url('media/js/jquery-1.11.1.js') ?>"></script>
<script src="<?php echo base_url('media/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('media/js/sidebar.js') ?>"></script>
</html>
