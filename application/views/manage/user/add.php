	<h3 class="page-header"><?php echo $operation?> Petugas</h3>
	<div class="row">
		<?php 
		if (isset($user)) {
			$inputId = $user['user_id'];
			$inputUsername = $user['user_name'];
			$inputName = $user['user_full_name'];
			$inputEmail = $user['user_email'];
			$inputRole = $user['role_id'];
		}else{
			$inputUsername = set_value('inputUsername');
			$inputName = set_value('inputFullName');
			$inputEmail = set_value('inputEmail');
			$inputDescription = set_value('inputDescription');
		}
		?>
		<?php
		echo validation_errors();
		echo form_open(current_url())?>
		<div class="col-md-8">
			<?php if (isset($user)) {
				?>
				<input type="hidden" name="inputId" value="<?php echo $inputId?>">
				<?php
			}?>
			<label>User Name*</label>
			<input type="text" name="inputUsername" class="form-control" value="<?php echo $inputUsername?>" <?php echo ($this->uri->segment(3) == 'edit')? 'readonly="readonly"' : ''?>><br>
			<label>Nama Lengkap*</label>
			<input type="text" name="inputFullName" class="form-control" value="<?php echo $inputName?>"><br>
			<label>Email*</label>
			<input type="text" name="inputEmail" class="form-control" value="<?php echo $inputEmail?>"><br>
			<?php $aclist = array(1, 2); ?>
			<?php if (in_array($this->session->userdata('m_role'), $aclist)): ?>
				<label>Role*</label>
				<select name="inputRole" class="form-control">
					<option value="">--Pilih Role--</option>
					<?php foreach ($role as $key): 
					if (isset($user)) {
						if ($key['role_id'] == $user['role_id']) {
							$selected = 'selected';
						}else{
							$selected = '';
						}
					}
					?>
					<option value="<?php echo $key['role_id']?>" <?php echo isset($user)? $selected : ''?>><?php echo $key['role_name']?></option>
				<?php endforeach ?>
			</select>
			<br>
		<?php endif ?>

		<?php if ($this->uri->segment(3) == 'add'): ?>
			<label>Password*</label>
			<input type="password" name="inputPassword" class="form-control" value="">
			<p><em>*) Minimal 8 karakter</em></p>
			<label>Re-type Password*</label>
			<input type="password" name="inputPasswordConfirmation" class="form-control" value=""><br>
			<br>
		<?php endif ?>
		<br>
	</div>
	<div class="col-md-4">
		<label>Aksi</label><br>
		<button type="submit" class="btn btn-primary">Simpan</button>
		<a href="<?php echo site_url('manage/user')?>" class="btn btn-success">Batal</a>
	</div>
	<?php echo form_close()?>
</div>