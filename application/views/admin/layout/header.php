<body class="hold-transition sidebar-mini layout-fixed text-sm">
	<div class="wrapper">

		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
				</li>
			</ul>

			<!-- Right navbar links -->
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<?php echo anchor('admin/login/signout', '<i class="fas fa-power-off"></i> Sign Out', 'class="nav-link" role="button"') ?>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
						<i class="fas fa-th-large"></i>
					</a>
				</li>
			</ul>
		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user panel (optional) -->
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
					</div>
					<div class="info">
						<a href="#" class="d-block"><?php echo $this->session->userdata('nama'); ?></a>
					</div>
				</div>

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column nav-flat nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
						<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

						<li class="nav-item">
							<?php echo anchor('admin/dasbor/', '<i class="nav-icon fas fa-th"></i> <p>Kepala Sekolah</p>', 'class="nav-link"') ?>
						</li>
						<li class="nav-item">
							<?php echo anchor('admin/dasbor/home', '<i class="nav-icon fas fa-th"></i> <p>Home</p>', 'class="nav-link"') ?>
						</li>
						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-copy"></i>
								<p>
									Menus
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<?php echo anchor('admin/menus/menu', '<i class="fas fa-archive nav-icon"></i> <p>Menu</p>', 'class="nav-link"') ?>
								</li>
								<li class="nav-item">
									<?php echo anchor('admin/menus/submenu', '<i class="fas fa-list nav-icon"></i> <p>Sub Menu</p>', 'class="nav-link"') ?>
								</li>
							</ul>
						</li>
						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-copy"></i>
								<p>
									Artikel
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<?php echo anchor('admin/dasbor/kategori_artikel', '<i class="fas fa-archive nav-icon"></i> <p>Kategori</p>', 'class="nav-link"') ?>
								</li>
								<li class="nav-item">
									<?php echo anchor('admin/dasbor/artikel', '<i class="fas fa-list nav-icon"></i> <p>List</p>', 'class="nav-link"') ?>
								</li>
							</ul>
						</li>
						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-copy"></i>
								<p>
									Profil
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<?php echo anchor('admin/dasbor/profil_lengkap', '<i class="far fa-circle nav-icon"></i> <p>Profil Lengkap</p>', 'class="nav-link"') ?>
								</li>
								<li class="nav-item">
									<?php echo anchor('admin/dasbor/struktur_organisasi', '<i class="far fa-circle nav-icon"></i> <p>Struktur Organisasi</p>', 'class="nav-link"') ?>
								</li>
								<li class="nav-item">
									<?php echo anchor('admin/dasbor/sejarah', '<i class="far fa-circle nav-icon"></i> <p>Sejarah</p>', 'class="nav-link"') ?>
								</li>
								<li class="nav-item">
									<?php echo anchor('admin/dasbor/visi_misi', '<i class="far fa-circle nav-icon"></i> <p>Visi dan Misi</p>', 'class="nav-link"') ?>
								</li>
								<li class="nav-item">
									<?php echo anchor('admin/dasbor/fasilitas', '<i class="far fa-circle nav-icon"></i> <p>Fasilitas</p>', 'class="nav-link"') ?>
								</li>
							</ul>
						</li>
						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-copy"></i>
								<p>
									Direktori
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<?php echo anchor('admin/dasbor/bidang_studi', '<i class="far fa-circle nav-icon"></i> <p>Bidang Studi</p>', 'class="nav-link"') ?>
								</li>
								<li class="nav-item">
									<?php echo anchor('admin/dasbor/direktori_guru', '<i class="far fa-circle nav-icon"></i> <p>Direktori Guru</p>', 'class="nav-link"') ?>
								</li>
								<li class="nav-item">
									<?php echo anchor('admin/dasbor/direktori_staf', '<i class="far fa-circle nav-icon"></i> <p>Direktori Staf</p>', 'class="nav-link"') ?>
								</li>
								<li class="nav-item">
									<?php echo anchor('admin/dasbor/direktori_siswa', '<i class="far fa-circle nav-icon"></i> <p>Direktori Siswa</p>', 'class="nav-link"') ?>
								</li>
								<li class="nav-item">
									<?php echo anchor('admin/dasbor/direktori_alumni', '<i class="far fa-circle nav-icon"></i> <p>Direktori Alumni</p>', 'class="nav-link"') ?>
								</li>
							</ul>
						</li>
						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-copy"></i>
								<p>
									Prestasi
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<?php echo anchor('admin/dasbor/prestasi_sekolah', '<i class="far fa-circle nav-icon"></i> <p>Prestasi Sekolah</p>', 'class="nav-link"') ?>
								</li>
								<li class="nav-item">
									<?php echo anchor('admin/dasbor/prestasi_guru', '<i class="far fa-circle nav-icon"></i> <p>Prestasi Guru</p>', 'class="nav-link"') ?>
								</li>
								<li class="nav-item">
									<?php echo anchor('admin/dasbor/prestasi_siswa', '<i class="far fa-circle nav-icon"></i> <p>Prestasi Siswa</p>', 'class="nav-link"') ?>
								</li>
							</ul>
						</li>
						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-copy"></i>
								<p>
									Kesiswaan
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<?php echo anchor('admin/dasbor/osis', '<i class="far fa-circle nav-icon"></i> <p>Osis</p>', 'class="nav-link"') ?>
								</li>
								<li class="nav-item">
									<?php echo anchor('admin/dasbor/ekstra_kulikuler', '<i class="far fa-circle nav-icon"></i> <p>Ekstra Kulikuler</p>', 'class="nav-link"') ?>
								</li>
							</ul>
						</li>
						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-copy"></i>
								<p>
									Galeri
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<?php echo anchor('admin/dasbor/kategori_galeri', '<i class="fas fa-archive nav-icon"></i> <p>Kategori</p>', 'class="nav-link"') ?>
								</li>
								<li class="nav-item">
									<?php echo anchor('admin/dasbor/galeri', '<i class="fas fa-list nav-icon"></i> <p>List</p>', 'class="nav-link"') ?>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<?php echo anchor('admin/dasbor/slide', '<i class="nav-icon fas fa-th"></i> <p>Slide</p>', 'class="nav-link"') ?>
						</li>
						<li class="nav-item">
							<?php echo anchor('admin/dasbor/link', '<i class="nav-icon fas fa-th"></i> <p>Link</p>', 'class="nav-link"') ?>
						</li>
						<li class="nav-item">
							<?php echo anchor('admin/dasbor/kontak', '<i class="nav-icon fas fa-th"></i> <p>Kontak</p>', 'class="nav-link"') ?>
						</li>






						<li class="nav-header">Administrator</li>
						<li class="nav-item">
							<?php echo anchor('admin/dasbor/user', '<i class="nav-icon fas fa-th"></i> <p>User</p>', 'class="nav-link"') ?>
						</li>
						<li class="nav-item">
							<?php echo anchor('admin/dasbor/pengaturan', '<i class="nav-icon fas fa-th"></i> <p>Pengaturan</p>', 'class="nav-link"') ?>
						</li>
					</ul>
				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>
