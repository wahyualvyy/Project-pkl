<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container mt-2">
    <div class="col">
        <div class="row">
            <p class="fs-1">Profil Pengaturan</p>
            <span class="">Admin &raquo; <a href="/admin/table" class="text-decoration-none text-black">Table Mobil</a>
                &raquo; Detail &raquo; <?= $mobil['nama']; ?> </span>
            <hr>
            <div class="swal" data-swal="<?= session()->get('pesan'); ?>"></div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-8">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div id="carouselExampleIndicators" class="carousel slide">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="0" class="active" aria-current="true"
                                        aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="/uploads/<?= $mobil['gambar-1']; ?>" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="/uploads/<?= $mobil['gambar-2']; ?>" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="/uploads/<?= $mobil['gambar-3']; ?>" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-12 col-md-12">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <label for="nama" class="col-sm-4 col-form-label">Nama</label>
                                    <div class="col-sm-8">
                                        <p id="nama"><?= $mobil['nama']; ?></p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="deskripsi" class="col-sm-4 col-form-label">Deskripsi</label>
                                    <div class="col-sm-8">
                                        <p id="deskripsi"><?= $mobil['deskripsi']; ?></p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="harga" class="col-sm-4 col-form-label">Harga</label>
                                    <div class="col-sm-8">
                                        <p id="harga"><?= $mobil['harga']; ?></p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="tanggal" class="col-sm-4 col-form-label">Tanggal Pembuatan</label>
                                    <div class="col-sm-8">
                                        <p id="tanggal"><?= $mobil['tanggal']; ?></p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="transmisi" class="col-sm-4 col-form-label">Transmisi</label>
                                    <div class="col-sm-8">
                                        <p id="transmisi"><?= $mobil['transmisi']; ?></p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="lokasi" class="col-sm-4 col-form-label">Lokasi</label>
                                    <div class="col-sm-8">
                                        <p id="lokasi"><?= $mobil['lokasi']; ?></p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="kilometer" class="col-sm-4 col-form-label">Kilometer</label>
                                    <div class="col-sm-8">
                                        <p id="kilometer"><?= $mobil['kilometer']; ?></p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="mesin" class="col-sm-4 col-form-label">Mesin</label>
                                    <div class="col-sm-8">
                                        <p id="mesin"><?= $mobil['mesin']; ?></p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="bahanbakar" class="col-sm-4 col-form-label">Bahanbakar</label>
                                    <div class="col-sm-8">
                                        <p id="bahanbakar"><?= $mobil['bahanbakar']; ?></p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="platnomer" class="col-sm-4 col-form-label">Plat Nomer</label>
                                    <div class="col-sm-8">
                                        <p id="platnomer"><?= $mobil['platnomer']; ?></p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="pajak" class="col-sm-4 col-form-label">Pajak</label>
                                    <div class="col-sm-8">
                                        <p id="pajak"><?= $mobil['pajak']; ?></p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="warna" class="col-sm-4 col-form-label">Warna</label>
                                    <div class="col-sm-8">
                                        <p id="warna"><?= $mobil['warna']; ?></p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="bpkb" class="col-sm-4 col-form-label">BPKB</label>
                                    <div class="col-sm-8">
                                        <p id="bpkb"><?= $mobil['bpkb']; ?></p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="cc" class="col-sm-4 col-form-label">CC</label>
                                    <div class="col-sm-8">
                                        <p id="cc"><?= $mobil['cc']; ?></p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="merek" class="col-sm-4 col-form-label">Merek Mobil</label>
                                    <div class="col-sm-8">
                                        <p id="merek"><?= $mobil['merek']; ?></p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="jenis" class="col-sm-4 col-form-label">Jenis Mobil</label>
                                    <div class="col-sm-8">
                                        <p id="jenis"><?= $mobil['jenis']; ?></p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="servis" class="col-sm-4 col-form-label">Tanggal Service</label>
                                    <div class="col-sm-8">
                                        <p id="servis"><?= $mobil['servis']; ?></p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="seat" class="col-sm-4 col-form-label">Tempat Duduk</label>
                                    <div class="col-sm-8">
                                        <p id="seat"><?= $mobil['seat']; ?></p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="buku-manual" class="col-sm-4 col-form-label">Buku Manual</label>
                                    <div class="col-sm-8">
                                        <p id="buku-manual"><?= $mobil['buku-manual']; ?></p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="buku-service" class="col-sm-4 col-form-label">Buku Service</label>
                                    <div class="col-sm-8">
                                        <p id="buku-service"><?= $mobil['buku-service']; ?></p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="kunci" class="col-sm-4 col-form-label">Kunci Serep</label>
                                    <div class="col-sm-8">
                                        <p id="kunci"><?= $mobil['kunci']; ?></p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="fitur-1" class="col-sm-4 col-form-label">Fitur-1</label>
                                    <div class="col-sm-8">
                                        <p id="fitur-1"><?= $mobil['fitur-1']; ?></p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="fitur-2" class="col-sm-4 col-form-label">Fitur-2</label>
                                    <div class="col-sm-8">
                                        <p id="fitur-2"><?= $mobil['fitur-2']; ?></p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="fitur-3" class="col-sm-4 col-form-label">fitur-3</label>
                                    <div class="col-sm-8">
                                        <p id="fitur-3"><?= $mobil['fitur-3']; ?></p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="interior-1" class="col-sm-4 col-form-label">Interior-1</label>
                                    <div class="col-sm-8">
                                        <p id="interior-1"><?= $mobil['interior-1']; ?></p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="interior-2" class="col-sm-4 col-form-label">Interior-2</label>
                                    <div class="col-sm-8">
                                        <p id="interior-2"><?= $mobil['interior-2']; ?></p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="interior-3" class="col-sm-4 col-form-label">Interior-3</label>
                                    <div class="col-sm-8">
                                        <p id="interior-3"><?= $mobil['interior-3']; ?></p>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-warning me-2"><i
                                            class="ti ti-edit"></i></button>
                                    <form action="/admin/deleteMobil/<?= esc($mobil['id']); ?>" method="post"
                                        class="delete-form">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="button" class="btn btn-danger delete-btn"
                                            data-id="<?= esc($mobil['id']); ?>"><i class="ti ti-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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