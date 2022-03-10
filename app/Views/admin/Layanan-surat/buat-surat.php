<?= $this->extend('layout/admin/template'); ?>

<?= $this->section('content'); ?>
<?php $uri = current_url(true)->getSegment(4); ?>
<div class="page-wrapper">
    <div class=" container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <?php if (session()->getFlashdata('Failed')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= session()->getFlashdata('Failed'); ?>
                        </div>
                    <?php endif; ?>
                    <h3 class="box-title">Cetak Surat <?= $data_surat['jenis_surat']; ?></h3>
                    <form action="<?= base_url('admin/save_surat/' . $uri); ?>" method="post">
                        <?= csrf_field(); ?>
                        <?php foreach ($id_input as $IdData) : ?>
                            <div class="mb-3">
                                <label class="form-label"><?= $input[$IdData - 1]; ?></label>
                                <input type="text" class="form-control <?= ($validation->hasError('inputdata')) ? 'is-invalid' : ''; ?>" name="inputdata" value="<?= old('inputdata'); ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('inputdata'); ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>