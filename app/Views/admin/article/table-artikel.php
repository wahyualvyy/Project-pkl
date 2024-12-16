<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <p class="fs-1 mt-2">Table Data Artikel</p>
            <span>Admin &raquo; Table &raquo; Artikel</span>
            <hr>
            <div class="swal" data-swal="<?= session()->get('pesan'); ?>"></div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark text-center align-middle">
                        <tr>
                            <th>No</th>
                            <th>Judul Artikel</th>
                            <th>Gambar Artikel</th>
                            <th>Isi Artikel</th>
                            <th>Slug Artikel</th>
                            <th>Tanggal Membuat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle text-center">
                        <?php $i = 1;
                        foreach ($artikel as $art): ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= esc($art['judul-artikel']); ?></td>
                                <td><img src="/uploads/<?= esc($art['gambar-artikel']); ?>" alt="Gambar Artikel"
                                        width="100px">
                                </td>
                                <td><?= esc(word_limiter($art['isi-artikel'], 8)); ?></td>
                                <td><?= esc($art['slug-artikel']); ?></td>
                                <td><?= esc($art['tanggal-artikel']); ?></td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="/admin/edit/<?= esc($art['slug-artikel']); ?>"
                                            class="btn btn-warning me-2 text-white"> <i class="ti ti-edit"></i></a>
                                        <form action="/admin/delete/<?= esc($art['id']); ?>" method="post"
                                            class="delete-form">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="button" class="btn btn-danger delete-btn"
                                                data-id="<?= esc($art['id']); ?>"><i class="ti ti-trash"></i></button>
                                        </form>


                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
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