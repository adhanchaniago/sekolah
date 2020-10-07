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
            <div class="card">
            <div class="card-header">
              <h3 class="card-title">Users</h3>
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
            <div class="card-body">
              <div class="col-3" style="margin-bottom: 10px;">
                <?php echo anchor('admin/dasbor/user_tambah','<i class="fas fa-plus "></i> user','class="btn btn-block btn-outline-info"');?>
              </div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Username</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $i=1; foreach($user as $row){ ?>
                <tr>
                  <td><?php echo $i++;?></td>
                  <td><?php echo $row['username']?></td>
                  <td><?php 
                        $answer = $row['status'];  
                          if ($answer == "1") {          
                              echo 'Aktif';      
                          }
                          else {
                              echo 'Tidak Aktif';
                          }          
                        ?>
                  </td>
                  <td>
                    <div class="btn-group">
                      <?php echo anchor('admin/dasbor/user_edit/'.$row['id'],'<i class="fas fa-edit "></i> Edit','title="Edit" class="btn btn-warning btn-sm"');?> 
                      <?php echo anchor('admin/dasbor/user_password_edit/'.$row['id'],'<i class="fas fa-lock "></i> Edit Password','title="Edit" class="btn btn-info btn-sm"');?> 
                      <?php echo anchor('admin/dasbor/user_delete/'.$row['id'],'<i class="fas fa-trash "></i> Delete','title="Delete" class="btn btn-danger btn-sm"');?>
                    </div>
                  </td>
                </tr>
                <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>Username</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
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