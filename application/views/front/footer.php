                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget author_widget">
                            <img class="author_img rounded-circle" src="<?php echo $kepsek->image?>" alt="">
                            <h4><?php echo $kepsek->name?></h4>
                            <p>Kepala Sekolah</p>
                              <div class="br"></div>
                              <p><b>Sambutan Kepala Sekolah</b></p>
                              <?php
                                $title = $kepsek->description;
                                $arr = explode(" ", $title);
                                $limit = 55;
                                $new = [];

                                if (count($arr) > $limit) {
                                    for($i = 0; $i < $limit; $i++) {
                                        array_push($new, $arr[$i]);
                                    }
                                }
                                if($new) {
                                    $new = implode(" ", $new);
                                    print_r($new);
                                }
                                else {
                                    print_r($title);  // Output : Rasang Beam Steal Valve
                                }
                              ?>
                              <div>
                              <?php echo anchor('home/kepala_sekolah/'.$kepsek->id,'Baca Selengkapnya...')?>
                                
                              </div>
                                <div class="br"></div>
                        </aside>

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Berita Terbaru</h3>
                            <?php foreach($berita  as $ber){ ?>
                            <div class="media post_item">
                                <div class="media-body">
                                    <?php echo anchor('berita/view/'.$ber['slug'],'<h3>'.$ber['name'].'</h3>')?>
                                    <p><?php echo $ber['created_at']?></p>
                                </div>
                            </div>
                            <?php }?>
                            <div class="br"></div>
                        </aside>
                       
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Informasi</h4>
                            <ul class="list cat-list">
                              <?php foreach($informasi  as $inf){ ?>
                                <li>
                                    <?php echo anchor('informasi/view/'.$inf['slug'],'<p>'.$inf['name'].'</p>','class="d-flex justify-content-between"')?>
                                </li>
                              <?php }?>
                            </ul>
                            <div class="br"></div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Blog Area =================-->


    <!--================ Start Testimonial Area =================-->
    <div class="testimonial_area" >
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3">Link Terkait</h2>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="testi_slider owl-carousel">
            <?php foreach($link  as $lin){ ?>
            <div class="testi_item">
              <div class="row">
                <div class="col-lg-4 col-md-6">
                  <img src="<?php echo $lin['image']?>" alt="" />
                </div>
                <div class="col-lg-8">
                  <div class="testi_text">
                    <a href="<?php echo $lin['url']?>" target="_blank" >
                      <h4><?php echo $lin['name']?></h4>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <?php }?>
          </div>
        </div>
      </div>
    </div>
    <!--================ End Testimonial Area =================-->
    <!--================ Start footer Area  =================-->
    <footer class="footer-area" style="padding: 20px 0px;">
      <div class="container">
        <div class="row footer-bottom d-flex justify-content-between">
          <div class="col-lg-8 col-sm-12 footer-text m-0 text-white">
            <p>
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> | <?php echo $web->title?>
            </p>
          </div>
          <div class="col-lg-4 col-sm-12 footer-text m-0 text-white">
            <?php 
              $date       = date("Y-m-d");
              $pengunjunghariini  = $this->db->query("SELECT * FROM web_visitor WHERE date='".$date."' GROUP BY ip")->num_rows();
              $dbpengunjung       = $this->db->query("SELECT COUNT(hits) as hits FROM web_visitor")->row(); 
              $totalpengunjung    = isset($dbpengunjung->hits)?($dbpengunjung->hits):0;
              $bataswaktu         = time() - 300;
              $pengunjungonline   = $this->db->query("SELECT * FROM web_visitor WHERE online > '".$bataswaktu."'")->num_rows();

            ?> 
            <table style="color: aliceblue; font-size: 16px;">
              <tbody>
                <tr>
                  <td>Pengunjung Hari ini</td>
                  <td>: <?php echo $pengunjunghariini ?> Orang</span></td>
                </tr>
                <tr>
                  <td>Total Pengunjung</td>
                  <td>: <?php echo $totalpengunjung ?> Orang</td>
                </tr>
                <tr>
                  <td>Pengunjung Online</td>
                  <td>: <?php echo $pengunjungonline ?> Orang</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </footer>
    <!--================ End footer Area  =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url()?>assets/front/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url()?>assets/front/js/popper.js"></script>
    <script src="<?php echo base_url()?>assets/front/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/front/vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="<?php echo base_url()?>assets/front/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url()?>assets/front/js/owl-carousel-thumb.min.js"></script>
    <script src="<?php echo base_url()?>assets/front/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?php echo base_url()?>assets/front/js/mail-script.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="<?php echo base_url()?>assets/front/js/gmaps.min.js"></script>
    <script src="<?php echo base_url()?>assets/front/js/theme.js"></script>

    <!-- DATA TABES SCRIPT -->
    <script src="<?php echo base_url()?>assets/front/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/front/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
    </script>
  </body>
</html>