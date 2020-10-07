    <!--================ Start Home Banner Area =================-->
    <section class="home_banner_area" style="background: url(<?php echo $web->bg_home?>) no-repeat center;background-size: cover;">
      <div class="banner_inner">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="banner_content text-center">
                <h2 class="text-uppercase mt-4 mb-5">
                 <b> <?php echo $web->title?> </b>
                </h2>
                <!-- <div>
                  <a href="#" class="primary-btn2 mb-3 mb-sm-0">learn more</a>
                  <a href="#" class="primary-btn ml-sm-3 ml-0">see course</a>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ End Home Banner Area =================-->

    <!--================Blog Area =================-->
    <section class="blog_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog_left_sidebar">
                        <article class="row blog_item">
                          
                          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                              <?php $i=1; foreach($slide as $sli){ ?>
                              <div class="carousel-item <?php if ($i == 1) { echo "active";} ?>">
                                <img src="<?php echo $sli['image']?>" class="d-block w-100" alt="...">
                                <div class="carousel-caption">
                                  <h3><?php echo $sli['name']?></h3>
                                  <?php echo $sli['description']?>
                                </div>
                              </div>
                              <?php $i++;}?>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                          </div>
                        </article>
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
                
