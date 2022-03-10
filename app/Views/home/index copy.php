<?= $this->extend('layout/home/template'); ?>

<?= $this->section('content'); ?>
<!--Header Section Start-->
<section class="header d-flex align-items-center">
    <div class="container-fluid container">
        <div class="row align-items-center">
            <div class="col-md-7">
                <div class="header-text">
                    <h1>Selamat Datang Website Desa Lampenai</h1>
                    <p>
                        Fokus Pengembangan Desa Lampenai
                    </p>

                    <div class="d-flex flex-row justify-content-start text-center">
                        <div class="item-header">
                            <div class="group-navbar-item">
                                <img class="img-item" src="<?= base_url('assets/img/Image1.png'); ?>" alt="">
                                <p class="text-item">
                                    Penyelenggaraan Pemerintahan Desa
                                </p>
                            </div>
                        </div>

                        <div class="item-header">
                            <div class="group-navbar-item">
                                <img class="img-item" src="<?= base_url('assets/img/Image1.png'); ?>" alt="">
                                <p class="text-item">
                                    Pelaksanaan pembangunan Desa
                                </p>
                            </div>
                        </div>

                        <div class="item-header">
                            <div class="group-navbar-item">
                                <img class="img-item" src="<?= base_url('assets/img/Image1.png'); ?>" alt="">
                                <p class="text-item">
                                    Pembinaan Kemasyarakatan Desa
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn header-btn">Selengkapnya</button>
            </div>
            <div class="col-md-5 text-center">
                <div class="header-img-parent">
                    <img class="header-img" src="<?= base_url('assets/img/codebreak.png'); ?>" alt="Logo">
                </div>
            </div>
        </div>
    </div>
</section>
<!--Header Section End-->

<!-- Profil Kepala Desa Section Start -->
<section class="profil-kades d-flex align-items-center" data-scroll-index="0">
    <div class="container-fluid container">
        <div class="row align-items-center">
            <div class="col-md-7">
                <div class="profil-kades-text">
                    <h1>Andi Muhammad Arfan Basmin, SH</h1>
                    <h2>Kepala Desa Senga Selatan </h2>
                    <p>
                        Assalamu'alaikum warahmatullahi wabarakatuh.
                        Selamat Datang di “Website Desa Senga Selatan“, melalui website ini kami berupaya menghadirkan informasi seputar kegiatan dan program Desa Senga Selatan“, Kecamatan Belopa, Kabupaten Luwu, Prov. Sulawesi Selatan.
                        <br><br>
                        Website ini kami hadirkan untuk mengikuti perkembangan dunia Teknologi Informasi (IT) yang kian pesat. Lahir dari sebuah ide kreatif dan inovatif, serta merupakan sebuah terobosan kami untuk lebih mendekatkan diri kepada masyarakat luas. Kami berupaya agar informasi tentang Desa Senga Selatan menjadi lebih terbuka dan interaktif.
                        <br><br>
                        Kami sampaikan terima kasih kepada semua pihak yang telah banyak memberikan bantuan, dukungan dan kontribusi, baik berupa tenaga, pemikiran dan dorongan semangat, hingga Website ini dapat terealisasi. Semoga dengan adanya Website ini dapat bermanfaat dan menjadi salah satu upaya peningkatan pelayanan Desa Senga Selatan.
                    </p>
                    <p class="custom-text">Sembunyikan... </p>
                    <a class="btn button-profil-kades" href="<?= base_url('home/pemerintah'); ?>">
                        Selengkapnya
                    </a>
                </div>
            </div>
            <div class="col-md-5 text-center">
                <div class="profil-kades-img-parent">
                    <img class="profil-kades-img" src="<?= base_url('assets/img/codebreak.png'); ?>" alt="Logo">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Profil Kepala Desa Section End -->

<!-- Detail Area Section Start -->
<section class="detail-area d-flex align-items-center" data-scroll-index="1">
    <div class="container-fluid container">
        <div class="d-flex flex-row justify-content-center">
            <div class="item-detail-area flex-fill">
                <div class="group-detail-area-item">
                    <img class="img-item" src="<?= base_url('assets/img/detail-area.png'); ?>" alt="Image">
                    <p class="text-item">Area</p>
                </div>
            </div>
            <div class="item-detail-area flex-fill">
                <div class="group-detail-area-item">
                    <p class="text-item-1" data-target="366">366 m</p>
                    <p class="text-item">Luas Tanah Kas Desa</p>
                </div>
            </div>
            <div class="item-detail-area flex-fill">
                <div class="group-detail-area-item">
                    <p class="text-item-1" data-target="0">0 m</p>
                    <p class="text-item">Luas Tanah Kas Desa</p>
                </div>
            </div>
            <div class="item-detail-area flex-fill">
                <div class="group-detail-area-item">
                    <p class="text-item-1" data-target="0">0 m</p>
                    <p class="text-item">Luas Tanah Kas Desa</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Detail Area Section End -->

