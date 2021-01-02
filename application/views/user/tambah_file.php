<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-sm-12 mb-3">

            <!-- Dropdown Card Example -->
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-right justify-content-between">
                    <div class="card-title">
                        <h3 class="m-0 font-weight-bold text-primary">Pretest 10 SQL Injection (SQLi)</h3>
                        <small class="m-0 font-weight-bold text-grey">ERVIN FIKOT M •00.18</small>
                        <br><br>
                        <small class="m-0 font-weight-bold text-grey">100 Poin</small>

                    </div>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-primary-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Salin link</a>
                            <a class="dropdown-item" href="#">Laporkan penyalahgunaan</a>
                        </div>
                    </div>
                </div>
                <!-- Divider -->
                <hr class="sidebar-divider my-0 bg-primary">
                <!-- Card Body -->
                <div class="card-body">
                    <h7 class="text-dark">Praktikum Keamanan Komputer Pertemuan 10 SQL Injection</h7><br><br>
                    <h7 class="text-dark">Ketentuan umum <br>
                        1. Pretest dapat di akses melalui Google Classroom sesuai slot masing-masing,<br>
                        2. Pretest dapat dikerjakan dengan melihat modul praktikum atau referensi lainnya,<br>
                        3. Dilarang bekerjasama dengan Praktikan lain dengan alasan apapun,<br>
                        4. Postest berbentuk Pdf dengan Format PRETEST– PERTEMUAN – NAMA – NIM – SLOT,<br>
                        5. Jika tidak mengumpulkan Pretest dianggap Inhal.<br><br>
                        Soal Pretest<br>
                        1. Jelaskan yang dimaksud SQL Injection (20 Point)<br>
                        2. Analisis dan Paparkan kosep dari SQL Injection (30 Point)<br>
                        3. Jelaskan Target Serangan pada SQL Injection (20 Point)<br>
                        4. Sebutkan dan jelaskan jenis situs yang dapat diserang dengan SQL Injection (20 Point)</h7>
                </div>
                <div class="card-footer">
                    <h6 class="m-0 font-weight-bold text-dark">Komentar Kelas</h6><br>

                    <form>
                        <div class="form-group row">
                            <img class="img-profile rounded-circle" width="28px" src="<?= base_url('assets/img/main/cindy.png') ?>">
                            <div class="col-sm-7">
                                <input type="password" class="form-control" id="inputPassword" placeholder="Tambahkan komentar kelas">
                            </div>
                            <button type="submit" class="btn btn-secondary"><i class="fas fa-caret-right"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-6 mb-3">

            <!-- Collapsable Card Example -->
            <div class="card">
                <!-- Card Header - Accordion -->
                <div class="card-header py-3 d-flex flex-row align-items-right justify-content-between">
                    <h4 class="m-0 font-weight-bold text-dark">Tugas Anda</h4>
                    <h7 class="text-success" style="float: right;">Ditugaskan</h7>
                </div>
                <!-- Card Content - Collapse -->
                <div class="card-body">
                    <div class="badge badge-light text-wrap" style="width: 23rem;">
                        <i class="fas fa-file-pdf text-danger mx-2"></i>Keamanan Komputer
                    </div>
                    <form>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <div class="dropdown no-arrow">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <button class="btn btn-light text-primary my-2" style="width: 23rem;">+ Tambah atau Buat</button>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-left shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#"><i class="fab fa-google-drive mx-2"></i>Google Drive</a>
                                        <a class="dropdown-item" href="#"><i class="fas fa-link mx-2"></i>Link</a>
                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target=".bd-example-modal-lg">
                                            <i class="fas fa-paperclip mx-2"></i>File</a>
                                        <div class="dropdown-divider"></div>
                                        <div class="dropdown-header">Buat baru</div>
                                        <a class="dropdown-item" href="#"><i class="fas fa-file-alt mx-2 text-primary"></i>Dokumen</a>
                                        <a class="dropdown-item" href="#"><i class="fas fa-file-video mx-2 text-warning"></i>Slide</a>
                                        <a class="dropdown-item" href="#"><i class="fas fa-file-excel mx-2 text-success"></i>Spreadsheet</a>
                                        <a class="dropdown-item" href="#"><i class="fas fa-file-image mx-2 text-danger"></i>Gambar</a>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary" style="width: 23rem;" data-toggle="modal" data-target="#exampleModal1">
                                    <h7>Tandai Sebagai Selesai</h7>
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModal1Label" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h7 class="modal-title" id="exampleModal1Label">Serahkan tugas ?</h7>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>1 Lampiran akan dikirim untuk "Keamanan Komputer"</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                <button type="button" onclick="window.location.href='<?= base_url('user/selesai'); ?>'" class="btn btn-primary">Kirim</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                </div>
                <div class="card-body">
                    <h6 class="m-0 font-weight-bold text-dark">Komentar pribadi</h6><br>
                    <form>
                        <div class="form-group row">
                            <img class="img-profile rounded-circle" width="28px" src="<?= base_url('assets/img/main/cindy.png') ?>">
                            <div class="col-sm-7">
                                <input type="password" class="form-control" id="inputPassword" placeholder="Tambahkan komentar pribadi">
                            </div>
                            <button type="submit" class="btn btn-secondary"><i class="fas fa-caret-right"></i></button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title text-dark" id="myLargeModalLabel"><i class="fab fa-google-drive mx-2"></i>Sisipkan file dengan Google Drive</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="terbaru-tab" data-toggle="tab" href="#terbaru" role="tab" aria-controls="terbaru" aria-selected="true">Terbaru</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="upload-tab" data-toggle="tab" href="#upload" role="tab" aria-controls="upload" aria-selected="false">Upload</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="drive-tab" data-toggle="tab" href="#drive" role="tab" aria-controls="drive" aria-selected="false">Drive</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="bintang-tab" data-toggle="tab" href="#bintang" role="tab" aria-controls="bintang" aria-selected="false">Berbintang</a>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="terbaru" role="tabpanel" aria-labelledby="terbaru-tab">
                        <div class="card-deck">
                            <div class="card">
                                <img src="<?= base_url('assets/img/main/kk.png') ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <a href="" class="card-title text-dark"><i class="fas fa-file-pdf text-danger mx-2"></i>Keamanan Komputer</a>
                                </div>
                            </div>
                            <div class="card">
                                <img src="<?= base_url('assets/img/main/pmob.png') ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <a href="" class="card-title text-dark"><i class="fas fa-file-pdf text-danger mx-2"></i>Pemrograman Mobile</a>

                                </div>
                            </div>
                            <div class="card">
                                <img src="<?= base_url('assets/img/main/statis.png') ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <a href="" class="card-title text-dark"><i class="fas fa-file-pdf text-danger mx-2"></i>Statistika</a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="upload" role="tabpanel" aria-labelledby="upload-tab">
                        <center><button type="button" class="btn btn-primary btn-sm my-5 md-2 mx-12 ">BROWSE</button><br>
                        </center>
                    </div>
                    <div class="tab-pane fade" id="drive" role="tabpanel" aria-labelledby="drive-tab">
                        <center><img src="<?= base_url('assets/img/main/box.png') ?>" class="img-profile my-5 mx-10" width="200px"></center>
                        <center>
                            <h7 class="font-weight-bold">Tidak ada apapun disini</h7><br>
                            <small>Tidak ada file atau folder disini</small>
                        </center>

                    </div>
                    <div class="tab-pane fade" id="bintang" role="tabpanel" aria-labelledby="bintang-tab">
                        <center><img src="<?= base_url('assets/img/main/box.png') ?>" class="img-profile my-5 mx-10" width="200px"></center>
                        <center>
                            <h7 class="font-weight-bold">Tidak ada apapun disini</h7><br>
                            <small>Tidak ada file atau folder disini</small>
                        </center>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>