<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>OHI <?php echo isset($title) ? '| '.$title : null ?></title>
	<link rel="shortcut icon" href="<?php echo base_url('media/img/logo.png') ?>">
	<link rel="stylesheet" href="<?php echo base_url('media/css/bootstrap.min.css') ?>" />
	<link rel="stylesheet" href="<?php echo base_url('media/css/materialdesignicons.min.css') ?>" />
	<link rel="stylesheet" href="<?php echo base_url('media/css/materialdesignicons.min.css.map') ?>" />
	<link rel="stylesheet" href="<?php echo base_url('media/css/ionicons.min.css') ?>" />
	<link rel="stylesheet" href="<?php echo base_url('media/css/sidebar.css') ?>"/>

	<script src="<?php echo base_url('media/js/jquery-1.11.1.js') ?>"></script>
	<script src="<?php echo base_url('media/js/bootstrap.min.js') ?>"></script>
	<script src="<?php echo base_url('media/js/sidebar.js') ?>"></script>
	<script src="<?php echo base_url('media/js/notify.min.js'); ?>"></script>
	<script src="<?php echo base_url('media/js/jquery-ui.js'); ?>"></script>
	<script src="<?php echo base_url('media/js/imgLiquid-min.js'); ?>"></script>
</head>
<body>

	<div class="navbar navbar-static navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle toggle-left hidden-md hidden-lg" data-toggle="sidebar" data-target=".sidebar-left">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand hidden-xs" href="<?php echo site_url('manage');?>"><font color="#fff"><img src="<?php echo base_url('media/img/logo.png') ?>" width="70 px"  style="margin-top:-10px;"></font> </a>
				<button type="button" class="navbar-toggle collapsed hidden-xs" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<button type="button" class="navbar-toggle toggle-right hidden-lg hidden-md hidden-sm" data-toggle="sidebar" data-target=".sidebar-right">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<div class="btn-group" style="margin:18px;">
						<button type="button" class="btn btn-warning dropdown-toggle"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profil
							<img class="img-circle" src="<?php echo base_url('media/img/people.png') ?>" width="21px" alt=""> <span><i class="mdi mdi-chevron-down"></i></span>
						</button>
						<ul class="dropdown-menu">
							<li><a href="<?php echo site_url('manage/profile') ?>">Profil</a></li>
							<li><a href="<?php echo site_url('manage/auth/logout') ?>">Keluar</a></li>
						</ul>
					</div>
				</ul>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-8 col-sm-3 col-md-2 sidebar sidebar-left sidebar-animate sidebar-md-show">
				<div class="user-logged-in">
					<div class="content">
						<div class="user-name"> <span class="text-muted f9"><?php echo $this->session->userdata('m_full_name'); ?></span></div>
						<div class="user-email"><?php echo $this->session->userdata('m_email'); ?></div>
						<div class="user-actions">
							<a class="m-r-5" href=""></a><a href="<?php echo site_url('manage/auth/logout') ?>">logout</a>
						</div>
					</div>
				</div>

				<?php $this->load->view('manage/templates/list'); ?>


				<div class="margin-bottom-20"></div>
			</div>

			<div class="main col-md-10 col-md-offset-2">
				<?php isset($page) ? $this->load->view($page) : null;  ?> 
				<div class="margin-bottom-20"></div>
			</div>

			<div class="col-xs-5 col-sm-3 col-md-2 sidebar sidebar-right sidebar-animate">
				<ul class="nav navbar-stacked">
					<li class="active"><a href="<?php echo site_url('manage/profile') ?>">Profil</a></li>
					<li><a href="#about">Pengaturan</a></li>
					<li><a href="<?php echo site_url('manage/auth/logout') ?>">Keluar</a></li>
				</ul>
			</div>

		</div>
	</div>

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
