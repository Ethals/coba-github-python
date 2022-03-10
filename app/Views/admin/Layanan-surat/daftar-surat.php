<?= $this->extend('layout/admin/template'); ?>

<?= $this->section('content'); ?>
<div class="page-wrapper">
    <div class=" container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <h3 class="box-title">Daftar Layanan Surat</h3>

                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <td>No.</td>
                                    <td>Jenis Surat</td>
                                    <td>Aksi</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($daftar_surat as $ds) : ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $ds['jenis_surat']; ?></td>
                                        <td>
                                            <a style="border-radius: 20px; padding:2px 20px 2px 20px; color:white;" class="btn btn-info" href="<?= base_url('admin/cetak_surat/' . $ds['id']); ?>">
                                                Buat
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