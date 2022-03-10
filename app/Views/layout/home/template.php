<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/fontawesome/all.min.css') ?>">
    <!-- Bootstrap 5 -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <!-- Owl Carousel -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/owl.carousel.min.css') ?>">
    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/theme-style.css') ?>">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/responsive-style.css') ?>">

    <title>Web Desa Lampenai</title>
</head>

<body>

    <?= $this->include('layout/home/navbar'); ?>
    <?= $this->renderSection('content'); ?>

    <!-- Footer Section Start  -->
    <section class="footer-desa d-flex align-items-center resv-desk">
        <div class="container-fluid container text-center resv-desk">
            <div class="d-flex justify-content-center">
                <div class="brand-content-footer ">
                    <img class="d-inline-block align-text-top footer-logo" src="<?= base_url('assets/img/codebreak.png'); ?>" alt="" width="46" height="46">
                    <img class="d-inline-block align-text-top footer-logo" src="<?= base_url('assets/img/codebreak.png'); ?>" alt="" width="46" height="46">
                    <h3 class="brand-footer-name">Desa<br><?= $identitasDesa['nama_desa']; ?></h3>
                    <p class="brand-footer-subname">Kabupaten<br>Luwu timur</p>

                    <div class="footer-sosmed">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="brand-content-footer">
                    <h3 class="brand-footer-title text-center">Alamat Kantor</h3>
                    <p class="brand-footer-description text-center">
                        <?= $identitasDesa['jalan']; ?><br>
                        Desa <?= $identitasDesa['nama_desa']; ?><br>
                        Kecamatan <?= $identitasDesa['kecamatan']; ?><br>
                        Kabupaten <?= $identitasDesa['kabupaten']; ?><br>
                        Provinsi <?= $identitasDesa['provinsi']; ?>, <?= $identitasDesa['kode_pos']; ?>
                    </p>
                </div>
                <div class="brand-content-footer">
                    <h3 class="brand-footer-title text-center">No. Telpon Penting</h3>
                    <p class="brand-footer-description text-center">
                        Babinsa Senga Selatan: 085398645944<br>
                        Bhabinkamtibmas Senga Selatan: 085106085577<br>
                        Bidan Desa Senga Selatan: 082187563443
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Section End  -->

    <!-- Footer Mobile Section Start  -->
    <section class="footer-desa-mobile align-items-center resv-mobile ">
        <div class="container-fluid container text-center resv-mobile ">
            <div class="justify-content-center">
                <div class="brand-content-footer brand-content-footer-atas">
                    <img class="d-inline-block align-text-top footer-logo" src="<?= base_url('assets/img/codebreak.png'); ?>" alt="" width="46" height="46">
                    <img class="d-inline-block align-text-top footer-logo" src="<?= base_url('assets/img/codebreak.png'); ?>" alt="" width="46" height="46">
                    <h3 class="brand-footer-name">Desa<br>Lampenai</h3>
                    <p class="brand-footer-subname">Kabupaten<br>Luwu timur</p>

                    <div class="footer-sosmed">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="brand-content-footer">
                    <h3 class="brand-footer-title text-center">Alamat Kantor</h3>
                    <p class="brand-footer-description text-center">
                        Jl. Andi Benni No.27 Dusun Kalobang<br>
                        Desa Senga Selatan<br>
                        Kecamatan Belopa<br>
                        Kabupaten Luwu<br>
                        Provinsi Sulawesi Selatan, 91983
                    </p>
                </div>
                <div class="brand-content-footer">
                    <h3 class="brand-footer-title text-center">No. Telpon Penting</h3>
                    <p class="brand-footer-description text-center">
                        Babinsa Senga Selatan: 085398645944<br>
                        Bhabinkamtibmas Senga Selatan: 085106085577<br>
                        Bidan Desa Senga Selatan: 082187563443
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Mobile Section End  -->

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
    <!-- Bootstrap 5 -->
    <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
    <!-- ScrollIt -->
    <script src="<?php echo base_url('assets/js/scrollIt.min.js'); ?>"></script>
    <!-- Owl Carousel -->
    <script src="<?php echo base_url('assets/js/owl.carousel.min.js') ?>"></script>
    <!-- Main js -->
    <script src="<?php echo base_url('assets/js/main.js') ?>"></script>
</body>

</html>