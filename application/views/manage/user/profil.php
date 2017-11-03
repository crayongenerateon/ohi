<h3 class="page-header"><?php echo $user['user_full_name']?></h3>
<div class="row">
	<div class="col-md-10">
		<table class="table table-responsive">
			<tr>
				<td>Nama Lengkap</td>
				<td><?php echo $user['user_full_name'] ?></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><?php echo $user['user_name'] ?></td>
			</tr>
			<tr>
				<td>Role</td>
				<td><?php echo $user['role_name'] ?></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><?php echo $user['user_email'] ?></td>
			</tr>
			<tr>
				<td>Akses ke Pengelolaan Web</td>
				<td><?php echo ($user['user_is_web'] == 1) ? 'Bisa' : 'Tidak' ?></td>
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td><?php echo $user['user_description'] ?></td>
			</tr>
			<tr>
				<td>Tanggal Daftar</td>
				<td><?php echo pretty_date($user['date_created'], 'l, d F Y', false) ?></td>
			</tr>
			<?php if ($user['last_update'] != ''): ?>
				<tr>
					<td>Terakhir diubah</td>
					<td><?php echo pretty_date($user['last_update'], 'l, d F Y', false) ?></td>
				</tr>
			<?php endif ?>
		</table>
	</div>
	<div class="col-md-2">
		<a href="<?php echo site_url('manage/user/edit/'. $user['user_id']) ?>" class="btn btn-primary">Edit</a>
		<a href="<?php echo site_url('manage/user/cpw/')?>" class="btn btn-warning">Ganti Password</a>
	</div>
</div>