<h3 class="page-header">Log Aktivitas</h3>
<table class="table table-responsive">
	<thead>
		<th>Tanggal</th>
		<th>User</th>
		<th>Modul</th>
		<th>Aksi</th>
		<th>Info</th>
	</thead>
	<tbody>
		<?php foreach ($log as $key): ?>
			<tr>
				<td><?php echo pretty_date($key['date_created'], 'l, d F Y H:i', FALSE) ?></td>
				<td><?php echo $key['user_name'] ?></td>
				<td><?php echo $key['log_module'] ?></td>
				<td><?php echo $key['log_action'] ?></td>
				<td><?php echo $key['log_info'] ?></td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>
<div class="pagination">
	<?php echo $this->pagination->create_links(); ?>
</div>