<!-- Detail Populasi Section Start -->
<section class="detail-populasi d-flex align-items-center">
    <div class="container-fluid container text-center">
        <div class="d-flex flex-row justify-content-center">
            <div class="item-detail-populasi flex-fill">
                <div class="group-detail-populasi-item">
                    <img class="img-item" src="<?= base_url('assets/img/detail-populasi.png'); ?>" alt="Image">
                    <p class="text-item">Populasi</p>
                </div>
            </div>
            <div class="item-detail-populasi flex-fill">
                <div class="group-detail-populasi-item">
                    <p class="text-item-1" data-target="3663">3663</p>
                    <p class="text-item">Penduduk</p>
                </div>
            </div>
            <div class="item-detail-populasi flex-fill">
                <div class="group-detail-populasi-item">
                    <p class="text-item-1" data-target="1234">1234</p>
                    <p class="text-item">Laki-laki</p>
                </div>
            </div>
            <div class="item-detail-populasi flex-fill">
                <div class="group-detail-populasi-item">
                    <p class="text-item-1" data-target="4321">4321</p>
                    <p class="text-item">Perempuan</p>
                </div>
            </div>
        </div>
        <a href="<?= base_url('home/infografis'); ?>" class="btn button-detail-populasi">
            Lebih Banyak Infografis
        </a>
    </div>
</section>
<!-- Detail Populasi Section End -->

<!-- Kabar Desa Section Start -->
<section class="kabar-desa d-flex align-items-center" data-scroll-index="2">
    <div class="container-fluid container text-center">
        <div class="kabar-desa-title">
            <h2>Berita</h2>
        </div>
        <div class="kabar-desa-body">
            <div class="owl-carousel owl-theme owl-loaded kabar-carousel">
                <div class="owl-stage-outer">
                    <div class="owl-stage">
                        <div class="owl-item">
                            <div class="item-kabar">
                                <div class="kabar-image">
                                    <img class="img-item" src="<?= base_url('assets/img/codebreak.png'); ?>" alt="Image">
                                </div>
                                <h3 class="title-kabar">Publikasi APBD Desa Lampenai</h3>
                                <p class="date-kabar">14 Oktober 2020</p>
                                <p class="description-kabar">Salah satu bentuk transparansi penggunaan anggaran kepada masyarakat Desa Lampenai, Kecamatan Wotu Kabupaten Luwu Timur dalam bentuk Baliho Realisasi APBDesa TA. 2020 dan Baliho APBDesa TA. 2021.</p>
                                <p class="custom-text">Selengkapnya</p>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="item-kabar">
                                <div class="kabar-image">
                                    <img class="img-item" src="<?= base_url('assets/img/codebreak.png'); ?>" alt="Image">
                                </div>
                                <h3 class="title-kabar">Publikasi APBD Desa Lampenai</h3>
                                <p class="date-kabar">14 Oktober 2020</p>
                                <p class="description-kabar">Salah satu bentuk transparansi penggunaan anggaran kepada masyarakat Desa Lampenai, Kecamatan Wotu Kabupaten Luwu Timur dalam bentuk Baliho Realisasi APBDesa TA. 2020 dan Baliho APBDesa TA. 2021.</p>
                                <p class="custom-text">Selengkapnya</p>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="item-kabar">
                                <div class="kabar-image">
                                    <img class="img-item" src="<?= base_url('assets/img/codebreak.png'); ?>" alt="Image">
                                </div>
                                <h3 class="title-kabar">Publikasi APBD Desa Lampenai</h3>
                                <p class="date-kabar">14 Oktober 2020</p>
                                <p class="description-kabar">Salah satu bentuk transparansi penggunaan anggaran kepada masyarakat Desa Lampenai, Kecamatan Wotu Kabupaten Luwu Timur dalam bentuk Baliho Realisasi APBDesa TA. 2020 dan Baliho APBDesa TA. 2021.</p>
                                <p class="custom-text">Selengkapnya</p>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="item-kabar">
                                <div class="kabar-image">
                                    <img class="img-item" src="<?= base_url('assets/img/codebreak.png'); ?>" alt="Image">
                                </div>
                                <h3 class="title-kabar">Publikasi APBD Desa Lampenai</h3>
                                <p class="date-kabar">14 Oktober 2020</p>
                                <p class="description-kabar">Salah satu bentuk transparansi penggunaan anggaran kepada masyarakat Desa Lampenai, Kecamatan Wotu Kabupaten Luwu Timur dalam bentuk Baliho Realisasi APBDesa TA. 2020 dan Baliho APBDesa TA. 2021.</p>
                                <p class="custom-text">Selengkapnya</p>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="item-kabar">
                                <div class="kabar-image">
                                    <img class="img-item" src="<?= base_url('assets/img/codebreak.png'); ?>" alt="Image">
                                </div>
                                <h3 class="title-kabar">Publikasi APBD Desa Lampenai</h3>
                                <p class="date-kabar">14 Oktober 2020</p>
                                <p class="description-kabar">Salah satu bentuk transparansi penggunaan anggaran kepada masyarakat Desa Lampenai, Kecamatan Wotu Kabupaten Luwu Timur dalam bentuk Baliho Realisasi APBDesa TA. 2020 dan Baliho APBDesa TA. 2021.</p>
                                <p class="custom-text">Selengkapnya</p>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="item-kabar">
                                <div class="kabar-image">
                                    <img class="img-item" src="<?= base_url('assets/img/codebreak.png'); ?>" alt="Image">
                                </div>
                                <h3 class="title-kabar">Publikasi APBD Desa Lampenai</h3>
                                <p class="date-kabar">14 Oktober 2020</p>
                                <p class="description-kabar">Salah satu bentuk transparansi penggunaan anggaran kepada masyarakat Desa Lampenai, Kecamatan Wotu Kabupaten Luwu Timur dalam bentuk Baliho Realisasi APBDesa TA. 2020 dan Baliho APBDesa TA. 2021.</p>
                                <p class="custom-text">Selengkapnya</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-controls">
                    <div class="owl-nav">
                        <div class="owl-prev">
                            <div class="carousel-btn">
                                <img class="previous-btn" src="<?= base_url('assets/img/prev-btn.png'); ?>" alt="Prev">
                            </div>
                        </div>
                        <div class="owl-next">
                            <div class="carousel-btn">
                                <img class="next-btn" src="<?= base_url('assets/img/next-btn.png'); ?>" alt="Next">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="<?= base_url('home/berita'); ?>" class="btn button-kabar-desa">
            Berita Lainnya
        </a>
    </div>
