
    <!--================ Start footer Area  =================-->
    <footer class="footer-area" style="padding: 20px 0px;">
      <div class="container">
        <div class="row footer-bottom d-flex justify-content-between">
          <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> | <?php echo $web->title?>
          </p>
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