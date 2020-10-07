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
                <h3 class="card-title">Add User</h3>
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
                <?php echo form_open('admin/dasbor/user_add/');?>
                  <div class="card-body">
                    <div class="form-group">
                      <label>Username</label>
                        <?php echo form_input('username','','class="form-control" placeholder="Username" ');?>
                        <?php echo form_error('username','<p class="text-danger">','</p>'); ?>
                      </div>
                    <div class="form-group">
                      <label>Name</label>
                        <?php echo form_input('name','','class="form-control" placeholder="Name" ');?>
                        <?php echo form_error('name','<p class="text-danger">','</p>'); ?>
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                        <input type="email" name="email" value="" class="form-control" placeholder="Email"  >
                        <?php echo form_error('email','<p class="text-danger">','</p>'); ?>
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
                    
                      
                    <div class="form-group">
                      <label>Status</label>
                      <div class="radio">
                        <label>
                          <input type="radio" name="status" id="status1" value="1">
                          Aktif
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="status" id="status2" value="0" required>
                          Tidak Aktif
                        </label>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <?php echo form_submit('submit', 'Submit','class="btn btn-primary"');?>
                  </div>
                <?php echo form_close();?>
            </div>
          </div>
          <!-- Left col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->