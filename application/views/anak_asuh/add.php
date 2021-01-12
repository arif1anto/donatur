<div class="grid-form">
	<div class="grid-form1">
		<h3 id="forms-horizontal">Add</h3>
		<?php echo validation_errors(); ?>
		<?php echo form_open_multipart('admin/anak_asuh/add',array("class"=>"form-horizontal")); ?>

			<div class="form-group">
				<label for="nama" class="col-md-2 control-label">Nama</label>
				<div class="col-md-10">
					<input type="text" name="nama" value="<?php echo $this->input->post('nama'); ?>" class="form-control" id="nama" />
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
				<label for="tanggal_lahir" class="col-md-2 control-label">Tanggal Lahir</label>
				<div class="col-md-10">
					<!-- <input type="text" name="tanggal_lahir" value="<?php echo $this->input->post('tanggal_lahir'); ?>" class="form-control date" id="tanggal_lahir" /> -->
					<div class='input-group' >
		                <input type='text' class="form-control date" name="tanggal_lahir" value="<?php echo $this->input->post('tanggal_lahir'); ?>">
		                <span class="input-group-addon">
		                	<span class="fa fa-calendar"></span>
		                </span>
		            </div>

				</div>
			</div>
			<div class="form-group">
				<label for="alamat" class="col-md-2 control-label">Alamat</label>
				<div class="col-md-10">
					<textarea name="alamat" class="form-control" id="alamat"><?php echo $this->input->post('alamat'); ?></textarea>
				</div>
			</div>
			<div class="form-group">
				<label for="foto" class="col-md-2 control-label">Foto</label>
				<div class="col-md-10">
					<!-- <input type="text" name="foto" value="<?php echo $this->input->post('foto'); ?>" class="form-control" id="foto" /> -->
				
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
