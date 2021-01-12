<div class="grid-form">
	<div class="grid-form1">
		<h3 id="forms-horizontal">Add</h3>
		<?php echo validation_errors(); ?>
		<?php echo form_open_multipart('admin/donatur/add',array("class"=>"form-horizontal")); ?>

			<div class="form-group">
				<label for="nama_donatur" class="col-md-2 control-label">Nama Donatur</label>
				<div class="col-md-10">
					<input type="text" name="nama_donatur" value="<?php echo $this->input->post('nama_donatur'); ?>" class="form-control" id="nama_donatur" />
				</div>
			</div>
			<div class="form-group">
				<label for="tanggal_daftar" class="col-md-2 control-label">Tanggal Daftar</label>
				<div class="col-md-10">
					<!-- <input type="text" name="tanggal_daftar" value="<?php echo $this->input->post('tanggal_daftar'); ?>" class="form-control" id="tanggal_daftar" /> -->
					<div class='input-group' >
		                <input type='text' class="form-control date" name="tanggal_daftar" value="<?php echo $this->input->post('tanggal_daftar'); ?>">
		                <span class="input-group-addon">
		                	<span class="fa fa-calendar"></span>
		                </span>
		            </div>
				</div>
			</div>
	  		<div class="form-group">
					<label for="jenis_kelamin" class="col-md-2 control-label">Jenis Kelamin</label>
					<div class="col-md-10">
						<select name="jenis_kelamin" class="form-control">
							<option value="">select</option>
							<?php 
							$jenis_kelamin_values = array(
						'Laki-laki'=>'Laki-laki',
						'Perempuan'=>'Perempuan',
					);

							foreach($jenis_kelamin_values as $value => $display_text)
							{
								$selected = ($value == $this->input->post('jenis_kelamin')) ? ' selected="selected"' : "";

								echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
							} 
							?>
						</select>
					</div>
				</div>
			<div class="form-group">
				<label for="cp" class="col-md-2 control-label">Cp</label>
				<div class="col-md-10">
					<input type="text" name="cp" value="<?php echo $this->input->post('cp'); ?>" class="form-control" id="cp" />
				</div>
			</div>
			<div class="form-group">
				<label for="alamat" class="col-md-2 control-label">Alamat</label>
				<div class="col-md-10">
					<input type="text" name="alamat" value="<?php echo $this->input->post('alamat'); ?>" class="form-control" id="alamat" />
				</div>
			</div>
			<div class="form-group">
				<label for="email" class="col-md-2 control-label">Email</label>
				<div class="col-md-10">
					<input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
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
				<label for="foto_donatur" class="col-md-2 control-label">Foto Donatur</label>
				<div class="col-md-10">
					<!-- <input type="text" name="foto_donatur" value="<?php echo $this->input->post('foto_donatur'); ?>" class="form-control" id="foto_donatur" /> -->
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
