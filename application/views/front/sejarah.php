    <!--================Home Banner Area =================-->
    <section class="banner_area img-fluid" style="background: url(<?php echo $web->bg_menu ?>) no-repeat center center;">
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="banner_content text-center">
                <h2><?php echo $konten->name?></h2>
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
                        <article class="row blog_item">
                          <div class="col-md-12">
                            <div class="blog_post">
                              <div class="blog_details">
                                <?php echo $konten->description?>
                              </div>
                            </div>
                          </div>
                        </article>
                    </div>
                </div>
