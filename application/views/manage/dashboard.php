<h3 class="page-header">Dashboard</h3>

<div class="row">
	<div class="col-lg-3 col-md-6">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="mdi mdi-newspaper big"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge"><?php echo $count_news ?></div>
						<div>Berita baru</div>
					</div>
				</div>
			</div>
			<a href="<?php echo site_url('manage/news') ?>">
				<div class="panel-footer">
					<span class="pull-left">View list</span>
					<span class="pull-right"><i class="mdi mdi-chevron-double-right" style="font-size:15px;"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
	
	<div class="col-lg-3 col-md-6">
		<div class="panel panel-red">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="mdi mdi-tumblr-reblog big"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge"><?php echo $count_log ?></div>
						<div>Log Aktivitas</div>
					</div>
				</div>
			</div>
			<a href="<?php echo site_url('manage/log') ?>">
				<div class="panel-footer">
					<span class="pull-left">View list</span>
					<span class="pull-right"><i class="mdi mdi-chevron-double-right" style="font-size:15px;"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
</div>
