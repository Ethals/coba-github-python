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
                    <h3 class="box-title">Edit Data Identitas Desa</h3>
                    <form action="<?= base_url('admin/identitas_desa_save'); ?>" method="post">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="id" value="<?= $dataIdentitasDesa['id']; ?>">

                        <div class="mb-3">
                            <label for="nama_desa" class="form-label">Nama Desa</label>
                            <input type="text" class="form-control <?= ($validation->hasError('nama_desa')) ? 'is-invalid' : ''; ?>" id="nama_desa" name="nama_desa" value="<?= old('nama_desa') ? old('nama_desa') : $dataIdentitasDesa['nama_desa']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama_desa'); ?>
                            </div>
                        </div>
                        <div class=" mb-3">
                            <label for="kecamatan" class="form-label">Kecamatan</label>
                            <input type="text" class="form-control <?= ($validation->hasError('kecamatan')) ? 'is-invalid' : ''; ?>" id="kecamatan" name="kecamatan" value="<?= old('kecamatan') ? old('kecamatan') : $dataIdentitasDesa['kecamatan']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('kecamatan'); ?>
                            </div>
                        </div>
                        <div class=" mb-3">
                            <label for="kabupaten" class="form-label">Kabupaten</label>
                            <input type="text" class="form-control <?= ($validation->hasError('kabupaten')) ? 'is-invalid' : ''; ?>" id="kabupaten" name="kabupaten" value="<?= old('kabupaten') ? old('kabupaten') : $dataIdentitasDesa['kabupaten']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('kabupaten'); ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="provinsi" class="form-label">Provinsi</label>
                            <input type="text" class="form-control <?= ($validation->hasError('provinsi')) ? 'is-invalid' : ''; ?>" id="provinsi" name="provinsi" value="<?= old('provinsi') ? old('provinsi') : $dataIdentitasDesa['provinsi']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('provinsi'); ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="kode_pos" class="form-label">Kode Pos</label>
                            <input type="text" class="form-control <?= ($validation->hasError('kode_pos')) ? 'is-invalid' : ''; ?>" id="kode_pos" name="kode_pos" value="<?= old('kode_pos') ? old('kode_pos') : $dataIdentitasDesa['kode_pos']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('kode_pos'); ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" id="alamat" name="alamat" value="<?= old('alamat') ? old('alamat') : $dataIdentitasDesa['jalan']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('alamat'); ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="nama_kades" class="form-label">Nama Kepala Desa</label>
                            <input type="text" class="form-control <?= ($validation->hasError('nama_kades')) ? 'is-invalid' : ''; ?>" id="nama_kades" name="nama_kades" value="<?= old('nama_kades') ? old('nama_kades') : $dataIdentitasDesa['nama_kades']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama_kades'); ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea rows="10" class="form-control <?= ($validation->hasError('deskripsi')) ? 'is-invalid' : ''; ?>" id="deskripsi" name="deskripsi"><?= old('deskripsi') ? old('deskripsi') : $dataIdentitasDesa['deskripsi']; ?></textarea>
                            <div class="invalid-feedback">
                                <?= $validation->getError('deskripsi'); ?>
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