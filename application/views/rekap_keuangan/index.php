<div class="grid-form">
    <div class="grid-form1">
        <h3 id="forms-horizontal" style="margin-bottom:10px;">Rekap Keuangan</h3>
        <div class="col-sm-8 pull-right" style="padding:0;">
            <form method="POST" action="<?php echo site_url('admin/rekap_keuangan/index') ?>">
            <div class='input-group' style="padding:0;">
                <span class="input-group-addon">Tanggal : </span>
                <input type='text' class="form-control date" name="tgl1" value="<?php echo $this->input->post('tgl1')?$this->input->post('tgl1'):date('d-m-Y') ?>">
                <span class="input-group-addon">
                    <span class="fa fa-calendar"></span>
                </span>
                <span class="input-group-addon">Sampai</span>
                <input type='text' class="form-control date" name="tgl2" value="<?php echo $this->input->post('tgl2')?$this->input->post('tgl2'):date('d-m-Y') ?>">
                <span class="input-group-addon">
                    <span class="fa fa-calendar"></span>
                </span>
                <div class="input-group-btn">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-filter"></i> Filter</button>
                </div>
            </div>
            </form>
        </div>
        <table class="table table-striped table-bordered">
            <tr>
				<th>Tanggal</th>
				<th>Keterangan</th>
                <th>Pemasukan</th>
				<th>Pengeluaran</th>
            </tr>
        	<?php
                $tot_dbt = 0;
                $tot_krd = 0;
                $tot_saldo = 0;
                foreach($rekap_keuangan as $t){ 
                    $tot_dbt += $t['debit'];
                    $tot_krd += $t['kredit'];
            ?>
            <tr>
				<td><?php echo $t['tgl']; ?></td>
				<td><?php echo $t['ket']; ?></td>
                <td class="text-right info"><?php echo rp($t['debit']); ?></td>
				<td class="text-right danger"><?php echo rp($t['kredit']); ?></td>
            </tr>
        	<?php } 
                if (count($rekap_keuangan)>0) {
            ?> 
            <tr>
                <td colspan="2" class="text-right"><strong>Total : </strong></td>
                <td class="text-right info"><strong><?php echo rp($tot_dbt); ?></strong></td>
                <td class="text-right danger"><strong><?php echo rp($tot_krd); ?></strong></td>
            </tr>
            <tr>
                <td colspan="2" class="text-right"><strong>TOTAL SALDO : </strong></td>
                <td colspan="2" class="text-right primary"><strong><?php echo rp($tot_dbt - $tot_krd); ?></strong></td>
            </tr>
            <?php
                }
            ?>

        </table>
    </div>
</div>