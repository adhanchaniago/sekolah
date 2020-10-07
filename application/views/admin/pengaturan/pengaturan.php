  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Home</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
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
                <!-- <header></header>3 class="card-title">Title</h3> -->

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <?php foreach($pengaturan  as $row){ ?>
                  <?php echo form_open('admin/dasbor/pengaturan_update/'.$row['id'],'role="form"');?>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">URL Website</label>
                      <input name="url_web" type="text" value="<?php echo $row['url_web']?>" class="form-control" placeholder="Title">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Title</label>
                      <input name="title" type="text" value="<?php echo $row['title']?>" class="form-control" placeholder="Title">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Keywords</label>
                        <input type="text" name="keywords" class="form-control" value="<?php echo $row['keywords']?>" > 
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Description</label>
                      <textarea name="description" placeholder="Place some text here"
                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $row['description']?></textarea>
                      <!-- <textarea id="editor-ckeditor" name="keterangan"></textarea> -->
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Alamat</label>
                        <input type="text" name="alamat" class="form-control" value="<?php echo $row['alamat']?>" > 
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Telfone</label>
                        <input type="text" name="telfon" class="form-control" value="<?php echo $row['telfon']?>" > 
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                        <input type="text" name="email" class="form-control" value="<?php echo $row['email']?>" > 
                    </div>
                    <div class="form-group">
                      <label>Icon</label>
                      <br><span>Size Icon Width : 30px Heigth :30px</span>
                      <div class="input-group input-group">
                        <input type="text" id="icon" name="icon" value="<?php echo $row['icon'];?>" class="form-control">
                        <span class="input-group-btn">
                          <button class="btn btn-info btn-flat" type="button" data-toggle="modal" data-target="#bd-icon">Slect</button>
                          <div class="modal fade" id="bd-icon">
                            <div class="modal-dialog modal-xl">
                              <div class="modal-content">
                                <div class="modal-body">
                                  <iframe  width="100%" height="550" frameborder="0" id='image' src="<?php echo base_url()?>filemanager/dialog.php?type=1&field_id=icon"></iframe>
                                </div>
                              </div>
                              <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                          </div>
                          <!-- /.modal -->
                        </span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Logo</label>
                      <br><span>Size Icon Width : 158px Heigth :34px</span>
                      <div class="input-group input-group">
                        <input type="text" id="logo" name="logo" value="<?php echo $row['logo'];?>" class="form-control">
                        <span class="input-group-btn">
                          <button class="btn btn-info btn-flat" type="button" data-toggle="modal" data-target="#bd-logo">Slect</button>
                          <div class="modal fade" id="bd-logo">
                            <div class="modal-dialog modal-xl">
                              <div class="modal-content">
                                <div class="modal-body">
                                  <iframe  width="100%" height="550" frameborder="0" id='image' src="<?php echo base_url()?>filemanager/dialog.php?type=1&field_id=logo"></iframe>
                                </div>
                              </div>
                              <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                          </div>
                          <!-- /.modal -->
                        </span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Backgroun Home</label>
                      <br><span>Size Icon Width : 1020px Heigth :1000px</span>
                      <div class="input-group input-group">
                        <input type="text" id="home" name="bg_home" value="<?php echo $row['bg_home'];?>" class="form-control">
                        <span class="input-group-btn">
                          <button class="btn btn-info btn-flat" type="button" data-toggle="modal" data-target="#bd-home">Slect</button>
                          <div class="modal fade" id="bd-home">
                            <div class="modal-dialog modal-xl">
                              <div class="modal-content">
                                <div class="modal-body">
                                  <iframe  width="100%" height="550" frameborder="0" id='image' src="<?php echo base_url()?>filemanager/dialog.php?type=1&field_id=home"></iframe>
                                </div>
                              </div>
                              <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                          </div>
                          <!-- /.modal -->
                        </span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Backgroun Menu</label>
                      <br><span>Size Icon Width : 1920px Heigth :1056px</span>
                      <div class="input-group input-group">
                        <input type="text" id="about" name="bg_menu" value="<?php echo $row['bg_menu'];?>" class="form-control">
                        <span class="input-group-btn">
                          <button class="btn btn-info btn-flat" type="button" data-toggle="modal" data-target="#bd-about">Slect</button>
                          <div class="modal fade" id="bd-about">
                            <div class="modal-dialog modal-xl">
                              <div class="modal-content">
                                <div class="modal-body">
                                  <iframe  width="100%" height="550" frameborder="0" id='image' src="<?php echo base_url()?>filemanager/dialog.php?type=1&field_id=about"></iframe>
                                </div>
                              </div>
                              <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                          </div>
                          <!-- /.modal -->
                        </span>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->

                  <div class="box-footer">
                      <?php echo form_submit('submit', 'Simpan','class="btn btn-primary"');?>
                  <?php }?>
                    </div>
                  <?php echo form_close();?>
              </div>
              <!-- /.card-body -->
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>

  </div>