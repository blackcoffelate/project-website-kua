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
                            <h6 class="h2 text-white d-inline-block mb-0">Data Buku Nikah</h6>
                            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                    <li class="breadcrumb-item"><a href="#"><i class="ni ni-books"></i></a></li>
                                    <li class="breadcrumb-item"><a href="#">Data Buku Nikah</a></li>
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
                                    <h3 class="mb-0">Data Buku Pernikahan</h3>
                                    <h5>Kantor Urusan Agama</h5>
                                </div>
                                <div class="col text-right">
                                    <a href="add_stok" class="btn btn-sm btn-primary">Tambah Stok</a>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">

                            <table id="example" class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" style="width:10px;">#</th>
                                        <th scope="col" style="width:20px;">Jenis</th>
                                        <th scope="col" style="width:3px;">Buku Masuk</th>
                                        <th scope="col" style="width:3px;">Buku Keluar</th>
                                        <th scope="col" style="width:3px;">Buku Sisah</th>
                                        <th scope="col" style="width:3px;">Model</th>
                                        <th scope="col" style="width:3px;">Seri/Nomor</th>
                                        <th scope="col" style="width:3px;">Tanggal</th>
                                        <th scope="col" style="width:3px;"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Buku Nikah</td>
                                        <td>90</td>
                                        <td>5</td>
                                        <td>85</td>
                                        <td>NA</td>
                                        <td>LA 100 387 561 - LA 100 387 650</td>
                                        <td>Fri, 03/06/2021</td>
                                        <td>
                                            <a href="#!" class="btn btn-sm btn-primary"><i class="fa fa-gear"></i></a>
                                            <a href="#!" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="mb-0">Data Pegeluaran Buku Pernikahan</h3>
                                    <h5>Kantor Urusan Agama</h5>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">

                            <table id="example1" class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" style="width:10px;">Tanggal</th>
                                        <th scope="col" style="width:20px;">Uraian</th>
                                        <th scope="col" style="width:3px;">Banyaknya</th>
                                        <th scope="col" style="width:3px;"></th>
                                        <th scope="col" style="width:3px;"></th>
                                        <th scope="col" style="width:3px;">N, NA, NB, R atau RA</th>
                                        <th scope="col" style="width:3px;"></th>
                                        <th scope="col" style="width:3px;">Satuan</th>
                                        <th scope="col" style="width:3px;">Nomor Bukti</th>
                                        <th scope="col" style="width:3px;"></th>
                                    </tr>
                                    <tr>
                                        <th style="width:10px;"></h>
                                        <th style="width:20px;"></h>
                                        <th style="width:3px;">Masuk</h>
                                        <th style="width:3px;">Keluar</h>
                                        <th style="width:3px;">Sisa</h>
                                        <th style="width:3px;">Model</h>
                                        <th style="width:3px;">Seri Nomor</h>
                                        <th style="width:3px;"></h>
                                        <th style="width:3px;">Penerima</h>
                                        <th style="width:3px;">Pengeluaran</h>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Fri, 03/06/2021</th>
                                        <td>Oktagi Arianda Saputra/Muthiara Chelly Siantar</td>
                                        <td>3</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>NA</td>
                                        <td>LA 100 387 561</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
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