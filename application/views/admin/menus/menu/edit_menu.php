  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  	<!-- Content Header (Page header) -->
  	<div class="content-header">
  		<div class="container-fluid">
  			<div class="row mb-2">
  				<div class="col-sm-6">
  					<h1 class="m-0 text-dark">Edit Menu</h1>
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
  							<?php if ($this->session->flashdata('success')) { ?>
  								<div class="alert alert-success alert-dismissable">
  									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  									<h4> <i class="icon fa fa-check"></i> Success!</h4>
  									<?php echo $this->session->flashdata('success'); ?>
  								</div>
  							<?php } elseif ($this->session->flashdata('failed')) { ?>
  								<div class="alert alert-danger alert-dismissable">
  									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  									<h4> <i class="icon fa fa-check"></i> failed!</h4>
  									<?php echo $this->session->flashdata('failed'); ?>
  								</div>
  							<?php } ?>
  							<!-- <header></header>3 class="card-title">Title</h3> -->

  							<div class="card-tools">
  								<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
  									<i class="fas fa-minus"></i></button>
  								<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
  									<i class="fas fa-times"></i></button>
  							</div>
  						</div>
  						<div class="card-body">
  							<?php foreach ($edit_menu  as $row) { ?>
  								<?php echo form_open('admin/menus/menu/update_menu/' . $row['id'], 'role="form"'); ?>
  								<div class="card-body">
  									<div class="form-group">
  										<label>URL</label>
  										<?php echo form_input('menu_url', $row['menu_url'], 'class="form-control" placeholder="URL"'); ?>
  									</div>
  									<div class="form-group">
  										<label>Menu</label>
  										<?php echo form_input('menu_title', $row['menu_title'], 'class="form-control" placeholder="Menu"'); ?>
  									</div>
  									<div class="form-group">
  										<label for="menu_target">Target</label>
  										<select class="form-control" name="menu_target">
  											<option <?php if ($row['menu_target'] == '_blank') {
															echo 'selected="selected"';
														} ?> value="_blank">Blank</option>
  											<option <?php if ($row['menu_target'] == '_self') {
															echo 'selected="selected"';
														} ?> value="_self">Self</option>
  											<option <?php if ($row['menu_target'] == '_parent') {
															echo 'selected="selected"';
														} ?> value="_parent">Parent</option>
  											<option <?php if ($row['menu_target'] == '_top') {
															echo 'selected="selected"';
														} ?> value="_top">Top</option>
  										</select>
  									</div>

  								</div>
  								<!-- /.card-body -->

  								<div class="box-footer">
  									<?php echo form_submit('submit', 'Simpan', 'class="btn btn-primary"'); ?>
  								</div>
  								<?php echo form_close(); ?>
  							<?php } ?>
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
