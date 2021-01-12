<div class="grid-form">
	<div class="grid-form1">
		<h3 id="forms-horizontal">Add</h3>
		<?php echo validation_errors(); ?>
		<?php echo form_open('admin/kontak/add',array("class"=>"form-horizontal")); ?>

	  		<div class="form-group">
				<label for="nama" class="col-md-2 control-label">Nama</label>
				<div class="col-md-10">
					<input type="text" name="nama" value="<?php echo $this->input->post('nama'); ?>" class="form-control" id="nama" />
				</div>
			</div>
			<div class="form-group">
				<label for="email" class="col-md-2 control-label">Email</label>
				<div class="col-md-10">
					<input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
				</div>
			</div>
			<div class="form-group">
				<label for="pesan" class="col-md-2 control-label">Pesan</label>
				<div class="col-md-10">
					<textarea name="pesan" class="form-control" id="pesan"><?php echo $this->input->post('pesan'); ?></textarea>
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
