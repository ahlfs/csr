<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $title; ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/logo-csr.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="/admin" class="logo d-flex align-items-center">
                <img src="assets/img/csr.png" alt="" />
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li>
                        <a class="nav-link scrollto active" href="/admin">Beranda</a>
                    </li>
                    <li class="dropdown">
                        <a href="#"><span>Proyek</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li class="dropdown">
                                <a href="#"><span>Laporan</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Laporan Pemda</a></li>
                                    <li><a href="#">Laporan Desa</a></li>
                                    <li><a href="#">Laporan Perusahaan</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#"><span>Publikasi</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Data Realisasi</a></li>
                            <li><a href="#">Laporan Statistik</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" id="DropdownProfile" role="button" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="img-profile rounded-circle" width="30px" height="30px" src="assets/img/logo-csr.png" />
                        </a>
                        <ul class="dropdown-menu animated--grow-in" aria-labelledby="DropdownProfile">
                            <a class="dropdown-item" href="/verify"> Verifikasi </a>
                            <a class="dropdown-item" href="/pendanaan"> Pengajuan Pendaan </a>
                            <a class="dropdown-item" href="/setting"> Kelola Akun </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                Logout
                            </a>
                        </ul>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->

    <!-- Modal Verify Start -->
    <div class="modal fade" id="VerifyModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"><strong>DETAIL</strong></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    NPWP :
                    <br />
                    Nama Perusahaan :
                    <br />
                    No. Telp Perusahaan :
                    <br />
                    Email Perusahaan :
                    <br />
                    Penanggung Jawab :
                    <br />
                    No. Telp Penanggung Jawab :
                    <br />
                    Email Penanggung Jawab :
                    <br />
                    File : <a href="#">Download</a>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Verify End -->

    <!-- ======= Hero Section Table 3 Row And 2 Column ======= -->
    <section id="hero" class="hero d-flex">
        <div class="container mt-5" data-aos="fade-up" data-aos-duration="1000">
            <div class="text-md-start">
                <h2><strong>Verifikasi Pendaftaran User</strong></h2>
            </div>
            <!-- search bar -->
            <div class="row mt-2">
                <div class="col-md-3">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari Perusahaan" aria-label="Recipient's username" aria-describedby="button-addon2" />
                    </div>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Perusahaan</th>
                        <th scope="col">No.Telp Perusahaan</th>
                        <th scope="col">Email Perusahaan</th>
                        <th scope="col">Tindak Lanjut</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php $i = 1; ?>
                    <?php foreach ($daftar_perusahaan as $dp) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $dp['nama_perusahaan']; ?></td>
                            <td><?= $dp['telp_perusahaan']; ?></td>
                            <td><?= $dp['email_perusahaan']; ?></td>
                            <td>
                                <a class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#VerifyModal">Detail</a>
                                <a class="btn btn-success btn-sm">Verifikasi</a>
                                <a class="btn btn-danger btn-sm">Tolak</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Corporate Social Responsibility (CSR)</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="https://instagram.com/rkh.yg_" target="_blank">Rkhyg</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>