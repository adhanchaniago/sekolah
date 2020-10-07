    <!--================Home Banner Area =================-->
    <section class="banner_area" style="background: url(<?php echo $web->bg_menu ?>) no-repeat center center;">
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="banner_content text-center">
                <h2>Galeri</h2>
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
                        <?php foreach($album  as $alb){ ?>
                        <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                          <div class="thumb d-flex justify-content-sm-center">
                            <img class="img-fluid" src="<?php echo $alb['thum'] ?>" alt="" />
                          </div>
                          <div class="meta-text text-sm-center">
                            <?php echo anchor('galeri/view/'.$alb['id'],'<h4>'.$alb['name'].'</h4>')?>
                          </div>
                        </div>
                        <?php }?>
                      </div>
                    </div>
                </div>

