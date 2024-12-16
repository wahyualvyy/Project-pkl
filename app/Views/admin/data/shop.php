<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <p class="fs-1 mt-2">Table Data Mobil</p>
            <span>Admin &raquo; Table &raquo; Pembeli</span>
            <hr>
            <div class="swal" data-swal="<?= session()->get('pesan'); ?>"></div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark text-center align-middle">
                        <tr>
                            <th>No</th>
                            <th>Nama Pembeli</th>
                            <th>Email Address</th>
                            <th>No Telepon</th>
                            <th>Nama Mobil</th>
                            <th>Merek Mobil</th>
                            <th>Jenis Mobil</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle text-center">
                        <?php
                        $i = 1;
                        foreach ($pembeli as $beli): ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $beli['nama']; ?></td>
                                <td><?= $beli['email']; ?></td>
                                <td><?= $beli['telepon']; ?></td>
                                <td><?= $beli['nama-mobil']; ?></td>
                                <td><?= $beli['merek-mobil']; ?></td>
                                <td><?= $beli['jenis-mobil']; ?></td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <form action="/admin/deleteShop/<?= esc($beli['id']); ?>" method="post">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="button" class="btn btn-danger delete-btn"
                                                data-id="<?= esc($beli['id']); ?>"><i class="ti ti-trash"></i></button>
                                        </form>
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
        const swalMessage = document.querySelector('.swal').dataset.swal;
        if (swalMessage) {
            Swal.fire({
                title: 'Berhasil',
                text: swalMessage,
                icon: 'success'
            });
        }

        document.querySelectorAll('.delete-btn').forEach(button => {
            button.addEventListener('click', function () {
                const form = this.closest('form');
                const id = this.dataset.id;

                Swal.fire({
                    title: 'Apakah Kamu Yakin Dihapus?',
                    text: "Kamu Tidak Akan Bisa Mengulanginya Lagi!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, Hapus!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    });
</script>
<?= $this->endSection(); ?>