<?= $this->extend('layout/template-client'); ?>
<?= $this->section('content'); ?>
<div class="container mt-2">
    <div class="row">
        <div class="col">
            <a href="/" class="text-decoration-none text-black"><i class="ti ti-home me-1"></i>Dashboard</a> &raquo; <a
                href="/shops/" class="text-decoration-none text-black">Shops</a> &raquo; <?= $mobil['nama']; ?> </span>
            <hr>
            <div class="swal" data-swal="<?= session()->get('pesan'); ?>"></div>
            <div class="row mb-5">
                <div class="col-md-8">
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
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
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                </div>
                <div class="col-md-4" id="contact">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title text-danger fw-bold d-flex">Rp.<?= $mobil['harga']; ?></h3>
                            <h5 class="card-title"><?= $mobil['nama']; ?></h5>
                            <div class="card-bawah bg-body-secondary rounded-4 d-flex">
                                <ul class="d-flex flex-column ms-0 mt-2">
                                    <li class="list-inline-item"><span class="material-symbols-outlined">
                                            calendar_month
                                        </span> <?= date('Y', strtotime($mobil['tanggal'])); ?></li>
                                    <li class="list-inline-item"><span class="material-symbols-outlined">
                                            auto_transmission
                                        </span> <?= $mobil['transmisi']; ?></li>
                                    <li class="list-inline-item"><span class="material-symbols-outlined">
                                            location_on
                                        </span> <?= $mobil['lokasi']; ?></li>
                                </ul>
                                <ul class="d-flex flex-column ms-3 mt-2">
                                    <li class="list-inline-item"><span class="material-symbols-outlined">
                                            speed
                                        </span><?= $mobil['kilometer']; ?> Km</li>
                                    <li class="list-inline-item"><span class="material-symbols-outlined">
                                            manufacturing
                                        </span> <?= $mobil['mesin']; ?></li>
                                    <li class="list-inline-item"><span class="material-symbols-outlined">
                                            oil_barrel
                                        </span><?= $mobil['bahanbakar']; ?></li>
                                </ul>
                            </div>
                            <div class="d-flex justify-content-center mt-2">
                                <button type="button" class="btn border-danger fw-bold text-danger"
                                    data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    Beli Sekarang Juga
                                </button>
                            </div>
                            <div class="text-center">
                                <small class="text-body-secondary">
                                    Jangan Lewatkan Tawaran Terbaik
                                </small>
                            </div>
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header ">

                                            <h5 class="modal-title fs-5 text-center" id="staticBackdropLabel">Beli
                                                Sekarang</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="modal-body-header fw-bold my-3">
                                                Mohon isi data diri anda dengan benar untuk melanjutkan ke proses lebih
                                                lanjut
                                            </div>
                                            <form action="/shop/save" method="post" enctype="multipart/form-data">
                                                <?= csrf_field(); ?>
                                                <div class="mb-3">
                                                    <label for="nama" class="form-label">Nama <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="nama"
                                                        aria-describedby="nameHelp" name="nama"
                                                        placeholder="Cth : alex">
                                                    <div id="nameHelp" class="form-text">We'll never share your name
                                                        with anyone else.</div>
                                                    <input type="hidden" name="nama-mobil"
                                                        value="<?= $mobil['nama']; ?>">
                                                    <input type="hidden" name="id" value="<?= $mobil['id']; ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Email
                                                        address <span class="text-danger">*</span></label>
                                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                                        aria-describedby="emailHelp" name="email"
                                                        placeholder="Cth : alex@gmail.com">
                                                    <div id="emailHelp" class="form-text">We'll never share your email
                                                        with anyone else.</div>
                                                    <input type="hidden" name="merek-mobil"
                                                        value="<?= $mobil['merek']; ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="telepon" class="form-label">No Telepon <span
                                                            class="text-danger">*</span></label>
                                                    <input type="number" class="form-control" id="telepon"
                                                        name="telepon" placeholder="Cth : 0812 8758 0213">
                                                    <input type="hidden" name="jenis-mobil"
                                                        value="<?= $mobil['jenis']; ?>">
                                                </div>
                                                <div class="mb-3 form-check">
                                                    <input type="checkbox" class="form-check-input" id="persyaratan"
                                                        required>
                                                    <label class="form-check-label" for="persyaratan">Dengan mengisi
                                                        kotak centang dan mengirimkan pendaftaran ini ke Revena, saya
                                                        memahami dan menyetujui <span class="text-danger"> Syarat &
                                                            Ketentuan </span> yang diberikan.</label>
                                                </div>
                                                <div class="d-flex justify-content-center">
                                                    <button type="submit" class="btn btn-danger fw-bold">Lanjutkan
                                                        Pembelian</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="d-flex justify-content-center w-100">
                                                <button type="button" class="btn btn-primary fw-bold"
                                                    data-bs-dismiss="modal">Kembali lagi</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-body-secondary d-flex justify-content-center align-items-center ">
                                Revena Certified
                                <span class="material-symbols-outlined text-success ms-2">
                                    verified
                                </span>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar sticky-top bg-white navbar-kecil">
    <div class="container d-flex justify-content-center gap-3 ">
        <ul class="navbar-nav d-flex flex-row">
            <li class="nav-item me-4 fs-6">
                <a class="nav-link active text-black" aria-current="page"
                    href="/shops/shop/<?= $mobil['id']; ?>#detail-mobil">Detail
                    Mobil</a>
            </li>
            <li class="nav-item me-4 fs-6 ">
                <a class="nav-link text-black" href="#">Revena Certified</a>
            </li>
            <li class="nav-item me-3 fs-6">
                <a class="nav-link text-black" href="#">inspeksi</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col">
            <div class="d-flex justify-content-center" id="detail-mobil">
                <hr class="custom-hr bg-danger">
            </div>
            <div class="d-flex justify-content-center">
                <h4 class="text-title">Detail Mobil</h4>
            </div>
            <div class="container ">
                <div class="d-flex flex-wrap justify-content-center gap-4 text-center">
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card d-flex justify-content-center align-items-center py-2">
                            <li class="list-inline-item text-center text-body-secondary">
                                <span class="material-symbols-outlined">
                                    pin
                                </span> Plat Nomer
                            </li>
                            <small class="text-center"><?= $mobil['platnomer']; ?></small>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card d-flex justify-content-center align-items-center py-2">
                            <li class="list-inline-item text-center text-body-secondary">
                                <span class="material-symbols-outlined">
                                    auto_transmission
                                </span> Transmission
                            </li>
                            <small class="text-center"><?= $mobil['transmisi']; ?></small>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card d-flex justify-content-center align-items-center py-2">
                            <li class="list-inline-item text-center text-body-secondary">
                                <span class="material-symbols-outlined">
                                    oil_barrel
                                </span> Bahan Bakar
                            </li>
                            <small class="text-center"><?= $mobil['bahanbakar']; ?></small>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card d-flex justify-content-center align-items-center py-2">
                            <li class="list-inline-item text-center text-body-secondary">
                                <span class="material-symbols-outlined">
                                    date_range
                                </span> Kadaluarsa Pajak
                            </li>
                            <small class="text-center"><?= $mobil['pajak']; ?></small>
                        </div>
                    </div>
                </div>
                <div class="row bg-body-secondary rounded-4 py-2">
                    <div class="col-md-4">
                        <div class="d-flex justify-content-between">
                            <li class="list-inline-item">Tahun Produksi</li>
                            <p class="mb-0"><?= date('Y', strtotime($mobil['tanggal'])); ?></p>
                        </div>
                        <div class="d-flex justify-content-between my-2">
                            <li class="list-inline-item">Warna</li>
                            <p class="mb-0"><?= $mobil['warna']; ?></p>
                        </div>
                        <?php
                        $bukuManual = strtolower(trim($mobil['buku-manual']));
                        $bukuService = strtolower(trim($mobil['buku-service']));
                        $kunciSerep = strtolower(trim($mobil['kunci']));

                        $bukuManualIcon = $bukuManual === 'ada'
                            ? '<i class="ti ti-circle-dashed-check text-success me-2"></i>'
                            : '<i class="ti ti-circle-dashed-x text-danger me-2"></i>';
                        $bukuServiceIcon = $bukuService === 'ada'
                            ? '<i class="ti ti-circle-dashed-check text-success me-2"></i>'
                            : '<i class="ti ti-circle-dashed-x text-danger me-2"></i>';
                        $kunciSerepIcon = $kunciSerep === 'ada'
                            ? '<i class="ti ti-circle-dashed-check text-success me-2"></i>'
                            : '<i class="ti ti-circle-dashed-x text-danger me-2"></i>';

                        $lengkap = $bukuManual === 'ada' && $bukuService === 'ada' && $kunciSerep === 'ada'
                            ? 'Lengkap' : 'Kurang Lengkap';
                        ?>
                        <div class="d-flex justify-content-between">
                            <li class="list-inline-item">Kelengkapan</li>
                            <button type="button" class="btn" data-bs-container="body" data-bs-toggle="popover"
                                data-bs-placement="top" data-bs-html="true" data-bs-content='
                                <div class="text-center fs-6"><i class="ti ti-clipboard-data me-1"></i>Kelengkapan</div>
                                <hr>
                                <div class="d-flex align-items-center fs-6">
                                <?= $bukuManualIcon; ?><span>Buku Manual</span>
                                </div>
                                <div class="d-flex align-items-center fs-6">
                                <?= $bukuServiceIcon; ?><span>Buku Service</span>
                                </div>
                                <div class="d-flex align-items-center fs-6">
                                <?= $kunciSerepIcon; ?><span>Kunci Serep</span>
                                </div>'>
                                <div class="d-flex align-items-center">
                                    <span><?= $lengkap; ?></span><i class="ti ti-info-circle fs-5 ms-2"></i>
                                </div>
                            </button>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="d-flex justify-content-between">
                            <li class="list-inline-item">Kilometer </li>
                            <p class="mb-0"><?= $mobil['kilometer']; ?> Km</p>
                        </div>
                        <div class="d-flex justify-content-between my-2">
                            <li class="list-inline-item">BPKB </li>
                            <p class="mb-0"><?= $mobil['bpkb']; ?></p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <li class="list-inline-item">Lokasi </li>
                            <p class="mb-0"><?= $mobil['lokasi']; ?></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex justify-content-between">
                            <li class="list-inline-item">CC Mesin </li>
                            <p class="mb-0"><?= $mobil['cc']; ?> CC</p>
                        </div>
                        <div class="d-flex justify-content-between my-2">
                            <li class="list-inline-item">Servis Terakhir </li>
                            <p class="mb-0"><?= $mobil['servis']; ?></p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <li class="list-inline-item">Seats </li>
                            <p class="mb-0"><?= $mobil['seat']; ?> Seats</p>
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
        const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]');
        const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl));
    });

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