
<ul class="nav nav-pills nav-stacked hidden-xs" style="border-right:1px solid black">
	<li class="nav-header"></li>
	<li><a href="<?php echo site_url('manage') ?>"><i class="ion ion-ionic"></i> Dashboard</a></li>
	<li><a href="<?php echo site_url('manage/news') ?>"><i class="ion ion-card"></i> Daftar Berita</a></li>
	<li><a href="<?php echo site_url('manage/news/add') ?>"><i class="ion ion-plus-circled"></i> Tambah Berita</a></li>
	<li><a href="<?php echo site_url('manage/log') ?>"><i class="ion ion-loop"></i> Log Aktivitas</a></li>
</ul>

<div class="container">
	<div class="row hidden-lg hidden-md hidden-sm">
		<div class="dropdown">
			<a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-block btn-primary" data-target="#" href="/page.html">
				Dasboard <span class="caret"></span>
			</a>
			<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
				<li class="dropdown-submenu">
					<a tabindex="-1" href="#">Berita</a>
					<ul class="dropdown-menu">
						<li><a tabindex="-1" href="<?php echo site_url('manage/news') ?>">Daftar Berita</a></li>
						<li><a href="<?php echo site_url('manage/news/add') ?>">Tambah Berita</a></li>
					</ul>
				</li>
				<li class="divider"></li>
				<li><a href="<?php echo site_url('manage/log') ?>">Log Aktivitas</a></li>
			</ul>
		</div>
	</div>
</div><!-- /span-3 -->


