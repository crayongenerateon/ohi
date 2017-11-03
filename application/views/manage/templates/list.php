<ul class="nav navbar-stacked">
	<li class="active">
		<a href="<?php echo site_url('manage') ?>">
			<i class="mdi mdi-blur" style="font-size:17px;"></i> Dashboard
		</a>
	</li>

	<li menu-toggle="" class="">
		<a href="#" data-toggle="collapse" data-target="#news" aria-expanded="true" aria-controls="news" class="list-item"><i class="mdi mdi-microphone" style="font-size:17px;"></i> 
			Berita
			<div id="news" class="collapse <?php echo nav_collapse('news') ?>">
				<a href="<?php echo site_url('manage/news') ?>">
					<div class="list-group">
						<span class="mdi mdi-receipt"></span> Daftar Berita
					</div>
				</a>
				<a href="<?php echo site_url('manage/news/add') ?>">
					<div class="list-group">
						<span class="mdi mdi-plus-box"></span> Tambah Berita
					</div>
				</a>
			</div>
		</a>
	</li>

	<!-- <li menu-toggle="" class="">
		<a href="#" data-toggle="collapse" data-target="#petugas" aria-expanded="true" aria-controls="petugas" class="list-item"><i class="mdi mdi-account-box" style="font-size:17px;"></i> 
			Petugas
			<div id="petugas" class="collapse <?php echo nav_collapse('user') ?>">
				<a href="<?php echo site_url('manage/user') ?>">
					<div class="list-group">
						<span class="mdi mdi-receipt"></span> Daftar Petugas
					</div>
				</a>
				<a href="<?php echo site_url('manage/user/add') ?>">
					<div class="list-group">
						<span class="mdi mdi-plus-box"></span> Tambah Petugas
					</div>
				</a>
			</div>
		</a>
	</li> -->

	<li menu-toggle="" class="">
		<a href="#" data-toggle="collapse" data-target="#log" aria-expanded="true" aria-controls="log" class="list-item"><i class="mdi mdi-tumblr-reblog" style="font-size:17px;"></i> 
			Log Aktivitas
			<div id="log" class="collapse <?php echo nav_collapse('log') ?>">
				<a href="<?php echo site_url('manage/log') ?>">
					<div class="list-group">
						<span class="mdi mdi-receipt"></span> Log Aktivitas
					</div>
				</a>
			</div>
		</a>
	</li>


</ul>