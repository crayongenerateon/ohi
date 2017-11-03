<h3 class="page-header">Daftar Petugas</h3>

<table class="table table-hover table-responsive">
	<thead>
		<th>Nama</th>
		<th>Username</th>
		<th>Role</th>
		<th>Aksi</th>
	</thead>
	<tbody>
		<?php foreach ($user as $key) {
			?>
			<tr>
				<td><?php echo $key['user_full_name']?></td>
				<td><?php echo $key['user_name']?></td>
				<td><?php echo $key['role_name'] ?></td>
				<td>
					<a href="<?php echo site_url('manage/user/view/'.$key['user_id']);?>">
						View
					</a> &nbsp; &nbsp; &nbsp; 

					<a href="<?php echo site_url('manage/user/edit/'. $key['user_id']);?>">
						Edit
					</a> &nbsp; &nbsp; &nbsp; 
					<?php if ($this->session->userdata('m_id') != $key['user_id']): ?>
						<a href="<?php echo site_url('manage/user/del/'. $key['user_id']);?>">
							Delete
						</a>
					<?php endif ?>
				</td>
			</tr>
			<?php
		}?>
	</tbody>
</table>
<div class="pagination">
	<?php echo $this->pagination->create_links()?>
</div>
