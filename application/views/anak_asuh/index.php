<div class="grid-form">
    <div class="grid-form1">
        <div class="pull-right">
            <a href="<?php echo site_url('admin/anak_asuh/add'); ?>" class="btn btn-success btn-sm">Add</a> 
        </div>
        <h3 id="forms-horizontal">Data Anak Asuh</h3>
        <table class="table table-striped table-bordered">
            <tr>
                <th>Foto</th>
				<th>Id Anak Asuh</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
				<th>Jenis Kelamin</th>
				<th>Alamat</th>
				<th>Actions</th>
            </tr>
        	<?php foreach($anak_asuh as $a){ ?>
            <tr>
                <td class="text-center">
                    <?php if ($a['foto']!=""): ?>
                    <img src="<?php echo site_url($a['foto']); ?>" style="max-height:100px;" class="img-thumbnail img-responsive">
                    <?php endif ?>
                </td>
				<td><?php echo $a['id_anak_asuh']; ?></td>
                <td><?php echo $a['nama']; ?></td>
                <td><?php echo $a['tanggal_lahir']; ?></td>
				<td><?php echo $a['jenis_kelamin']; ?></td>
				<td><?php echo $a['alamat']; ?></td>
				<td>
                    <a href="<?php echo site_url('admin/anak_asuh/edit/'.$a['id_anak_asuh']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                    <a href="<?php echo site_url('admin/anak_asuh/remove/'.$a['id_anak_asuh']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                </td>
            </tr>
        	<?php } ?>
        </table>
    </div>
</div>