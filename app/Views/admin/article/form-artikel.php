<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container form-container mt-2">
    <div class="col">
        <div class="row">
            <p class="fs-1">Form Penginputan Artikel</p>
            <span class="">Admin &raquo; Form &raquo; Artikel</span>
            <hr>
            <div class="card col-md-12 m-auto">
                <form action="/admin/save" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>

                    <?php if (session()->has('validation')): ?>
                        <?php $validation = session('validation'); ?>
                    <?php endif; ?>

                    <label for="judul-artikel" class="fw-bold mt-4">Judul Artikel:</label>
                    <input type="text"
                        class="form-control <?= (isset($validation) && $validation->hasError('judul-artikel')) ? 'is-invalid' : ''; ?>"
                        name="judul-artikel" id="judul-artikel" value="<?= old('judul-artikel'); ?>">
                    <div class="invalid-feedback">
                        <?= isset($validation) ? $validation->getError('judul-artikel') : ''; ?>
                    </div>

                    <label for="gambar-artikel" class="fw-bold mt-4">Gambar Artikel:</label>
                    <input type="file"
                        class="form-control <?= (isset($validation) && $validation->hasError('gambar-artikel')) ? 'is-invalid' : ''; ?>"
                        name="gambar-artikel" id="gambar-artikel">
                    <div class="invalid-feedback">
                        <?= isset($validation) ? $validation->getError('gambar-artikel') : ''; ?>
                    </div>

                    <label for="isi-artikel" class="fw-bold mt-4">Isi Artikel:</label>
                    <textarea
                        class="form-control <?= (isset($validation) && $validation->hasError('isi-artikel')) ? 'is-invalid' : ''; ?>"
                        name="isi-artikel" id="isi-artikel"><?= old('isi-artikel'); ?></textarea>
                    <div class="invalid-feedback">
                        <?= isset($validation) ? $validation->getError('isi-artikel') : ''; ?>
                    </div>

                    <label for="tanggal-artikel" class="fw-bold mt-4">Tanggal Membuat:</label>
                    <input type="datetime-local" name="tanggal-artikel" id="tanggal-artikel"
                        value="<?= old('tanggal-artikel'); ?>">

                    <input type="submit" class="btn btn-md d-block mx-auto btn-success mt-5 mb-3"
                        value="Tambah Artikel">
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>