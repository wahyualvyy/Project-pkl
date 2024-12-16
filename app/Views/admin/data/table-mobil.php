<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <p class="fs-1 mt-2">Table Data Mobil</p>
            <span>Admin &raquo; Table Mobil</span>
            <hr>
            <div class="swal" data-swal="<?= session()->get('pesan'); ?>"></div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark text-center align-middle">
                        <tr>
                            <th>No</th>
                            <th>Nama Mobil</th>
                            <th>Deskripsi Mobil</th>
                            <th>Jenis Mobil</th>
                            <th>Merek Mobil</th>
                            <th>Seat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle text-center">
                        <?php
                        $i = 1;
                        foreach ($mobil as $mbl): ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= esc($mbl['nama']); ?></td>
                                <td><?= esc(word_limiter($mbl['deskripsi'],8)); ?></td>
                                <td><?= esc($mbl['jenis']); ?></td>
                                <td><?= esc($mbl['merek']); ?></td>
                                <td><?= esc($mbl['seat']); ?></td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="/admin/data/detail/<?= esc($mbl['id']); ?>"
                                            class="btn btn-success me-2 text-white">Detail</a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
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