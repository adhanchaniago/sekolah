<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Password</h3>
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
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php foreach($user_edit as $row){ ?>
                <?php echo form_open('admin/dasbor/user_password_update/'.$row['id']);?>
                  <div class="card-body">
                    <div class="form-group">
                      <label>Old Password</label>
                        <?php echo form_password('oldpassword','','class="form-control" placeholder="Old Password" ');?>
                        <?php echo form_error('oldpassword','<p class="text-danger">','</p>'); ?>
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                        <?php echo form_password('password','','class="form-control" placeholder="Password" ');?>
                        <?php echo form_error('password','<p class="text-danger">','</p>'); ?>
                    </div>
                    <div class="form-group">
                      <label>Retype Password</label>
                        <?php echo form_password('passconf','','class="form-control" placeholder="Retype Password" ');?>
                        <?php echo form_error('passconf','<p class="text-danger">','</p>'); ?>
                    </div>
                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <?php echo form_submit('submit', 'Submit','class="btn btn-primary"');?>
                  </div>
                <?php echo form_close();?>
              <?php }?>
            </div>
          </div>
          <!-- Left col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper