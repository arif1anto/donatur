<div class="grid-form">
	<div class="grid-form1">
		<h3 id="forms-horizontal">Add</h3>
		<?php echo validation_errors(); ?>
		<?php echo form_open('admin/donasi/add',array("class"=>"form-horizontal")); ?>

	  		<div class="form-group">
					<label for="id_donatur" class="col-md-2 control-label">Id Donatur</label>
					<div class="col-md-10">
						<select name="id_donatur" class="form-control">
							<option value="">select donatur</option>
							<?php 
							foreach($all_donatur as $donatur)
							{
								$selected = ($donatur['id_donatur'] == $this->input->post('id_donatur')) ? ' selected="selected"' : "";

								echo '<option value="'.$donatur['id_donatur'].'" '.$selected.'>'.$donatur['nama_donatur'].'</option>';
							} 
							?>
						</select>
					</div>
				</div>
			<div class="form-group">
				<label for="jumlah_donasi" class="col-md-2 control-label">Jumlah Donasi</label>
				<div class="col-md-10">
					<input type="text" name="jumlah_donasi" value="<?php echo $this->input->post('jumlah_donasi'); ?>" class="form-control" id="jumlah_donasi" />
				</div>
			</div>
			<div class="form-group">
				<label for="bukti_resi" class="col-md-2 control-label">Bukti Resi</label>
				<div class="col-md-10">
					<input type="text" name="bukti_resi" value="<?php echo $this->input->post('bukti_resi'); ?>" class="form-control" id="bukti_resi" />
				</div>
			</div>
			<div class="form-group">
				<label for="tanggal_donasi" class="col-md-2 control-label">Tanggal Donasi</label>
				<div class="col-md-10">
					<!-- <input type="text" name="tanggal_donasi" value="<?php echo $this->input->post('tanggal_donasi'); ?>" class="form-control" id="tanggal_donasi" /> -->
					<div class='input-group' >
		                <input type='text' class="form-control date" name="tanggal_donasi" value="<?php echo $this->input->post('tanggal_donasi'); ?>">
		                <span class="input-group-addon">
		                	<span class="fa fa-calendar"></span>
		                </span>
		            </div>
				</div>
			</div>
			<div class="form-group">
				<label for="keterangan_donasi" class="col-md-2 control-label">Keterangan Donasi</label>
				<div class="col-md-10">
					<textarea name="keterangan_donasi" class="form-control" id="keterangan_donasi"><?php echo $this->input->post('keterangan_donasi'); ?></textarea>
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
