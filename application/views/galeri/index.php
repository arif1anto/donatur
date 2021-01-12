<div class="grid-form">
    <div class="grid-form1">
        <div class="pull-right">
            <a href="<?php echo site_url('admin/galeri/add'); ?>" class="btn btn-success btn-sm">Add</a> 
        </div>
        <h3 id="forms-horizontal">Data Galeri</h3>
        <div class="row">
        <?php foreach ($galeri as $d): ?>
        <div class="col-sm-3">
          <a href="#" data-toggle="modal" data-target="#galeri_<?php echo $d['id'] ?>">
            <img src="<?php echo site_url($d['src']); ?>" class="img-thumbnail img-responsive">
          </a>
          <p class="text-center">
            <a href="<?php echo site_url('admin/galeri/edit/'.$d['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
            <a href="<?php echo site_url('admin/galeri/remove/'.$d['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
          </p>
        </div>
        <?php endforeach ?>
        </div>
        
        <?php foreach ($galeri as $d): ?>
          <?php if ($d['src']!=""): ?>
          <div class="modal fade" id="galeri_<?php echo $d['id'] ?>" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-body" style="padding:0;">
                  <img src="<?php echo site_url($d['src']); ?>" class="img-thumbnail img-responsive">
                </div>
                <div class="modal-footer">
                  <p class="text-left">
                  <?php echo $d['ket'] ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
        <?php endif ?>
        <?php endforeach ?>
    </div>
</div>