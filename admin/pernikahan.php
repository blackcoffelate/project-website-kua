<!DOCTYPE html>
<html>

<head>
    <?php require_once "../view/style.php" ?>
</head>

<body>

    <?php require_once "../view/navbar.php" ?>

    <div class="main-content" id="panel">

        <?php require_once "../view/menubar.php" ?>

        <div class="header bg-primary pb-6">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                            <h6 class="h2 text-white d-inline-block mb-0">Data Pernikahan</h6>
                            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                    <li class="breadcrumb-item"><a href="#"><i class="ni ni-favourite-28"></i></a></li>
                                    <li class="breadcrumb-item"><a href="#">Data Pernikahan</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid mt--6">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="mb-0">Data Pernikahan</h3>
                                    <h5>Kantor Urusan Agama</h5>
                                </div>
                                <div class="col text-right">
                                    <a href="pendaftaran" class="btn btn-sm btn-primary">Pendaftaran Pernikahan</a>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">

                            <table id="example1" class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" style="width:10px;">#</th>
                                        <th scope="col" style="width:20px;">Nama Desa</th>
                                        <th scope="col" style="width:3px;">Nama Pria</th>
                                        <th scope="col" style="width:3px;">Nama Wanita</th>
                                        <th scope="col" style="width:3px;">Wali Nikah</th>
                                        <th scope="col" style="width:3px;">Mas Kawin</th>
                                        <th scope="col" style="width:3px;">Saksi</th>
                                        <th scope="col" style="width:3px;">Foto Mempelai</th>
                                        <th></th>
                                        <th scope="col" style="width:3px;">Nomor Seri</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <td>Taman Sari</td>
                                        <td>Kurniawan</td>
                                        <td>Sri Wahyuni</td>
                                        <td>Sabar</td>
                                        <td>Rp. 100.000</td>
                                        <td>Sabar</td>
                                        <td><img style="width:100px; height:120px;" src="../assets/img/theme/team-1.jpg"/></td>
                                        <td><img style="width:100px; height:120px;" src="../assets/img/theme/team-3.jpg"/></td>
                                        <td>29/07/1995 -pengantin</td>
                                        <td>
                                            <a href="#!" class="btn btn-sm btn-primary"><i class="fa fa-gear"></i></a>
                                            <a href="#!" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                        </td>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>29/07/1995 -pengantin</td>
                                            <td>29/07/1995 -pengantin</td>
                                            <td>29/07/1995 -wali</td>
                                            <td>Tunai</td>
                                            <td>53 Tahun</td>
                                            <td>68/68/9/2021</td>
                                            <td></td>
                                            <td>100386675</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>Wiraswasta</td>
                                            <td>Staff</td>
                                            <td>NASAB</td>
                                            <td></td>
                                            <td>Timan</td>
                                            <td></td>
                                            <td></td>
                                            <td>LA</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>Natar</td>
                                            <td>Natar</td>
                                            <td></td>
                                            <td></td>
                                            <td>60 Tahun</td>
                                            <td></td>
                                            <td></td>
                                            <td>31/01/2021</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>Jejaka</td>
                                            <td>Perawan</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tr>
                                </tbody>
                            </table>

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
    <script src="../assets/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="../assets/vendor/chart.js/dist/Chart.extension.js"></script>
    <script src="../assets/js/argon.js?v=1.2.0"></script>
    <script src="../assets/js/jquery.dataTables.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#example').DataTable({
            // dom: 'Bfrtip',
            // buttons: [
            //     'copy', 'csv', 'excel', 'pdf', 'print'
            // ]
        });
    });
    $(document).ready(function() {
        $('#example1').DataTable({
            // dom: 'Bfrtip',
            // buttons: [
            //     'copy', 'csv', 'excel', 'pdf', 'print'
            // ]
            "ordering": false
        });
    });
    </script>

</body>

</html>