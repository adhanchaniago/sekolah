  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  	<!-- Content Header (Page header) -->
  	<div class="content-header">
  		<div class="container-fluid">
  			<div class="row mb-2">
  				<div class="col-sm-6">
  					<h1 class="m-0 text-dark">Sub Menu</h1>
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
  							<div class="box-header">
  								<!-- Extra large modal -->
  								<?php echo anchor('admin/menus/submenu/tambahsubmenu', '<i class="fa fa-plus-square"></i> Tambah Sub Menu', 'type="button" class="btn btn-primary"') ?>
  							</div>
  							<table id="example1" class="table table-bordered table-striped">
  								<thead>
  									<tr>
  										<th>#</th>
  										<th>Menu</th>
  										<th>Sub Menu</th>
  										<th>URL</th>
  										<th>Type</th>
  										<th>Aksi</th>
  									</tr>
  								</thead>
  								<tbody>
  									<?php $i = 1;
										foreach ($submenu  as $row) { ?>
  										<tr>
  											<td><?php echo $i++; ?></td>
  											<td><?php echo $row['menu_parent_id'] ?></td>
  											<td><?php echo $row['menu_title'] ?></td>
  											<td><?php echo $row['menu_url'] ?></td>
  											<td><?php echo $row['menu_type'] ?></td>
  											<td>
  												<div class="btn-group">
  													<?php echo anchor('admin/menus/submenu/edit_sub_menu/' . $row['id'], '<i class="fas fa-edit"></i> Edit', 'class="btn btn-success"') ?>
  													<?php echo anchor('admin/menus/submenu/hapus_sub_menu/' . $row['id'], '<i class="fas fa-trash"></i> Hapus', 'class="btn btn-danger"') ?>
  												</div>
  											</td>
  										</tr>
  									<?php } ?>
  								</tbody>
  								<tfoot>
  									<tr>
  										<th>#</th>
  										<th>Menu</th>
  										<th>Sub Menu</th>
  										<th>URL</th>
  										<th>Type</th>
  										<th>Aksi</th>
  									</tr>
  								</tfoot>
  							</table>
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
