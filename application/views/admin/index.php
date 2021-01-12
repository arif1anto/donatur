<div class="grid-form">
    <div class="grid-form1">
        <div class="pull-right">
            <a href="<?php echo site_url('admin/admin/add'); ?>" class="btn btn-success btn-sm">Add</a> 
        </div>
        <h3 id="forms-horizontal">Daftar Admin</h3>
        <table class="table table-striped table-bordered">
            <tr>
                <th>Foto Admin</th>
				<th>Id Admin</th>
                <th>Nama</th>
                <th>Username</th>
				<th>Password</th>
				<th>Actions</th>
            </tr>
        	<?php foreach($admin as $a){ ?>
            <tr>
                <td class="text-center">
                    <?php if ($a['foto_admin']!=""): ?>
                    <img src="<?php echo site_url($a['foto_admin']); ?>" style="max-height:100px;" class="img-thumbnail img-responsive">
                    <?php endif ?>
                </td>
				<td><?php echo $a['id_admin']; ?></td>
                <td><?php echo $a['nama']; ?></td>
                <td><?php echo $a['username']; ?></td>
				<td><?php echo $a['password']; ?></td>
				<td>
                    <a href="<?php echo site_url('admin/admin/edit/'.$a['id_admin']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                    <a href="<?php echo site_url('admin/admin/remove/'.$a['id_admin']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                </td>
            </tr>
        	<?php } ?>
        </table>
    </div>
</div>