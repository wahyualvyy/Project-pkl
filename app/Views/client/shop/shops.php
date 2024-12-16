<?= $this->extend('layout/template-client'); ?>
<?= $this->section('content'); ?>
<div class="container mb-5 mt-2">
    <div class="row">
        <div class="col">
            <a href="/" class="text-decoration-none text-black"><i class="ti ti-home me-1"></i>Dashboard</a> &raquo;
            Shops
            <hr>
            <h4 class="text-center" id="Toyota">Mobil Toyota</h4>
            <div class="row mb-4">
                <?php foreach ($toyota as $mbl): ?>
                    <div class="col-md-4 mb-3">
                        <div class="card me-2">
                            <div id="carouselExampleIndicators<?= $mbl['id']; ?>" class="carousel slide">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators<?= $mbl['id']; ?>"
                                        data-bs-slide-to="0" class="active" aria-current="true"
                                        aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators<?= $mbl['id']; ?>"
                                        data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators<?= $mbl['id']; ?>"
                                        data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="/uploads/<?= $mbl['gambar-1']; ?>" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="/uploads/<?= $mbl['gambar-2']; ?>" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="/uploads/<?= $mbl['gambar-3']; ?>" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleIndicators<?= $mbl['id']; ?>" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleIndicators<?= $mbl['id']; ?>" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            <div class="card-body">
                                <a href="/shops/shop/<?= $mbl['id']; ?>" class="text-decoration-none text-black">
                                    <h3 class="card-title text-danger fw-bold">Rp. <?= $mbl['harga']; ?></h3>
                                    <h5 class="card-title"><?= $mbl['nama']; ?></h5>
                                    <div class="card-bawah border rounded-4 d-flex">
                                        <ul class="d-flex flex-column ms-0">
                                            <li class="list-inline-item"><span class="material-symbols-outlined">
                                                    calendar_month
                                                </span> <?= date('Y', strtotime($mbl['tanggal'])); ?></li>
                                            <li class="list-inline-item"><span class="material-symbols-outlined">
                                                    auto_transmission
                                                </span> <?= $mbl['transmisi']; ?></li>
                                            <li class="list-inline-item"><span class="material-symbols-outlined">
                                                    location_on
                                                </span> <?= $mbl['lokasi']; ?></li>
                                            <li class="list-inline-item"><span class="material-symbols-outlined">
                                                    speed
                                                </span><?= $mbl['kilometer']; ?> Km</li>
                                        </ul>
                                        <ul class="d-flex flex-column ms-3">
                                            <li class="list-inline-item"><span class="material-symbols-outlined">
                                                    manufacturing
                                                </span> <?= $mbl['mesin']; ?></li>
                                            <li class="list-inline-item"><span class="material-symbols-outlined">
                                                    chair
                                                </span><?= $mbl['seat']; ?> Seats</li>
                                            <li class="list-inline-item"><span class="material-symbols-outlined">
                                                    oil_barrel
                                                </span><?= $mbl['bahanbakar']; ?></li>
                                            <li class="list-inline-item"><span class="material-symbols-outlined">
                                                    colors
                                                </span><?= $mbl['warna']; ?></li>
                                        </ul>
                                    </div>
                                </a>
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
                <?php endforeach ?>
            </div>
            <hr>
            <h4 class="text-center mt-2" id="Mercedes">Mobil Mercedes</h4>
            <div class="row mb-4">
                <?php foreach ($mercedes as $mbl): ?>
                    <div class="col-md-4 mb-3">
                        <div class="card me-2">
                            <div id="carouselExampleIndicators<?= $mbl['id']; ?>" class="carousel slide">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators<?= $mbl['id']; ?>"
                                        data-bs-slide-to="0" class="active" aria-current="true"
                                        aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators<?= $mbl['id']; ?>"
                                        data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators<?= $mbl['id']; ?>"
                                        data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="/uploads/<?= $mbl['gambar-1']; ?>" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="/uploads/<?= $mbl['gambar-2']; ?>" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="/uploads/<?= $mbl['gambar-3']; ?>" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleIndicators<?= $mbl['id']; ?>" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleIndicators<?= $mbl['id']; ?>" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            <div class="card-body">
                                <a href="/shops/shop/<?= $mbl['id']; ?>" class="text-decoration-none text-black">
                                    <h3 class="card-title text-danger fw-bold">Rp. <?= $mbl['harga']; ?></h3>
                                    <h5 class="card-title"><?= $mbl['nama']; ?></h5>
                                    <div class="card-bawah border rounded-4 d-flex">
                                        <ul class="d-flex flex-column ms-0">
                                            <li class="list-inline-item"><span class="material-symbols-outlined">
                                                    calendar_month
                                                </span> <?= date('Y', strtotime($mbl['tanggal'])); ?></li>
                                            <li class="list-inline-item"><span class="material-symbols-outlined">
                                                    auto_transmission
                                                </span> <?= $mbl['transmisi']; ?></li>
                                            <li class="list-inline-item"><span class="material-symbols-outlined">
                                                    location_on
                                                </span> <?= $mbl['lokasi']; ?></li>
                                            <li class="list-inline-item"><span class="material-symbols-outlined">
                                                    speed
                                                </span><?= $mbl['kilometer']; ?> Km</li>
                                        </ul>
                                        <ul class="d-flex flex-column ms-3">
                                            <li class="list-inline-item"><span class="material-symbols-outlined">
                                                    manufacturing
                                                </span> <?= $mbl['mesin']; ?></li>
                                            <li class="list-inline-item"><span class="material-symbols-outlined">
                                                    chair
                                                </span><?= $mbl['seat']; ?> Seats</li>
                                            <li class="list-inline-item"><span class="material-symbols-outlined">
                                                    oil_barrel
                                                </span><?= $mbl['bahanbakar']; ?></li>
                                            <li class="list-inline-item"><span class="material-symbols-outlined">
                                                    colors
                                                </span><?= $mbl['warna']; ?></li>
                                        </ul>
                                    </div>
                                </a>
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
                <?php endforeach ?>
            </div>
            <hr>
            <h4 class="text-center mt-2" id="BMW">Mobil BMW</h4>
            <div class="row mb-4">
                <?php foreach ($bmw as $mbl): ?>
                    <div class="col-md-4 mb-3">
                        <div class="card me-2">
                            <div id="carouselExampleIndicators<?= $mbl['id']; ?>" class="carousel slide">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators<?= $mbl['id']; ?>"
                                        data-bs-slide-to="0" class="active" aria-current="true"
                                        aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators<?= $mbl['id']; ?>"
                                        data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators<?= $mbl['id']; ?>"
                                        data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="/uploads/<?= $mbl['gambar-1']; ?>" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="/uploads/<?= $mbl['gambar-2']; ?>" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="/uploads/<?= $mbl['gambar-3']; ?>" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleIndicators<?= $mbl['id']; ?>" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleIndicators<?= $mbl['id']; ?>" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            <div class="card-body">
                                <a href="/shops/shop/<?= $mbl['id']; ?>" class="text-decoration-none text-black">
                                    <h3 class="card-title text-danger fw-bold">Rp. <?= $mbl['harga']; ?></h3>
                                    <h5 class="card-title"><?= $mbl['nama']; ?></h5>
                                    <div class="card-bawah border rounded-4 d-flex">
                                        <ul class="d-flex flex-column ms-0">
                                            <li class="list-inline-item"><span class="material-symbols-outlined">
                                                    calendar_month
                                                </span> <?= date('Y', strtotime($mbl['tanggal'])); ?></li>
                                            <li class="list-inline-item"><span class="material-symbols-outlined">
                                                    auto_transmission
                                                </span> <?= $mbl['transmisi']; ?></li>
                                            <li class="list-inline-item"><span class="material-symbols-outlined">
                                                    location_on
                                                </span> <?= $mbl['lokasi']; ?></li>
                                            <li class="list-inline-item"><span class="material-symbols-outlined">
                                                    speed
                                                </span><?= $mbl['kilometer']; ?> Km</li>
                                        </ul>
                                        <ul class="d-flex flex-column ms-3">
                                            <li class="list-inline-item"><span class="material-symbols-outlined">
                                                    manufacturing
                                                </span> <?= $mbl['mesin']; ?></li>
                                            <li class="list-inline-item"><span class="material-symbols-outlined">
                                                    chair
                                                </span><?= $mbl['seat']; ?> Seats</li>
                                            <li class="list-inline-item"><span class="material-symbols-outlined">
                                                    oil_barrel
                                                </span><?= $mbl['bahanbakar']; ?></li>
                                            <li class="list-inline-item"><span class="material-symbols-outlined">
                                                    colors
                                                </span><?= $mbl['warna']; ?></li>
                                        </ul>
                                    </div>
                                </a>
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
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
