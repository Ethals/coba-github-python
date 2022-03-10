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
                    <h3 class="box-title">Identitas Desa</h3>
                    <a href="<?= base_url('admin/identitas_desa_edit/'); ?>" class="btn btn-sm btn-info" style="color: #ffffff;">
                        <i style="padding-right: 2px;" class="fas fa-pen"></i>
                        Edit
                    </a>
                    <div>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td width='20%'>Nama Desa</td>
                                    <td><?= $dataIdentitasDesa['nama_desa']; ?></td>
                                </tr>
                                <tr>
                                    <td width='20%'>Kecamatan</td>
                                    <td><?= $dataIdentitasDesa['kecamatan']; ?></td>
                                </tr>
                                <tr>
                                    <td width='20%'>Kabupaten</td>
                                    <td><?= $dataIdentitasDesa['kabupaten']; ?></td>
                                </tr>
                                <tr>
                                    <td width='20%'>Provinsi</td>
                                    <td><?= $dataIdentitasDesa['provinsi']; ?></td>
                                </tr>
                                <tr>
                                    <td width='20%'>Kode Pos</td>
                                    <td><?= $dataIdentitasDesa['kode_pos']; ?></td>
                                </tr>
                                <tr>
                                    <td width='20%'>Alamat</td>
                                    <td><?= $dataIdentitasDesa['jalan']; ?></td>
                                </tr>
                                <tr>
                                    <td width='20%'>Nama Kepala Desa</td>
                                    <td><?= $dataIdentitasDesa['nama_kades']; ?></td>
                                </tr>
                                <tr>
                                    <td width='20%'>Deskripsi</td>
                                    <td><?= nl2br($dataIdentitasDesa['deskripsi']); ?></td>
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