<a href="#"><h3><span class="fa fa-dashboard"></span> My Dashboard</h3></a>
<hr>

<div class="row">
	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
		<div class="offer offer-danger">
			<div class="shape">
				<div class="shape-text">
					<span class="glyphicon glyphicon glyphicon-eye-open"></span>              
				</div>
			</div>
			<div class="offer-content">
				<h3 class="lead">
					Berita Baru : <label class="label label-danger"><?php echo $count_news ?></label>
				</h3>

				<div class="row">
					<a href="<?php echo site_url('manage/news') ?>">
						<div class="panel-footer">
							<span class="pull-left">View list</span>
							<span class="pull-right"><i class="ion ion-arrow-right-a" style="font-size:15px;"></i></span>
							<div class="clearfix"></div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
		<div class="offer offer-success">
			<div class="shape">
				<div class="shape-text">
					<span class="glyphicon glyphicon glyphicon-th"></span>              
				</div>
			</div>
			<div class="offer-content">
				<h3 class="lead">
					Log Aktivitas : <label class="label label-success"> <?php echo $count_log ?></label>
				</h3>
				<div class="row">
					<a href="<?php echo site_url('manage/log') ?>">
						<div class="panel-footer">
							<span class="pull-left">View list</span>
							<span class="pull-right"><i class="ion ion-arrow-right-a" style="font-size:15px;"></i></span>
							<div class="clearfix"></div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