</section>
<!-- Kabar Desa Section End -->

<!-- Beli Desa Section Start -->
<section class="beli-desa d-flex align-items-center">
    <div class="container-fluid container text-center">
        <div class="beli-desa-title">
            <h2>Belanja</h2>
        </div>
        <div class="beli-desa-body">
            <div class="owl-carousel owl-theme owl-loaded beli-carousel">
                <div class="owl-stage-outer">
                    <div class="owl-stage">
                        <div class="owl-item">
                            <div class="item-beli">
                                <div class="beli-image">
                                    <img class="img-item" src="<?= base_url('assets/img/codebreak.png'); ?>" alt="Image">
                                </div>
                                <h3 class="title-beli">Helaty Juice</h3>
                                <p class="description-beli">Minuman sehat dan berkualitas</p>
                                <p class="biaya-beli">Rp. 12.000</p>
                                <button class="btn button-beli">
                                    Hubungi Penjual
                                </button>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="item-beli">
                                <div class="beli-image">
                                    <img class="img-item" src="<?= base_url('assets/img/codebreak.png'); ?>" alt="Image">
                                </div>
                                <h3 class="title-beli">Helaty Juice</h3>
                                <p class="description-beli">Minuman sehat dan berkualitas</p>
                                <p class="biaya-beli">Rp. 12.000</p>
                                <button class="btn button-beli">
                                    Hubungi Penjual
                                </button>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="item-beli">
                                <div class="beli-image">
                                    <img class="img-item" src="<?= base_url('assets/img/codebreak.png'); ?>" alt="Image">
                                </div>
                                <h3 class="title-beli">Helaty Juice</h3>
                                <p class="description-beli">Minuman sehat dan berkualitas</p>
                                <p class="biaya-beli">Rp. 12.000</p>
                                <button class="btn button-beli">
                                    Hubungi Penjual
                                </button>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="item-beli">
                                <div class="beli-image">
                                    <img class="img-item" src="<?= base_url('assets/img/codebreak.png'); ?>" alt="Image">
                                </div>
                                <h3 class="title-beli">Helaty Juice</h3>
                                <p class="description-beli">Minuman sehat dan berkualitas</p>
                                <p class="biaya-beli">Rp. 12.000</p>
                                <button class="btn button-beli">
                                    Hubungi Penjual
                                </button>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="item-beli">
                                <div class="beli-image">
                                    <img class="img-item" src="<?= base_url('assets/img/codebreak.png'); ?>" alt="Image">
                                </div>
                                <h3 class="title-beli">Helaty Juice</h3>
                                <p class="description-beli">Minuman sehat dan berkualitas</p>
                                <p class="biaya-beli">Rp. 12.000</p>
                                <button class="btn button-beli">
                                    Hubungi Penjual
                                </button>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="item-beli">
                                <div class="beli-image">
                                    <img class="img-item" src="<?= base_url('assets/img/codebreak.png'); ?>" alt="Image">
                                </div>
                                <h3 class="title-beli">Helaty Juice</h3>
                                <p class="description-beli">Minuman sehat dan berkualitas</p>
                                <p class="biaya-beli">Rp. 12.000</p>
                                <button class="btn button-beli">
                                    Hubungi Penjual
                                </button>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="item-beli">
                                <div class="beli-image">
                                    <img class="img-item" src="<?= base_url('assets/img/codebreak.png'); ?>" alt="Image">
                                </div>
                                <h3 class="title-beli">Helaty Juice</h3>
                                <p class="description-beli">Minuman sehat dan berkualitas</p>
                                <p class="biaya-beli">Rp. 12.000</p>
                                <button class="btn button-beli">
                                    Hubungi Penjual
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-controls">
                    <div class="owl-nav">
                        <div class="owl-prev">
                            <div class="carousel-btn">
                                <img class="previous-btn" src="<?= base_url('assets/img/prev-btn.png'); ?>" alt="Prev">
                            </div>
                        </div>
                        <div class="owl-next">
                            <div class="carousel-btn">
                                <img class="next-btn" src="<?= base_url('assets/img/next-btn.png'); ?>" alt="Next">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="<?= base_url('home/belanja'); ?>" class="btn button-beli-desa">
            Selengkapnya
        </a>
    </div>
