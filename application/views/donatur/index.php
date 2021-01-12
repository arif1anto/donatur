<div class="grid-form">
    <div class="grid-form1">
        <div class="pull-right">
            <a href="<?php echo site_url('admin/donatur/add'); ?>" class="btn btn-success btn-sm">Add</a> 
        </div>
        <h3 id="forms-horizontal">Data Donatur</h3>
        <table class="table table-striped table-bordered">
            <tr>
				<th>Foto Donatur</th>
				<th>Id Donatur</th>
				<th>Nama Donatur</th>
				<th>Tanggal Daftar</th>
				<th>Jenis Kelamin</th>
				<th>Email</th>
				<th>Cp</th>
				<th>Alamat</th>
				<th>Actions</th>
				<th>Username</th>
				<th>Password</th>
            </tr>
        	<?php foreach($donatur as $d){ ?>
            <tr>
                <td class="text-center">
                    <?php if ($d['foto_donatur']!=""): ?>
                    <img src="<?php echo site_url($d['foto_donatur']); ?>" style="max-height:100px;" class="img-thumbnail img-responsive">
                    <?php endif ?>
                </td>
				<td><?php echo $d['id_donatur']; ?></td>
				<td><?php echo $d['nama_donatur']; ?></td>
				<td><?php echo $d['tanggal_daftar']; ?></td>
				<td><?php echo $d['jenis_kelamin']; ?></td>
				<td><?php echo $d['email']; ?></td>
				<td><?php echo $d['cp']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td><?php echo $d['username']; ?></td>
				<td><?php echo $d['password']; ?></td>
				<td>
                    <a href="<?php echo site_url('admin/donatur/edit/'.$d['id_donatur']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                    <a href="<?php echo site_url('admin/donatur/remove/'.$d['id_donatur']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                </td>
            </tr>
        	<?php } ?>
        </table>
    </div>
</div>