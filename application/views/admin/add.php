<div class="grid-form">
	<div class="grid-form1">
		<h3 id="forms-horizontal">Add</h3>
		<?php echo validation_errors(); ?>
		<?php echo form_open_multipart('admin/admin/add',array("class"=>"form-horizontal")); ?>

			<div class="form-group">
				<label for="nama" class="col-md-2 control-label">Nama</label>
				<div class="col-md-10">
					<input type="text" name="nama" value="<?php echo $this->input->post('nama'); ?>" class="form-control" id="nama" />
				</div>
			</div>
			<div class="form-group">
				<label for="username" class="col-md-2 control-label">Username</label>
				<div class="col-md-10">
					<input type="text" name="username" value="<?php echo $this->input->post('username'); ?>" class="form-control" id="username" />
				</div>
			</div>
	  		<div class="form-group">
				<label for="password" class="col-md-2 control-label">Password</label>
				<div class="col-md-10">
					<input type="password" name="password" value="<?php echo $this->input->post('password'); ?>" class="form-control" id="password" />
				</div>
			</div>
			<div class="form-group">
				<label for="foto_admin" class="col-md-2 control-label">Foto Admin</label>
				<div class="col-md-10">
					<!-- <input type="text" name="foto_admin" value="<?php echo $this->input->post('foto_admin'); ?>" class="form-control" id="foto_admin" /> -->
					<div class="fileinput fileinput-new" data-provides="fileinput">
						<div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
						<div>
							<span class="btn btn-default btn-file">
							<span class="fileinput-new">Pilih foto</span>
							<span class="fileinput-exists">Ganti</span>
							<input type="file" name="foto"></span>
							<a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Hapus Foto</a>
						</div>
					</div>
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-success">
						<i class="fa fa-check"></i> Save
					</button>
		        </div>
			</div>

		<?php echo form_close(); ?>
	</div>
</div>
