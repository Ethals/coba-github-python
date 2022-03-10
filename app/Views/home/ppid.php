<?= $this->extend('layout/home/template'); ?>

<?= $this->section('content'); ?>
<!-- PPID Desa Section Start -->
<section class="ppid-desa d-flex align-items-center">
    <div class="container-fluid container text-center">
        <div class="ppid-extra-style"></div>
        <div class="ppid-desa-title">
            <h2>Pejabat Pengelola Informasi dan Dokumentasi</h2>
        </div>
        <div class="ppid-desa-subtitle">
            <h2>Desa Senga Selatan, Kabupaten Luwu</h2>
        </div>
        <div class="ppid-desa-body d-flex justify-content-center">
            <div class="item-ppid">
                <div class="ppid-image">
                    <img class="img-item" src="<?= base_url('assets/img/codebreak.png'); ?>" alt="Image">
                </div>
                <h3 class="title-ppid">Informasi Secara Hukum</h3>
            </div>
            <div class="item-ppid">
                <div class="ppid-image">
                    <img class="img-item" src="<?= base_url('assets/img/codebreak.png'); ?>" alt="Image">
                </div>
                <h3 class="title-ppid">Informasi Secara Hukum</h3>
            </div>
            <div class="item-ppid">
                <div class="ppid-image">
                    <img class="img-item" src="<?= base_url('assets/img/codebreak.png'); ?>" alt="Image">
                </div>
                <h3 class="title-ppid">Informasi Secara Hukum</h3>
            </div>
        </div>
        <div class="ppid-desa-footer">
            <button class="btn btn-beli">Dasar Hukum</button>
            <button class="btn btn-beli">Profil Desa</button>
        </div>
    </div>
</section>
<!-- PPID Desa Section End -->

<!-- Informasi Desa Section Start -->
<section class="informasi-desa d-flex align-items-center">
    <div class="container-fluid container">
        <div class="informasi-extra-style"></div>
        <div class="informasi-desa-title">
            <h2>Informasi Publik Terbaru</h2>
        </div>
        <div class="informasi-desa-subtitle">
            <h2>Terakhir di update: <span>8 hari yang lalu.</span></h2>
        </div>
        <div class="informasi-desa-body">
            <div class="item-informasi">
                <div class="row">
                    <div class="col-md-7">
                        <h3 class="title-informasi">Formulir Keberatan Informasi Desa</h3>
                        <p class="description-informasi">Daftar Informasi Publik</p>
                        <p class="tanggal-informasi">14 Oktober 2021</p>
                    </div>
                    <div class="col-md-5">
                        <button class="btn btn-download">Download</button>
                    </div>
                </div>
            </div>
            <div class="item-informasi">
                <div class="row">
                    <div class="col-md-7">
                        <h3 class="title-informasi">Formulir Keberatan Informasi Desa</h3>
                        <p class="description-informasi">Daftar Informasi Publik</p>
                        <p class="tanggal-informasi">14 Oktober 2021</p>
                    </div>
                    <div class="col-md-5">
                        <button class="btn btn-download">Download</button>
                    </div>
                </div>
            </div>
            <div class="item-informasi">
                <div class="row">
                    <div class="col-md-7">
                        <h3 class="title-informasi">Formulir Keberatan Informasi Desa</h3>
                        <p class="description-informasi">Daftar Informasi Publik</p>
                        <p class="tanggal-informasi">14 Oktober 2021</p>
                    </div>
                    <div class="col-md-5">
                        <button class="btn btn-download">Download</button>
                    </div>
                </div>
            </div>
            <div class="item-informasi">
                <div class="row">
                    <div class="col-md-7">
                        <h3 class="title-informasi">Formulir Keberatan Informasi Desa</h3>
                        <p class="description-informasi">Daftar Informasi Publik</p>
                        <p class="tanggal-informasi">14 Oktober 2021</p>
                    </div>
                    <div class="col-md-5">
                        <button class="btn btn-download">Download</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Informasi Desa Section End -->
<?= $this->endSection(); ?>