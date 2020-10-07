    <!--================Home Banner Area =================-->
    <section class="banner_area" style="background: url(<?php echo $web->bg_menu ?>) no-repeat center center;">
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="banner_content text-center">
                <h2>Direktori Siswa</h2>
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
                        <?php foreach($siswa  as $sis){ ?>
                        <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                          <div class="thumb d-flex justify-content-sm-center">
                            <img class="img-fluid" src="<?php echo $sis['foto']?>" alt="" />
                          </div>
                          <div class="meta-text text-sm-center">
                            <h4><?php echo $sis['nama']?></h4>
                            <p class="designation"><?php echo $sis['nis']?></p>
                            <div class="mb-4">
                            <p><?php echo $sis['tempat']?>, <?php echo $sis['tanggal_lahir']?></p>
                            <p>Kelas : <?php echo $sis['kelas']?></p>
                            </div>
                          </div>
                        </div>
                        <?php }?>

                      </div>
                    </div>
                </div>

