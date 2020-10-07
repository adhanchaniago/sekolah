    <!--================Home Banner Area =================-->
    <section class="banner_area" style="background: url(<?php echo $web->bg_menu ?>) no-repeat center center;">
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="banner_content text-center">
                <h2>Berita</h2>
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
                <div class="col-lg-8 posts-list">
                    <div class="single-post row">
                        <?php foreach($v_artikel  as $ber){ ?>
                        <div class="col-lg-12">
                          <div class="feature-img">
                            <img class="img-fluid" src="<?php echo $ber['image'] ?>" alt="">
                          </div>
                        </div>
                        <div class="col-lg-12 col-md-12 blog_details">
                              <h2><?php echo $ber['name'] ?></h2>
                              <?php echo $ber['description'] ?>
                        </div>
                        <?php }?>
                    </div>
                </div>

