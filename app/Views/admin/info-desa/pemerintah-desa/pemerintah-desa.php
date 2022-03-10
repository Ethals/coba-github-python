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
                    <h3 class="box-title">Pemerintahan Desa</h3>
                    <a href="<?= base_url('admin/pemerintah_desa_edit/'); ?>" class="btn btn-sm btn-info" style="color: #ffffff;">
                        <i style="padding-right: 2px;" class="fas fa-pen"></i>
                        Edit
                    </a>
                    <div>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td width='25%'>Visi</td>
                                    <td><?= $pemerintahDesa['visi']; ?></td>
                                </tr>
                                <tr>
                                    <td width='25%'>Misi</td>
                                    <?php $misi = explode(PHP_EOL, $pemerintahDesa['misi']); ?>
                                    <td>
                                        <ol>
                                            <?php foreach ($misi as $m) : ?>
                                                <li><?= $m; ?></li>
                                            <?php endforeach; ?>
                                        </ol>
                                    </td>
                                </tr>
                                <tr>
                                    <td width='25%'>Sturktur Pemerintahan Desa</td>
                                    <td><?= $pemerintahDesa['struktur_pemerintahan']; ?></td>
                                </tr>
                                <tr>
                                    <td width='25%'>Struktur BPD</td>
                                    <td><?= $pemerintahDesa['struktur_bpd']; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>