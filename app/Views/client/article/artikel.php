<?= $this->extend('layout/template-client'); ?>
<?= $this->section('content'); ?>
<div class="container mt-2 mb-5">
    <div class="row">
        <div class="col">
            <span class=""><a href="/" class="text-decoration-none text-black"><i
                        class="ti ti-home me-1"></i>Dashboard</a> &raquo; <a href="/artikels"
                    class="text-decoration-none text-black">Artikels</a> &raquo; <?= $artikel['slug-artikel']; ?>
            </span>
            <hr>
            <div class="row">
                <div class="col-md-8 d">
                    <h3 class="text-title mt-4"><?= $artikel['judul-artikel']; ?></h3>
                    <img src="/uploads/<?= $artikel['gambar-artikel']; ?>"
                        class="img-fluid img-artikel-main img-thumbnail" alt="...">
                    <p class="text-body-artikel mt-2"><?= $isi_artikel_1; ?></p>
                    <p class="text-body-artikel mt-2"><?= $isi_artikel_2; ?></p>
                    <p class="text-body-artikel mt-2"><?= $isi_artikel_3; ?></p>
                    <a href="/artikels">&laquo; Kembali Lagi</a>
                </div>
                <div class="col-md-4 mt-4">
                    <h5>Berita Dan Artikel Lainnya</h5>
                    <?php $i = 1;
                    foreach ($artikels as $art): ?>
                        <?php if ($i > 3)
                            break; ?>
                        <a href="/artikels/<?= $art['slug-artikel']; ?>" class="text-decoration-none">
                            <div class="card col-md-12 mb-4">
                                <div class="d-flex">
                                    <img src="/uploads/<?= $art['gambar-artikel']; ?>"
                                        class="rounded img-fluid img-thumbnail small-img-artikel" alt="...">
                                    <p class="ms-4 card-title"><?= $art['judul-artikel']; ?></p>
                                </div>
                            </div>
                        </a>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>