  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tambah Artikel</h1>
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
                <?php echo form_open('admin/dasbor/artikel_add/','role="form"');?>
                  <div class="card-body">
                    <div class="form-group">
                      <label>Kategori</label>
                      <select class="form-control" name="article_category">
                        <option value="" <?php echo set_select('article_category','', TRUE); ?> >Pilih Kategori</option>
                        <?php foreach($kategori  as $row){ ?>
                          <option value="<?php echo $row['id']?>" 
                            <?php echo set_select('article_category', $row['name']);?>>
                            <?php echo $row['name']?>
                          </option>
                        <?php }?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Judul</label>
                      <?php echo form_input('name','','class="form-control" placeholder="Judul"');?>
                    </div>
                    <div class="form-group">
                      <label>Description</label>
                      <br>
                      <span>Responsive Image: Image Properties -&gt; Kelas Stylesheet = img-fluid</span>
                      <textarea id="editor-ckeditor" class="form-control" name="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Thumnail</label>
                        <br><span>Ukuran Foto Width : 300px Heigth :348px</span>
                
                      <div class="input-group input-group-sm">
                        <input type="text" id="as" value="" name="image" class="form-control">
                        <span class="input-group-btn">
                          <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal-xl">Slect</button>
                          <div class="modal fade" id="modal-xl">
                            <div class="modal-dialog modal-xl">
                              <div class="modal-content">
                                <div class="modal-body">
                                  <iframe  width="1000" height="550" frameborder="0" id='image' src="<?php echo base_url()?>filemanager/dialog.php?type=1&field_id=as"></iframe>
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
                        <label>Status</label>
                        <div class="radio">
                          <label>
                            <input type="radio" name="status" id="status1" value="1">
                            Aktif
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="status" id="status2" value="0">
                            Tidak Aktif
                          </label>
                        </div>
                      </div>

                  </div>
                  <!-- /.card-body -->

                  <div class="box-footer">
                      <?php echo form_submit('submit', 'Simpan','class="btn btn-primary"');?>
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