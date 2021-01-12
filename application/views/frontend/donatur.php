  <section id="portfolio" class="section-padding wow fadeInUp delay-05s" style=" min-height: 100vh;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-center">
            <h2>Selamat datang <span class="deco"><?php echo $donatur["nama_donatur"]; ?></span></h2>
            <center><img src="<?php echo site_url($donatur['foto_donatur']); ?>" style="max-height:100px;" class="img-rounded img-thumbnail"></center>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
          </div>
        </div>
        
        <div class="col-md-8 col-md-push-2">
            <?php if(strpos($this->session->userdata("pesan"),"Donasi")!== false): ?>
            <div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong><?php echo $this->session->userdata("pesan") ?></strong>
            </div>
            <?php endif ?>
            <form enctype="multipart/form-data" action="<?php echo base_url("home") ?>/donasi" method="post" role="form" class="contactForm">
                <div class="form-group"> 
                    <label>Jumlah Donasi:</label>
                    <input type="number" name="jumlah_donasi" class="form-control" id="jumlah_donasi" placeholder="Nominal Donasi"  required />
                    <input type="hidden" name="id_donatur" value="<?php echo $donatur['id_donatur'] ?>">
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <label>Keterangan Donasi:</label>
                    <textarea class="form-control" name="keterangan_donasi" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Keternagan" required ></textarea>
                    <div class="validation"></div>
                </div>
                <div class="form-group"> 
                    <label>Bukti Transfer:</label><br>
                    <!-- <input type="file" name="bukti_resi" required /> -->
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                      <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
                      <div>
                        <span class="btn btn-default btn-file">
                        <span class="fileinput-new">Pilih resi</span>
                        <span class="fileinput-exists">Ganti</span>
                        <input type="file" name="bukti_resi"></span>
                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Hapus</a>
                      </div>
                    </div>
                    <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-money fa-fw"></i> Donasikan</button></div>
            </form>
        </div>
        <div class="col-md-8 col-md-push-2"><hr></div>

        <div class="col-md-8 col-md-push-2">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Riwayat Donasi</h3>
            </div>
            <table class="panel-body table table-bordered"> 
              <thead> 
                <tr> 
                  <th class="text-center">No</th> 
                  <th>Tanggal</th> 
                  <th class="text-center">Besar Donasi</th>
                </tr> 
              </thead> 
              <tbody>
              <?php $i=0; foreach ($donasi as $row): $i++; ?>
               <tr> 
                 <th class="text-center" scope="row"><?php echo $i ?></th> 
                 <td><?php echo date_format(date_create($row["tanggal_donasi"]),"d M Y") ?></td> 
                 <td class="text-center">Rp <?php echo $row["jumlah_donasi"] ?></td> 
               </tr> 
               <?php endforeach ?> 
             </tbody> 
           </table>
         </div>
       </div>

        <div class="col-md-8 col-md-push-2">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Laporan Dana Donasi</h3>
            </div>
            <table class="panel-body table table-bordered"> 
              <thead> 
                <tr> 
                  <th class="text-center">No</th> 
                  <th>Tanggal</th> 
                  <th class="text-center">Besar Transaksi</th>
                  <th class="text-center">Keterangan Transaksi</th>
                </tr> 
              </thead> 
              <tbody>
              <?php $i=0; foreach ($trans as $row): $i++; ?>
               <tr> 
                 <th class="text-center" scope="row"><?php echo $i ?></th> 
                 <td><?php echo date_format(date_create($row["tanggal_transaksi"]),"d M Y") ?></td> 
                 <td class="text-center">Rp <?php echo $row["besar_pengeluaran"] ?></td> 
                 <td><?php echo $row["keterangan_donasi"] ?></td> 
               </tr> 
               <?php endforeach ?> 
             </tbody> 
           </table>
         </div>
       </div>

       <div class="col-md-8 col-md-push-2">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Daftar Anak Asuh</h3>
            </div>
            <table class="panel-body table table-bordered"> 
              <thead> 
                <tr> 
                  <th class="text-center">No</th> 
                  <th class="text-center">Foto</th> 
                  <th class="text-center">Nama</th> 
                  <th class="text-center">Jenis Kelamin</th>
                  <th class="text-center">Tanggal Lahir</th>
                </tr> 
              </thead> 
              <tbody>
              <?php $i=0; foreach ($anak as $row): $i++; ?>
               <tr> 
                 <th class="text-center" scope="row"><?php echo $i ?></th> 
                 <td class="text-center" width="50px">
                  <!-- <a href="#" data-toggle="modal" data-target="#idmodal<?php echo $i ?>"> -->
                    <img src="<?php echo site_url($row["foto"]) ?>" height="50px">
                  <!-- </a>

                  <div style="z-index: 999999999;" class="modal fade bs-example-modal-md" id="idmodal<?php echo $i ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                    <div class="modal-dialog modal-md" role="document">
                      <div class="modal-content">
                        <div class="modal-body">
                        <img src="<?php echo site_url($row["foto"]) ?>" width="100%">
                        </div>
                      </div>
                    </div>
                  </div> -->
                 </td> 
                 <td><?php echo $row["nama"] ?></td> 
                 <td class="text-center"><?php echo $row["jenis_kelamin"] ?></td> 
                 <td class="text-center"><?php echo $row["tanggal_lahir"] ?></td> 
               </tr> 
               <?php endforeach ?> 
             </tbody> 
           </table>
         </div>
       </div>

        
      </div>
    </div>
  </section>