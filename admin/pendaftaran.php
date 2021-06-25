<!DOCTYPE html>
<html>

<head>
    <?php require_once "../view/style.php" ?>
</head>

<body>

    <?php require_once "../view/navbar.php" ?>

    <div class="main-content" id="panel">

        <?php require_once "../view/menubar.php" ?>

        <div class="header pb-6 d-flex align-items-center"
            style="min-height: 150px; background-image: url(../assets/img/brand/banner.jpg); background-size: cover; background-position: center top;">

            <span class="mask bg-gradient-default opacity-8"></span>

        </div>

        <div class="container-fluid mt--6">
            <div class="row">
                <div class="col-xl-12 order-xl-1">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">Pendaftaran </h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form>
                                <h6 class="heading-small text-muted mb-4">Informasi</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-username">Nama Desa</label>
                                                <input type="text" id="input-username" class="form-control" placeholder="Nama Desa ...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-4" />
                                <h6 class="heading-small text-muted mb-4">Data Pria</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-username">Nama Lengkap</label>
                                                <input type="text" id="input-username" class="form-control" placeholder="Nama Lengkap ...">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-username">Tanggal Lahir</label>
                                                <input type="date" id="input-username" class="form-control" placeholder="Nama Lengkap ...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-username">Pekerjaan</label>
                                                <input type="text" id="input-username" class="form-control" placeholder="Pekerjaan ...">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-username">Alamat</label>
                                                <input type="text" id="input-username" class="form-control" placeholder="Nama Lengkap ...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                                <label class="form-control-label" for="input-email">Status</label>
                                                <select class="form-control" name="commodities">
                                                    <option class="form-control" value="" selected disabled>Status</option>
                                                    <option class="form-control" value="">-</option>
                                                    <option class="form-control" value="">Jejaka</option>
                                                    <option class="form-control" value="">Perawan</option>
                                                    <option class="form-control" value="">Duda</option>
                                                    <option class="form-control" value="">Janda</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-username">Pas Foto</label>
                                                <input type="file" id="input-username" class="form-control" placeholder="Nama Lengkap ...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-4" />
                                <h6 class="heading-small text-muted mb-4">Data Wanita</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-username">Nama Lengkap</label>
                                                <input type="text" id="input-username" class="form-control" placeholder="Nama Lengkap ...">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-username">Tanggal Lahir</label>
                                                <input type="date" id="input-username" class="form-control" placeholder="Nama Lengkap ...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-username">Pekerjaan</label>
                                                <input type="text" id="input-username" class="form-control" placeholder="Pekerjaan ...">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-username">Alamat</label>
                                                <input type="text" id="input-username" class="form-control" placeholder="Nama Lengkap ...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                                <label class="form-control-label" for="input-email">Status</label>
                                                <select class="form-control" name="commodities">
                                                    <option class="form-control" value="" selected disabled>Status</option>
                                                    <option class="form-control" value="">-</option>
                                                    <option class="form-control" value="">Jejaka</option>
                                                    <option class="form-control" value="">Perawan</option>
                                                    <option class="form-control" value="">Duda</option>
                                                    <option class="form-control" value="">Janda</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-username">Pas Foto</label>
                                                <input type="file" id="input-username" class="form-control" placeholder="Nama Lengkap ...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-4" />
                                <h6 class="heading-small text-muted mb-4">Data Wali Nikah</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-username">Nama Lengkap</label>
                                                <input type="text" id="input-username" class="form-control" placeholder="Nama Lengkap ...">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-username">Tanggal Lahir</label>
                                                <input type="date" id="input-username" class="form-control" placeholder="Nama Lengkap ...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-username">Nasab</label>
                                                <input type="text" id="input-username" class="form-control" placeholder="Pekerjaan ...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-4" />
                                <h6 class="heading-small text-muted mb-4">Data Mas Kawin</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-username">Nama Mas Kawin</label>
                                                <input type="text" id="input-username" class="form-control" placeholder="Nama Lengkap ...">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-username">Status</label>
                                                <input type="text" id="input-username" class="form-control" placeholder="Nama Lengkap ...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-4" />
                                <h6 class="heading-small text-muted mb-4">Data Saksi</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-username">Nama Saksi 1</label>
                                                <input type="text" id="input-username" class="form-control" placeholder="Nama Lengkap ...">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-username">Usia</label>
                                                <input type="text" id="input-username" class="form-control" placeholder="Usia ...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-username">Nama Saksi 2</label>
                                                <input type="text" id="input-username" class="form-control" placeholder="Nama Lengkap ...">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-username">Usia</label>
                                                <input type="text" id="input-username" class="form-control" placeholder="Usia ...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-4" />
                                <h6 class="heading-small text-muted mb-4">Data Nomor Seri</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-username">Kode Seri</label>
                                                <input type="text" id="input-username" class="form-control" placeholder="Nama Lengkap ...">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-username">Nomor Seri</label>
                                                <input type="text" id="input-username" class="form-control" placeholder="Usia ...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-4" />
                                <div class="col-12 text-right">
                                    <a href="#!" class="btn btn-primary">Submit</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <footer class="footer pt-0">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6">
                        <div class="copyright text-center  text-lg-left  text-muted">
                            &copy; <script>
                            document.write(new Date().getFullYear())
                            </script> <a href="../admin" class="font-weight-bold ml-1" target="_blank">Kantor Urusan
                                Agama</a>
                        </div>
                    </div>
                </div>
            </footer>

        </div>
    </div>
    
    <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
    <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <script src="../assets/js/argon.js?v=1.2.0"></script>

</body>
</html>