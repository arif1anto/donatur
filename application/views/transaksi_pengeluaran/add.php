<div class="grid-form">
	<div class="grid-form1">
		<h3 id="forms-horizontal">Add</h3>
		<?php echo validation_errors(); ?>
		<?php echo form_open_multipart('admin/transaksi_pengeluaran/add',array("class"=>"form-horizontal")); ?>

	  		<div class="form-group">
					<label for="id_admin" class="col-md-2 control-label">Id Admin</label>
					<div class="col-md-10">
						<select name="id_admin" class="form-control">
							<option value="">select admin</option>
							<?php 
							foreach($all_admin as $admin)
							{
								$selected = ($admin['id_admin'] == $this->input->post('id_admin')) ? ' selected="selected"' : "";

								echo '<option value="'.$admin['id_admin'].'" '.$selected.'>'.$admin['nama'].'</option>';
							} 
							?>
						</select>
					</div>
				</div>
			<div class="form-group">
				<label for="tanggal_transaksi" class="col-md-2 control-label">Tanggal Transaksi</label>
				<div class="col-md-10">
					<!-- <input type="text" name="tanggal_transaksi" value="<?php echo $this->input->post('tanggal_transaksi'); ?>" class="form-control" id="tanggal_transaksi" /> -->
					<div class='input-group' >
		                <input type='text' class="form-control date" name="tanggal_transaksi" value="<?php echo $this->input->post('tanggal_transaksi'); ?>">
		                <span class="input-group-addon">
		                	<span class="fa fa-calendar"></span>
		                </span>
		            </div>
				</div>
			</div>
			<div class="form-group">
				<label for="besar_pengeluaran" class="col-md-2 control-label">Besar Pengeluaran</label>
				<div class="col-md-10">
					<input type="text" name="besar_pengeluaran" value="<?php echo $this->input->post('besar_pengeluaran'); ?>" class="form-control" id="besar_pengeluaran" />
				</div>
			</div>
			<div class="form-group">
				<label for="keterangan_donasi" class="col-md-2 control-label">Keterangan</label>
				<div class="col-md-10">
					<input type="text" name="keterangan_donasi" value="<?php echo $this->input->post('keterangan_donasi'); ?>" class="form-control" id="keterangan_donasi" />
				</div>
			</div>
			<div class="form-group">
				<label for="bukti_transaksi" class="col-md-2 control-label">Bukti Transaksi</label>
				<div class="col-md-10">
					<!-- <input type="text" name="bukti_transaksi" value="<?php echo $this->input->post('bukti_transaksi'); ?>" class="form-control" id="bukti_transaksi" /> -->
					<div class="fileinput fileinput-new" data-provides="fileinput">
						<div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
						<div>
							<span class="btn btn-default btn-file">
							<span class="fileinput-new">Pilih bukti</span>
							<span class="fileinput-exists">Ganti</span>
							<input type="file" name="foto"></span>
							<a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Hapus</a>
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
