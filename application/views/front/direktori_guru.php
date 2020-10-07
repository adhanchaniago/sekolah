    <!--================Home Banner Area =================-->
    <section class="banner_area" style="background: url(<?php echo $web->bg_menu ?>) no-repeat center center;">
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="banner_content text-center">
                <h2>Direktori Guru</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Blog Area =================-->
    <section class="blog_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog_left_sidebar">
                      <div class="row justify-content-center d-flex align-items-center">
                        <?php foreach($guru  as $gur){ ?>
                        <div class="col-lg-6 col-md-6 col-sm-12 single-trainer">
                          <div class="thumb d-flex justify-content-sm-center">
                            <img class="img-fluid" src="<?php echo $gur['foto']?>" alt="" />
                          </div>
                          <div class="meta-text text-sm-center">
                            <h4><?php echo $gur['nama']?></h4>
                            <p class="designation"><?php echo $gur['nip/nis']?></p>
                            <div class="mb-4">
                            <p><?php echo $gur['studi']?></p>
                            <p><?php echo $gur['tempat']?>, <?php echo $gur['tanggal_lahir']?></p>
                            </div>
                          </div>
                        </div>
                        <?php }?>

                      </div>
                    </div>
                </div>

