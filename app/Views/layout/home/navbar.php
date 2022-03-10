<?php
$uri = current_url(true)->getSegment(2);
if ($uri == 'home' || $uri == 'admin') {
    $uri = current_url(true)->getSegment(3);
}
?>

<nav class="navbar navbar-expand-lg fixed-top justify-content-start navbar-shrink <?= $uri == 'ppid' ? 'navbar-white' : ''; ?>">
    <div class="container-fluid container">
        <!-- Brand -->
        <a class="navbar-brand" href="<?= base_url('/'); ?>">
            <div class="brand-content">
                <img class="d-inline-block align-text-top navbar-logo" src="<?= base_url('assets/img/codebreak.png'); ?>" alt="" width="46" height="46">
                <h3>Desa Lampenai </h3>
                <p>Kabupaten Luwu timur</p>
            </div>
        </a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <i class="fas fa-bars"></i>
        </button>


        <!-- Navbar links -->
        <?php if (current_url(true)->getSegment(2) == '' || current_url(true)->getSegment(3) == '') {; ?>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav w-50 justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" data-scroll-nav="0" href="#">Pemerintahan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-scroll-nav="1" href="#">Infografis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-scroll-nav="2" href="#">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-scroll-nav="3" href="#">Potensi</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav ml-auto w-50 justify-content-end">
                    <li class="nav-item">
                        <button class="btn btn-success navbar-extra-btn" type="submit">Layanan Warga</button>
                    </li>
                </ul>
            </div>
        <?php }; ?>
    </div>
</nav>