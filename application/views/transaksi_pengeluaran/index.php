<div class="grid-form">
    <div class="grid-form1">
        <div class="pull-right">
            <a href="<?php echo site_url('admin/transaksi_pengeluaran/add'); ?>" class="btn btn-success btn-sm">Add</a> 
        </div>
        <h3 id="forms-horizontal">Transaksi Pengeluaran</h3>
        <table class="table table-striped table-bordered">
            <tr>
				<th>Id Trans</th>
				<th>Id Admin</th>
                <th>Tanggal Transaksi</th>
				<th>Besar Pengeluaran</th>
				<th>Keterangan</th>
                <th>Bukti Transaksi</th>
				<th>Actions</th>
            </tr>
        	<?php foreach($transaksi_pengeluaran as $t){ ?>
            <tr>
				<td><?php echo $t['id_trans']; ?></td>
				<td><?php echo $t['id_admin']; ?></td>
                <td><?php echo $t['tanggal_transaksi']; ?></td>
				<td><?php echo $t['besar_pengeluaran']; ?></td>
				<td><?php echo $t['keterangan_donasi']; ?></td>
                <td class="text-center">
                    <?php if ($t['bukti_transaksi']!=""): ?>
                    <img src="<?php echo site_url($t['bukti_transaksi']); ?>" style="max-height:100px;" class="img-thumbnail img-responsive">
                    <?php endif ?>
                </td>
				<td>
                    <a href="<?php echo site_url('admin/transaksi_pengeluaran/edit/'.$t['id_trans']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                    <a href="<?php echo site_url('admin/transaksi_pengeluaran/remove/'.$t['id_trans']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                </td>
            </tr>
        	<?php } ?>
        </table>
    </div>
</div>