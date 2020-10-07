  <body>
    <!--================ Start Header Menu Area =================-->
    <header class="header_area white-header">
      <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand" href="<?php echo base_url();?>">
              <img class="logo-2" src="<?php echo $web->logo ?>" alt="" />
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon-bar"></span> <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div
              class="collapse navbar-collapse offset"
              id="navbarSupportedContent"
            >
              <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item">
                  <?php echo anchor('','Home','class="nav-link"')?>
                </li>
                <li class="nav-item submenu dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    Profil
                  </a>
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <?php echo anchor('profil_lengkap','Profil Lengkap','class="nav-link"')?>
                      </li>
                    <li class="nav-item">
                      <?php echo anchor('struktur_organisasi','Struktur Organisasi','class="nav-link"')?>
                    </li>
                    <li class="nav-item">
                      <?php echo anchor('sejarah','Sejarah','class="nav-link"')?>
                    </li>
                    <li class="nav-item">
                      <?php echo anchor('visi_misi','Visi dan Misi','class="nav-link"')?>
                    </li>
                    <li class="nav-item">
                      <?php echo anchor('fasilitas','Fasilitas','class="nav-link"')?>
                    </li>
                  </ul>
                </li>
                <li class="nav-item submenu dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    Direktori
                  </a>
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <?php echo anchor('direktori_guru','Direktori Guru','class="nav-link"')?>
                    </li>
                    <li class="nav-item">
                      <?php echo anchor('direktori_staf','Direktori Staf','class="nav-link"')?>
                    </li>
                    <li class="nav-item">
                      <?php echo anchor('direktori_siswa','Direktori Siswa','class="nav-link"')?>
                    </li>
                    <li class="nav-item">
                      <?php echo anchor('direktori_alumni','Direktori Alumni','class="nav-link"')?>
                    </li>
                  </ul>
                </li>
                <li class="nav-item submenu dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    Prestasi
                  </a>
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <?php echo anchor('prestasi_sekolah','Prestasi Sekolah','class="nav-link"')?>
                    </li>
                    <li class="nav-item">
                      <?php echo anchor('prestasi_guru','Prestasi Guru','class="nav-link"')?>
                    </li>
                    <li class="nav-item">
                      <?php echo anchor('prestasi_siswa','Prestasi Siswa','class="nav-link"')?>
                    </li>
                  </ul>
                </li>
                <li class="nav-item submenu dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    Kesiswaan
                  </a>
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <?php echo anchor('osis','OSIS','class="nav-link"')?>
                    </li>
                    <li class="nav-item">
                      <?php echo anchor('ekstra_kulikuler','Ekstra Kulikuler','class="nav-link"')?>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                      <?php echo anchor('galeri','Galeri','class="nav-link"')?>
                </li>
                <li class="nav-item">
                      <?php echo anchor('kontak','Kontak','class="nav-link"')?>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!--================ End Header Menu Area =================-->
