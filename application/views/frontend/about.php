  <section id="portfolio" class="section-padding wow fadeInUp delay-05s" style=" min-height: 100vh;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="title text-center">Ingin <span class="deco">berdonasi?</span></h1>
        </div>
        <div class="col-md-12">
          <div id="myGrid" class="grid-padding">

          <div class="col-sm-8">
            <h3>Ingin berdonasi ?</h3>
            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-sm-4">
            <div class="panel panel-default">
              <div class="panel-body">
                <h3>Login untuk berdonasi... </h3>
                <?php if(strpos($this->session->userdata("pesan"),"Login")!== false): ?>
                <div class="alert alert-success alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <strong><?php echo $this->session->userdata("pesan") ?></strong>
                </div>
                <?php endif ?>
                <form method="POST" action="<?php echo site_url("home/login_donatur") ?>">
                  <div class="form-group">
                    <label>Username :</label>
                    <input type="text" name="username" class="form-control" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <label>Password :</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <button class="btn btn-success btn-block" type="submit"><i class="fa fa-sign-in"></i> Masuk</button>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-link btn-block" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal"><i class="fa fa-user"></i> Buat akun baru</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Register Donatur</h4>
      </div>
        <?php echo form_open_multipart('home/add_donatur',array("class"=>"form-horizontal")); ?>
      <div class="modal-body">
        <div class="form-group">
          <label for="tanggal_daftar" class="col-md-2 control-label">Tanggal Daftar</label>
          <div class="col-md-10">
            <input type="text" name="tanggal_daftar" readonly value="<?php echo date('d-m-Y') ?>" class="form-control" id="tanggal_daftar" />
          </div>
        </div>
        <div class="form-group">
          <label for="nama_donatur" class="col-md-2 control-label">Nama Donatur</label>
          <div class="col-md-10">
            <input type="text" name="nama_donatur" value="<?php echo $this->input->post('nama_donatur'); ?>" class="form-control" id="nama_donatur" required/>
          </div>
        </div>
        <div class="form-group">
          <label for="jenis_kelamin" class="col-md-2 control-label">Jenis Kelamin</label>
          <div class="col-md-10">
            <select name="jenis_kelamin" class="form-control">
              <option value="">-Pilih Jenis Kelamin-</option>
              <?php 
                  $jenis_kelamin_values = array(
                'Laki-laki'=>'Laki-laki',
                'Perempuan'=>'Perempuan',
              );
              foreach($jenis_kelamin_values as $value => $display_text)
              {
                $selected = ($value == $this->input->post('jenis_kelamin')) ? ' selected="selected"' : "";

                echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
              } 
              ?>
            </select>
          </div>
        </div>
      <div class="form-group">
        <label for="alamat" class="col-md-2 control-label">Alamat</label>
        <div class="col-md-10">
          <input type="text" name="alamat" value="<?php echo $this->input->post('alamat'); ?>" class="form-control" id="alamat" />
        </div>
      </div>
      <div class="form-group">
        <label for="email" class="col-md-2 control-label">Email</label>
        <div class="col-md-10">
          <input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
        </div>
      </div>
      <div class="form-group">
        <label for="cp" class="col-md-2 control-label">Cp</label>
        <div class="col-md-10">
          <input type="text" name="cp" value="<?php echo $this->input->post('cp'); ?>" class="form-control" id="cp" required/>
        </div>
      </div>
      <div class="form-group">
        <label for="username" class="col-md-2 control-label">Username</label>
        <div class="col-md-10">
          <input type="text" name="username" value="<?php echo $this->input->post('username'); ?>" class="form-control" id="username" required/>
        </div>
      </div>
      <div class="form-group">
        <label for="password" class="col-md-2 control-label">Password</label>
        <div class="col-md-10">
          <input type="password" name="password" value="<?php echo $this->input->post('password'); ?>" class="form-control" id="password" required/>
        </div>
      </div>
      <div class="form-group">
        <label for="foto_donatur" class="col-md-2 control-label">Foto Donatur</label>
        <div class="col-md-10">
          <!-- <input type="text" name="foto_donatur" value="<?php echo $this->input->post('foto_donatur'); ?>" class="form-control" id="foto_donatur" /> -->
          <div class="fileinput fileinput-new" data-provides="fileinput">
            <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
            <div>
              <span class="btn btn-default btn-file">
              <span class="fileinput-new">Pilih foto</span>
              <span class="fileinput-exists">Ganti</span>
              <input type="file" name="foto"></span>
              <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Hapus Foto</a>
            </div>
          </div>
        </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Simpan</button>
      </div>
    <?php echo form_close(); ?>
    </div>
  </div>
</div>