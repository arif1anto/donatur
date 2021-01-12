  <section id="contact" class="section-padding wow fadeIn delay-05s" style="padding-top: 100px;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="contact-sec text-center">
            <h2>Informasi lebih lanjut, hubungi kami:</h2>
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p> -->
          </div>
        </div>
        
        <div class="col-md-8 col-md-push-2">
            <?php if(strpos($this->session->userdata("pesan"),"Pesan")!== false): ?>
            <div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong><?php echo $this->session->userdata("pesan") ?></strong>
            </div>
            <?php endif ?>
            <div id="errormessage"></div>
            <form action="<?php echo base_url("home") ?>/kirim_kontak" method="post" role="form" class="contactForm">
                <div class="form-group">
                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars"  required />
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email"  required />
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="pesan" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message" required ></textarea>
                    <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit" class="btn btn-primary btn-lg">Send Message</button></div>
            </form>
        </div>
        
      </div>
    </div>
  </section>