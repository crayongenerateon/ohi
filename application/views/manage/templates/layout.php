<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>OHI <?php echo isset($title) ? '| '.$title : null ?></title>
	<link rel="shortcut icon" href="<?php echo base_url('media/template/media/images/ico/logo2.png') ?>">
	<link rel="stylesheet" href="<?php echo base_url('media/css/bootstrap.min.css') ?>" />
	<link rel="stylesheet" href="<?php echo base_url('media/css/materialdesignicons.min.css') ?>" />
	<link rel="stylesheet" href="<?php echo base_url('media/css/materialdesignicons.min.css.map') ?>" />
	<link rel="stylesheet" href="<?php echo base_url('media/css/ionicons.min.css') ?>" />
	<link rel="stylesheet" href="<?php echo base_url('media/css/custom.css') ?>"/>

	<script src="<?php echo base_url('media/js/jquery-1.11.1.js') ?>"></script>
	<script src="<?php echo base_url('media/js/bootstrap.min.js') ?>"></script>
	<script src="<?php echo base_url('media/js/sidebar.js') ?>"></script>
	<script src="<?php echo base_url('media/js/notify.min.js'); ?>"></script>
	<script src="<?php echo base_url('media/js/jquery-ui.js'); ?>"></script>
	<script src="<?php echo base_url('media/js/imgLiquid-min.js'); ?>"></script>
</head>
<body>


	<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"> ONE HEALTCARE INDONESIA</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<button type="button" class="dropdown-toggle"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-top: 10px; margin-right: 20px;">Profil
							<img class="img-circle" src="<?php echo base_url('media/img/people.png') ?>" width="21px" alt=""> <span><i class="ion ion-arrow-down-b"></i></span>
						</button>
						<ul class="dropdown-menu">
							<li><a href="<?php echo site_url('manage/user/profil') ?>">Profil</a></li>
							<li><a href="<?php echo site_url('manage/auth/logout') ?>">Keluar</a></li>
						</ul>
					</li>
					
				</ul>
			</div>
		</div>
		<!-- /container -->
	</div>

	<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
		<?php $this->load->view('manage/templates/list'); ?>
	</div>

	<div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
		<?php isset($page) ? $this->load->view($page) : null;  ?> 

	</div>

			<!-- <div class="col-xs-5 col-sm-3 col-md-2 sidebar sidebar-right sidebar-animate">
				<ul class="nav navbar-stacked">
					<li class="active"><a href="<?php echo site_url('manage/profile') ?>">Profil</a></li>
					<li><a href="#about">Pengaturan</a></li>
					<li><a href="<?php echo site_url('manage/auth/logout') ?>">Keluar</a></li>
				</ul>
			</div> -->

	<!-- 	</div>
	</div>
-->
<?php if ($this->session->flashdata('success')): ?>
	<script type="text/javascript">
		$.notify("<?php echo $this->session->flashdata('success')?>", 
		{
			className: 'success',
			globalPosition: 'top center',
		}
		);
	</script>
<?php endif ?>
</body>

</html>
