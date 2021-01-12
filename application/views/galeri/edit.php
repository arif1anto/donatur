<div class="grid-form">
	<div class="grid-form1">
		<h3 id="forms-horizontal">Edit</h3>
		<?php echo validation_errors(); ?>
		<?php echo form_open_multipart('admin/galeri/edit/'.$galeri['id'],array("class"=>"form-horizontal")); ?>

			<div class="form-group">
				<label for="ket" class="col-md-2 control-label">Nama galeri</label>
				<div class="col-md-10">
					<textarea name="ket" class="form-control" id="ket" rows="3"><?php echo ($this->input->post('ket') ? $this->input->post('ket') : $galeri['ket']); ?></textarea>
				</div>
			</div>
			<div class="form-group">
				<label for="src" class="col-md-2 control-label">Foto galeri</label>
				<div class="col-md-10">
					<!-- <input type="text" name="src" value="<?php echo ($this->input->post('src') ? $this->input->post('src') : $galeri['src']); ?>" class="form-control" id="src" /> -->
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