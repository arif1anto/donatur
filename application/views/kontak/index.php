<div class="grid-form">
    <div class="grid-form1">
        <div class="pull-right">
            <!-- <a href="<?php echo site_url('admin/kontak/add'); ?>" class="btn btn-success btn-sm">Add</a>  -->
        </div>
        <h3 id="forms-horizontal">Pesan dari user</h3>
        <table class="table table-striped table-bordered">
            <tr>
				<th>Id Kontak</th>
				<th>Nama</th>
				<th>Email</th>
				<th>Pesan</th>
				<th>Actions</th>
            </tr>
        	<?php foreach($kontak as $k){ ?>
            <tr>
				<td><?php echo $k['id_kontak']; ?></td>
				<td><?php echo $k['nama']; ?></td>
				<td><?php echo $k['email']; ?></td>
				<td><?php echo $k['pesan']; ?></td>
				<td class="text-center" >
                    <!-- <a href="<?php echo site_url('admin/kontak/edit/'.$k['id_kontak']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>  -->
                    <!-- <a href="<?php echo site_url('admin/kontak/remove/'.$k['id_kontak']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a> -->
                    <a href="mailto:<?php echo $k['email']; ?>" class="btn btn-success"><span class="fa fa-mail-reply"></span> Balas Via Email</a>
                </td>
            </tr>
        	<?php } ?>
        </table>
    </div>
</div>
