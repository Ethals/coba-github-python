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
                    <h3 class="box-title">Buat Berita Desa</h3>
                    <form action="<?= base_url('admin/berita_desa_update'); ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="slug" value="<?= $data_berita['slug']; ?>">
                        <div class="mb-3">
                            <label for="judul_berita" class="form-label">Judul Berita</label>
                            <input type="text" class="form-control <?= ($validation->hasError('judul_berita')) ? 'is-invalid' : ''; ?>" id="judul_berita" name="judul_berita" value="<?= old('judul_berita') ? old('judul_berita') : $data_berita['judul']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('judul_berita'); ?>
                            </div>
                        </div>
                        <div class=" mb-3">
                            <label for="penulis_berita" class="form-label">Penulis Berita</label>
                            <input type="text" class="form-control <?= ($validation->hasError('penulis_berita')) ? 'is-invalid' : ''; ?>" id="penulis_berita" name="penulis_berita" value="<?= old('penulis_berita') ? old('penulis_berita') : $data_berita['penulis_berita']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('penulis_berita'); ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="isi_berita" class="form-label">Isi Berita</label>
                            <textarea rows="10" class="form-control <?= ($validation->hasError('isi_berita')) ? 'is-invalid' : ''; ?>" id="isi_berita" name="isi_berita"><?= old('isi_berita') ? old('isi_berita') : $data_berita['isi_berita']; ?></textarea>
                            <div class="invalid-feedback">
                                <?= $validation->getError('isi_berita'); ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <input hidden type="file" class="form-control" id="fileupload" name="fileupload">
                            <label for="fileupload" class="btn btn-outline-primary btn-sm <?= ($validation->hasError('fileupload')) ? 'is-invalid' : ''; ?>">Tambahkan Foto Berita</label>
                            <span style="margin-left: 5px;" id="file-chosen"><?= old('fileupload') ? old('fileupload') : $data_berita['gambar_berita']; ?></span>
                            <div class="invalid-feedback">
                                <?= $validation->getError('fileupload'); ?>
                            </div>
                        </div>

                        <a style="padding:6px 12px 6px 12px; color:white;" class="btn btn-danger" href="<?= base_url('admin/berita_desa/'); ?>">
                            Kembali
                        </a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const actualBtn = document.getElementById('fileupload');

    const fileChosen = document.getElementById('file-chosen');

    actualBtn.addEventListener('change', function() {
        fileChosen.textContent = this.files[0].name
    })
</script>

<?= $this->endSection(); ?>