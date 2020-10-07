    <!--================Home Banner Area =================-->
    <section class="banner_area" style="background: url(<?php echo $web->bg_menu ?>) no-repeat center center;">
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="banner_content text-center">
                <h2>Kontak</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Contact Area =================-->
    <section class="contact_area section_gap">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div class="contact_info">
              <div class="info_item">
                <i class="ti-home"></i>
                <h6><?php echo $web->alamat?></h6>
                <p></p>
              </div>
              <div class="info_item">
                <i class="ti-headphone"></i>
                <h6><a href="tel:<?php echo $web->telfon?>"><?php echo $web->telfon?></a></h6>
                <p></p>
              </div>
              <div class="info_item">
                <i class="ti-email"></i>
                <h6><a href="mailto:<?php echo $web->email?>" target="_blank"><?php echo $web->email?></a></h6>
                <p></p>
              </div>
            </div>
          </div>
          <div class="col-lg-9">
            <?php if ($this->session->flashdata('success')) {?>
              <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                 <h4>  <i class="icon fa fa-check"></i> Success!</h4>
                <?php echo $this->session->flashdata('success');?>
              </div>
            <?php }elseif ($this->session->flashdata('failed')) {?>
              <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4>  <i class="icon fa fa-check"></i> failed!</h4>
                <?php echo $this->session->flashdata('failed');?>
              </div>
            <?php }?>
            <?php echo form_open('kontak/send','class="row contact_form" id="contactForm" novalidate="novalidate"');?>
              <div class="col-md-6">
                <div class="form-group">
                  <?php echo form_input('nama','','class="form-control" id="nama" placeholder="Nama"');?>
                </div>
                <div class="form-group">
                  <?php echo form_input('email','','class="form-control" id="email" placeholder="Email"');?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" name="description" id="pesan" rows="1" placeholder="Pesan"></textarea>
                </div>
              </div>
              <div class="col-md-12 text-right">
                <?php echo form_submit('submit', 'Kirim Pesan','class="btn primary-btn"');?>
              </div>
            <?php echo form_close();?>

          </div>
        </div>
      </div>
    </section>
    <!--================Contact Area =================-->


