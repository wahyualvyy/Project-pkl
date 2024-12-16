<?= $this->extend('layout/template-client'); ?>
<?= $this->section('content'); ?>
<div class="container mt-2 mb-5">
    <div class="row">
        <div class="col">
            <span><a href="/" class="text-decoration-none text-black"><i class="ti ti-home me-1"></i>Dashboard</a> &raquo; Reviews</span>
            <a href="/reviews/review" class="float-end">Tulis Review</a>
            <hr>
            <div class="swal" data-swal="<?= session()->get('pesan'); ?>"></div>
            <h3 class="text-title mt-4">Review dan Saran</h3>
            <div class="row">
                <?php foreach ($review as $view): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?= esc($view['judul-review']); ?></h5>
                                <p class="card-text"><?= esc($view['isi-review']); ?></p>
                            </div>
                            <div class="card-footer">
                                <p class="">By: <?= esc($view['nama-review']); ?></p>
                                <p class="card-text">
                                    <small class="text-muted"><?= $view['tanggal-review']; ?></small>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const swal = document.querySelector('.swal').dataset.swal;
        if (swal) {
            Swal.fire({
                title: 'Berhasil',
                text: swal,
                icon: 'success'
            });
        }
    });
</script>
<?= $this->endSection(); ?>