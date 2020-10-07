<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Elmoline | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/back/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/back/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/back/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo base_url()?>assets/back/index2.html"><b>Elmoline</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <?php 
          if ($this->session->flashdata('message')) {
            echo '<p> '.$this->session->flashdata('message').'</p>';
          }
        ?>
        <?php if ($this->session->flashdata('success')) {?>
          <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
             <h4>  <i class="icon fa fa-check"></i> Success!</h4>
            <?php echo $this->session->flashdata('success');?>
          </div>
        <?php }elseif ($this->session->flashdata('failed')) {?>
          <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4>  <i class="icon fa fa-ban"></i> failed!</h4>
            <?php echo $this->session->flashdata('failed');?>
          </div>
        <?php }?>
      <p class="login-box-msg">Forgot Password</p>

      <?php echo form_open('forgot_password/reset_password/token/'.$token); ?>
        <div class="input-group mb-3">
          <?php echo form_password('password','','class="form-control" placeholder="Password"')?>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="input-group mb-3">
            <?php echo form_error('password'); ?>
        </div>

        <div class="input-group mb-3">
          <?php echo form_password('passconf','','class="form-control" placeholder="Retype Password"')?>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="input-group mb-3">
            <?php echo form_error('passconf'); ?>
        </div>

        <div class="row">
          <div class="col-12">
            <?php echo form_submit('submit', 'Submit','class="btn btn-primary btn-block"');?>
          </div>
          <!-- /.col -->
        </div>
      <?php echo form_close();?>   


      <p class="mb-1">
        <?php echo anchor('login','Back to Login','class="text-center"');?>
      </p>
<!--       <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p> -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url()?>assets/back/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url()?>assets/back/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>assets/back/dist/js/adminlte.min.js"></script>

</body>
</html>
