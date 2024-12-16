<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container mt-2 mb-5">
    <div class="row">
        <div class="col">
            <span>Admin &raquo; Edit &raquo; Review</span>
            <hr>
            <form action="/review/update/<?= $review['id'] ;?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="card col-md-8 mx-auto p-4">
                    <div class="mb-3">
                        <label for="judul-review" class="form-label fw-bold">Nama Mobil :</label>
                        <input type="text" class="form-control" name="judul-review" id="judul-review"
                            placeholder="Masukkan Nama Mobil" value="<?= $review['judul-review'] ;?>">
                    </div>
                    <div class="mb-3">
                        <label for="isi-review" class="form-label fw-bold">Isi Review :</label>
                        <textarea class="form-control" name="isi-review" id="isi-review" rows="5"
                            placeholder="Masukkan isi Review"><?= $review['isi-review'] ;?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="nama-review" class="form-label fw-bold">Nama :</label>
                        <input type="text" class="form-control" name="nama-review" id="nama-review"
                            placeholder="Masukkan Nama " value="<?= $review['nama-review'] ;?>">
                    </div>
                    <div class="mb-3">
                        <label for="tanggal-review" class="form-label fw-bold">Tanggal Membuat :</label>
                        <input type="datetime-local" class="form-control" name="tanggal-review" id="tanggal-review" value="<?= $review['tanggal-review'] ;?>">
                    </div>
                    <div class="text-center">
                        <input type="submit" class="btn btn-success mt-4 mb-2" value="Simpan Review">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>