<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container form-container mt-2">
    <div class="col">
        <div class="row">
            <p class="fs-1">Form Edit Artikel</p>
            <span class="">Admin &raquo; Form &raquo; Artikel</span>
            <hr>
            <div class="card col-md-12 m-auto">
                <form action="/admin/update/<?= $artikel['id']; ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="slug" value="<?= $artikel['slug-artikel']; ?>">
                    <?php if (session()->has('validation')): ?>
                        <?php $validation = session('validation'); ?>
                    <?php endif; ?>

                    <label for="judul-artikel" class="fw-bold mt-4">Judul Artikel : </label>
                    <input type="text"
                        class="form-control <?= ($validation->hasError('judul-artikel')) ? 'is-invalid' : ''; ?>"
                        name="judul-artikel" id="judul-artikel" autofocus
                        value="<?= (old('judul-artikel')) ? old('judul-artikel') : $artikel['judul-artikel']; ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('judul-artikel'); ?>
                    </div>

                    <label for="gambar-artikel" class="fw-bold mt-4">Gambar Artikel : </label>
                    <input type="file" class="form-control" name="gambar-artikel" id="gambar-artikel"
                        value="<?= (old('gambar-artikel')) ? old('gambar-artikel') : $artikel['gambar-artikel']; ?>">

                    <label for="isi-artikel" class="fw-bold mt-4">Isi Artikel : </label>
                    <textarea class="form-control <?= ($validation->hasError('isi-artikel')) ? 'is-invalid' : ''; ?>"
                        name="isi-artikel"
                        id="isi-artikel"><?= (old('isi-artikel')) ? old('isi-artikel') : $artikel['isi-artikel'];
                        ; ?></textarea>
                    <label for="tanggal-artikel" class="fw-bold mt-4">Tanggal Membuat : </label>
                    <input type="datetime-local" name="tanggal-artikel" id="tanggal-artikel"
                        value="<?= (old('tanggal-artikel')) ? old('tanggal-artikel') : $artikel['tanggal-artikel']; ?>">

                    <input type="submit" class="btn btn-md d-block mx-auto btn-success mt-5 mb-3"
                        placeholder="Ubah Data"></input>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>