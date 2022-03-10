<?= $this->extend('layout/home/template'); ?>

<?= $this->section('content'); ?>
<!--Header Section Start-->
<section class="header d-flex align-items-center">
    <div class="container-fluid container">
        <div class="row align-items-center">
            <div class="col-md-7">
                <div class="header-text">
                    <h1 class="header-title">Pemerintah</h1>
                </div>
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

<!-- Visi Misi Desa Section Start -->
<section class="visi-misi d-flex align-items-center">
    <div class="container-fluid container text-center">
        <div class="visi-misi-title">
            <h2>Visi dan Misi</h2>
        </div>
        <div class="visi-misi-body">
            <div class="visi-misi-subtitle">
                <h2>Visi</h2>
            </div>
            <p class="text-visi"><?= $pemerintahDesa['visi']; ?></p>
            <div class="visi-misi-subtitle">
                <h2>Misi</h2>
            </div>
            <div class="text-misi">
                <ol class="item-text-misi">
                    <?php $misi = explode(PHP_EOL, $pemerintahDesa['misi']); ?>
                    <?php foreach ($misi as $m) : ?>
                        <li><?= $m; ?></li>
                    <?php endforeach; ?>
                </ol>
            </div>
        </div>
    </div>
</section>
<!-- Visi Misi Desa Section End -->

<!-- Struktur Pemerintahan Section Start -->
<section class="struktur-pemerintahan d-flex align-items-center">
    <div class="container-fluid container text-center">
        <div class="struktur-pemerintahan-body">
            <h2>Struktur Pemerintahan Desa</h2>
            <img src="<?= base_url('assets/img/struktur pemerintah.png'); ?>" alt="">

            <h2>Struktur BPD</h2>
            <img src="<?= base_url('assets/img/struktur bpd.png'); ?>" alt="">
        </div>
    </div>
</section>
<!-- Struktur Pemerintahan Section End -->
<?= $this->endSection(); ?>