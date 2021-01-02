<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row d-flex align-items-center justify-content-center">
        <div class="col-md-4 col-sm-12 mb-3">
            <div class="card ">
                <div class="card-body">
                    <div class="sidebar-brand d-flex align-items-center justify-content-center">
                        <h3 class="sidebar-brand-text text-primary"><strong>G</strong></h3>
                        <h3 class="sidebar-brand-text text-danger"><strong>o</strong></h3>
                        <h3 class="sidebar-brand-text text-warning"><strong>o</strong> </h3>
                        <h3 class="sidebar-brand-text text-primary"><strong>g</strong> </h3>
                        <h3 class="sidebar-brand-text text-success"><strong>l</strong></h3>
                        <h3 class="sidebar-brand-text text-danger"><strong>e</strong> </h3>
                    </div>

                    <center>
                        <h5><strong class="text-dark">Login</strong></h5><br>
                        <h7 class="text-dark">menggunakan Akun Google</h7><br>
                        <h7 class="text-primary">Pelajari selengkapnya</h7>
                    </center>


                    <form class="user" method="post" action="<?= base_url('user/login_email'); ?>">
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="email atau ponsel">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            <small id="emailHelp" class="form-text text-primary">Lupa email?</small>
                        </div>


                        <small class="text-primary">Buat akun</small><br>

                        <button type="submit" class="bg-primary" class="text-right" style="float: right;">Berikutnya</button>
                    </form>

                </div>
            </div>
        </div>

    </div>
    <!-- End of Main Content -->
</div>
<!-- End of Main Content -->