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
                        <h5><strong class="text-dark">Cindy Mayeza</strong></h5>
                        <p class="text-dark">cindymayeza@gmail.com</p><br>
                    </center><br>


                    <form class="user" method="post" action="<?= base_url('user/login_pass'); ?>">
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Tampilkan sandi</label><br>
                        </div>


                        <small class="text-primary">Lupa sandi?</small><br>

                        <button onclick="window.location.href='<?= base_url('user/dashboard'); ?>'" class="bg-primary" class="text-right" style="float: right;">Berikutnya</button>
                    </form>

                </div>
            </div>
        </div>

    </div>
    <!-- End of Main Content -->
</div>
<!-- End of Main Content -->