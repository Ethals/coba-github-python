<?= $this->extend('layout/admin/template'); ?>

<?= $this->section('content'); ?>
<div class="page-wrapper">
    <div class=" container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <?php if (session()->getFlashdata('Success')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?= session()->getFlashdata('Success'); ?>
                        </div>
                    <?php endif; ?>
                    <h3 class="box-title">Berita Desa</h3>
                    <a href="<?= base_url('admin/buat_berita_desa'); ?>" class="btn btn-sm btn-info" style="color: #ffffff;">
                        <i style="padding-right: 2px;" class="fas fa-pen"></i>
                        Buat Berita
                    </a>
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <td>No.</td>
                                    <td>Judul</td>
                                    <td>Tanggal</td>
                                    <td>Penulis</td>
                                    <td>Aksi</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($berita_desa as $bd) : ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $bd['judul']; ?></td>
                                        <td><?= $bd['tgl_berita']; ?></td>
                                        <td><?= $bd['penulis_berita']; ?></td>
                                        <td>
                                            <a style="border-radius: 20px; padding:2px 20px 2px 20px; color:white;" class="btn btn-info" href="<?= base_url('admin/berita_desa_edit/' . $bd['slug']); ?>">
                                                Edit
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>