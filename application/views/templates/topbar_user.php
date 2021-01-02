<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">



    <!-- Main Content -->
    <div id="content">



        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <div class="sidebar-brand-text text-dark">
                <h5><i class="fa fa-bars mx-2"></i>Prak.KK Jum'at 15.00</h5>
            </div>
            <!-- Sidebar Toggle (Topbar) jika dibuka di hp maka garis 3 berfungsi-->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>
            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-plus"></i></i>
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">
                            Gabung ke Kelas
                        </a>
                        <a class="dropdown-item" href="#">
                            Buat Kelas
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-th mx-1"></i>
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">
                            Gabung ke Kelas
                        </a>
                        <a class="dropdown-item" href="#">
                            Buat Kelas
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="img-profile rounded-circle" width="28px" src="<?= base_url('assets/img/main/cindy.png') ?>">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="<?= base_url('user/tambah_akun'); ?>">
                            <i class="fas fa-user fa-sm "></i>
                            Tambah akun
                        </a>
                        <a class="dropdown-item" href="<?= base_url('user/index'); ?>">
                            <i class="fas fa-sign-out-alt "></i>
                            Logout
                        </a>
                    </div>
                </li>

            </ul>

        </nav>
        <!-- End of Topbar -->