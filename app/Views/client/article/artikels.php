<?= $this->extend('layout/template-client'); ?>
<?= $this->section('content'); ?>
<div class="container mt-2 mb-5">
    <div class="row">
        <div class="col">
            <span class=""><a href="/" class="text-decoration-none text-black"><i class="ti ti-home me-1"></i>Dashboard</a> &raquo; Artikels</span>
            <hr>
            <h3 class="text-title mt-4">Berita Dan Artikel</h3>
            <div class="row">
                <?php foreach ($artikel as $arts): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="/uploads/<?= $arts['gambar-artikel'] ;?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= esc(word_limiter($arts['judul-artikel'], 4)); ?></h5>
                                <?= esc(word_limiter($arts['isi-artikel'], 4)); ?>
                                <p class="card-text"><small class="text-muted"><?= $arts['tanggal-artikel']; ?></small></p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">
                                    <p class="text-end">
                                        <a href="/artikels/<?= $arts['slug-artikel']; ?>">Baca Selengkapnya &raquo;</a>
                                    </p>
                                </small>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>