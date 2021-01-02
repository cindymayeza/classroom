<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

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
                        <img class="img-profile rounded-circle" src="<?= base_url('assets/img/main/cindy.png') ?>">
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
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <div class="row">

                <div class="col-md-4 col-sm-12 mb-3">
                    <div class="card">
                        <div class="card-header text-white bg-primary py-3 d-flex flex-row align-items-right justify-content-between ">
                            <div class="card-title">
                                <a href="" class="text-white">
                                    <h5>Prak.KK Rabu 15.00</h5>
                                </a><br><br>
                                <a href="" class="text-white">
                                    <h7>Faisal Fajri Rahani</h7>
                                </a><br>
                            </div>
                            <div class="dropdown no-arrow ">
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">Pindahkan</a>
                                    <a class="dropdown-item" href="#">Batalkan Pendaftaran</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            Batas waktu besok <br>
                            <a href="<?= base_url('user/postest'); ?>" class="text-dark">07.00 - Postest</a>
                        </div>

                        <div class="card-footer">
                            <i class="far fa-folder" style="float: right;"></i>
                            <i class="far fa-id-badge fa-lg mx-3" style="float: right;"></i>

                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <div class="card-header bg-success py-3 d-flex flex-row align-items-right justify-content-between ">
                            <div class="card-title">
                                <a href="" class="text-white">
                                    <h5>Praktikum SO Kamis...</h5>
                                </a><br><br>
                                <a href="" class="text-white">
                                    <h7>Rizky Akbari</h7>
                                </a><br>
                            </div>
                            <div class="dropdown no-arrow ">
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">Pindahkan</a>
                                    <a class="dropdown-item" href="#">Batalkan Pendaftaran</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            Tenggat : Kamis <br>
                            <a href="" class="text-dark">23.59 - PRETEST</a>
                        </div>

                        <div class="card-footer">
                            <i class="far fa-folder" style="float: right;"></i>
                            <i class="far fa-id-badge fa-lg mx-3" style="float: right;"></i>

                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <div class="card-header bg-info py-3 d-flex flex-row align-items-right justify-content-between ">
                            <div class="card-title">
                                <a href="" class="text-white">
                                    <h5>PRAK Pmobile Jum'at,...</h5>
                                </a>
                                <a href="" class="text-white">
                                    <small>Jum'at, 15.00-16.30</small>
                                </a><br><br>
                                <a href="" class="text-white">
                                    <h7>Aji Rohmat</h7>
                                </a><br>
                            </div>
                            <div class="dropdown no-arrow ">
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">Pindahkan</a>
                                    <a class="dropdown-item" href="#">Batalkan Pendaftaran</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            Tenggat: Jum'at <br>
                            <a href="" class="text-dark">23.59 - POSTEST</a>
                        </div>

                        <div class="card-footer">
                            <i class="far fa-folder" style="float: right;"></i>
                            <i class="far fa-id-badge fa-lg mx-3" style="float: right;"></i>

                        </div>
                    </div>

                </div>

            </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Main Content -->