</section>
<!-- Beli Desa Section End -->

<!-- Wisata Desa Section Start -->
<section class="wisata-desa d-flex align-items-center" data-scroll-index="3">
    <div class="container-fluid container text-center">
        <div class="wisata-desa-title">
            <h2>Potensi Desa</h2>
        </div>
        <div class="wisata-desa-body d-flex justify-content-center">
            <div class="item-wisata">
                <div class="wisata-image">
                    <img class="img-item" src="<?= base_url('assets/img/codebreak.png'); ?>" alt="Image">
                </div>
                <h3 class="title-wisata">Tugu Lalambate Tarantajo</h3>
                <p class="description-wisata">Kawasan Kuliner Desa Lampenai</p>
            </div>
            <div class="item-wisata">
                <div class="wisata-image">
                    <img class="img-item" src="<?= base_url('assets/img/codebreak.png'); ?>" alt="Image">
                </div>
                <h3 class="title-wisata">Tugu Lalambate Tarantajo</h3>
                <p class="description-wisata">Kawasan Kuliner Desa Lampenai</p>
            </div>
        </div>
    </div>
</section>
<!-- Wisata Desa Section End -->

<!-- Pelayanan Aplikasi Sectio Start -->
<section class="pelayanan-aplikasi d-flex align-items-center">
    <div class="container-fluid container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title-pelayanan-aplikasi">
                    <h1>Pelayanan Desa Berbasis Aplikasi</h1>
                </div>
                <div class="content-pelayanan-aplikasi">
                    <h1>Desa Senga Selatan telah menyiapkan layanan berbasis aplikasi Android. Masyarakat dapat mengirimkan permintaan persuratan dengan tetap di rumah lewat genggaman Anda.</h1>
                    <ul style="list-style-type:disc;">
                        <li>Layanan Persuratan</li>
                        <li>Pembayaran Pajak</li>
                        <li>Syarat Persuratan</li>
                    </ul>
                </div>
                <div class="img-applikasi-item">
                    <img src="assets/img/qrcode1.png" alt="Image">
                    <img src="assets/img/googlePlay1.png" alt="Image">
                </div>
                <button class="btn button-pelayanan-aplikasi">Panduan</button>
            </div>
            <div class="col-md-6">
                <img class="ui-aplikasi" src="assets/img/layananAplikasiHP2 1.png" alt="Image">
            </div>
        </div>
    </div>
</section>
<!-- Pelayanan Aplikasi Sectio End -->
<?= $this->endSection(); ?>