<div class="grid-form">
    <div class="grid-form1">
        <div class="pull-right">
            <!-- <a href="<?php echo site_url('admin/donasi/add'); ?>" class="btn btn-success btn-sm">Add</a>  -->
        </div>
        <h3 id="forms-horizontal">Daftar Donasi Masuk</h3>
        <table class="table table-striped table-bordered">
            <tr>
				<th>Id Donasi</th>
				<th>Nama Donatur</th>
                <th>Tanggal Donasi</th>
				<th>Jumlah Donasi</th>
				<th>Keterangan Donasi</th>
                <th>Bukti Resi</th>
                <th>Status</th>
				<th>Actions</th>
            </tr>
        	<?php foreach($donasi as $d){ ?>
            <tr>
				<td><?php echo $d['id_donasi']; ?></td>
				<td><?php echo $d['nama_donatur']; ?></td>
                <td><?php echo $d['tanggal_donasi']; ?></td>
				<td><?php echo $d['jumlah_donasi']; ?></td>
                <td><?php echo $d['keterangan_donasi']; ?></td>
                <td class="text-center">
                    <?php if ($d['bukti_resi']!=""): ?>
                    <img src="<?php echo site_url($d['bukti_resi']); ?>" style="max-height:100px;" class="img-thumbnail img-responsive">
                    <?php endif ?>
                </td>
				<td><?php echo $d['status']=="Y"?"<span class='label label-success'>Sudah Dikonfirmasi</span>":"<span class='label label-danger'>Belum Dikonfirmasi</span>"; ?></td>
				<td>
                    <!-- <a href="<?php echo site_url('admin/donasi/edit/'.$d['id_donasi']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                    <a href="<?php echo site_url('admin/donasi/remove/'.$d['id_donasi']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                     -->
                    <?php if ($d['status']=="Y"): ?>
                    <a href="<?php echo site_url('admin/donasi/batal_validasi/'.$d['id_donasi']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-check"></span> Batal Konfirm.</a>
                    <?php else : ?>
                    <a href="<?php echo site_url('admin/donasi/validasi/'.$d['id_donasi']); ?>" class="btn btn-success btn-xs"><span class="fa fa-check"></span> Konfirmasi</a>
                    <?php endif ?>
                </td>
            </tr>
        	<?php } ?>
        </table>
    </div>
</div>