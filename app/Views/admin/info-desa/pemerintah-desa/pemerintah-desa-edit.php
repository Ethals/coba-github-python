<?= $this->extend('layout/admin/template'); ?>

<?= $this->section('content'); ?>
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
                    <h3 class="box-title">Edit Data Pemerintaha Desa</h3>
                    <form action="<?= base_url('admin/pemerintah_desa_save'); ?>" method="post">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="id" value="<?= $pemerintahDesa['id']; ?>">

                        <div class="mb-3">
                            <label for="visi_desa" class="form-label">Visi</label>
                            <textarea rows="2" type="text" class="form-control <?= ($validation->hasError('visi_desa')) ? 'is-invalid' : ''; ?>" id="visi_desa" name="visi_desa"><?= old('visi_desa') ? old('visi_desa') : $pemerintahDesa['visi']; ?></textarea>
                            <div class="invalid-feedback">
                                <?= $validation->getError('visi_desa'); ?>
                            </div>
                        </div>
                        <div class=" mb-3">
                            <label for="misi_desa" class="form-label">Misi</label>
                            <textarea rows="10" type="text" class="form-control <?= ($validation->hasError('misi_desa')) ? 'is-invalid' : ''; ?>" id="misi_desa" name="misi_desa"><?= old('misi_desa') ? old('misi_desa') : $pemerintahDesa['misi']; ?></textarea>
                            <div class="invalid-feedback">
                                <?= $validation->getError('misi_desa'); ?>
                            </div>
                        </div>
                        <div class=" mb-3">
                            <label for="struktur_pemerintahan" class="form-label">Struktur Pemerintahan Desa</label>
                            <input type="text" class="form-control <?= ($validation->hasError('struktur_pemerintahan')) ? 'is-invalid' : ''; ?>" id="struktur_pemerintahan" name="struktur_pemerintahan" value="<?= old('struktur_pemerintahan') ? old('struktur_pemerintahan') : $pemerintahDesa['struktur_pemerintahan']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('struktur_pemerintahan'); ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="struktur_bpd" class="form-label">Struktur BPD</label>
                            <input type="text" class="form-control <?= ($validation->hasError('struktur_bpd')) ? 'is-invalid' : ''; ?>" id="struktur_bpd" name="struktur_bpd" value="<?= old('struktur_bpd') ? old('struktur_bpd') : $pemerintahDesa['struktur_bpd']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('struktur_bpd'); ?>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>