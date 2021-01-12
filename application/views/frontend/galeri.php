
<section id="galeri" class="section-padding wow fadeIn delay-05s" style="padding-top: 20px; background-color:#ddd;">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3 class="deco text-center " style="margin-bottom:30px;">Galeri Foto</h3>
        <?php foreach ($galeri as $d): ?>
        <?php if ($d['src']!=""): ?>
        <div class="col-sm-3">
          <a href="#" data-toggle="modal" data-target="#galeri_<?php echo $d['id'] ?>">
            <img src="<?php echo site_url($d['src']); ?>" class="img-thumbnail img-responsive">
          </a>
        </div>
      <?php endif ?>
    <?php endforeach ?>
  </div>
</div>
</div>
</section>

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