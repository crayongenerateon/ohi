<h3 class="page-header">Hapus Petugas</h3>
<div class="alert alert-danger">
	<center>
		Anda yakin akan menghapus <?php echo $user['user_full_name']?>?
	</center>
</div>

<table class="table table-responsive">
	<tr>
		<td>Username</td>
		<td><?php echo $user['user_name']?></td>
	</tr>
	<tr>
		<td>Nama Lengkap</td>
		<td><?php echo $user['user_full_name']?></td>
	</tr>
	<tr>
		<td>Role</td>
		<td><?php echo $user['role_name']?></td>
	</tr>
</table>
<?php echo form_open(current_url())?>
<input type="hidden" name="inputId" value="<?php echo $user['user_id']?>">
<button type="submit" class="btn btn-primary">Delete</button>
<a href="<?php echo site_url('manage/user')?>" class="btn btn-warning">Cancel</a>
<?php echo form_close()?>