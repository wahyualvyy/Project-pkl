<?= $this->extend('layout/template-client'); ?>
<?= $this->section('content'); ?>
<?php helper('text'); ?>
<img src="/img/background.jpg" class="img-fluid" alt="...">
<div class="full-width-background bg-dark py-3">
    <p class="fs-3 text-center text-white">WHY CHOICE US</p>
    <div class="container">
        <div class="row align-items-start">
            <div class="col">
                <div class="card-items">
                    <div class="d-flex d-flex-row">
                        <div class="item">
                            <div
                                class="rounded-circle border border-danger d-flex align-items-center justify-content-center w-15 h-15 bg-danger">
                                <span class="material-symbols-outlined fs-1 text-white">
                                    support_agent
                                </span>
                            </div>
                        </div>
                        <div class="item ms-1">
                            <p class="text-center fs-4 text-danger">LAYANAN SERVICE</p>
                            <p class="text-justify text-white">Lorem ipsum dolor, sit amet consectetur adipisicing
                                elit.
                                Est excepturi, reprehenderit tenetur ducimus illum</p>
                        </div>
                        <div class="vr text-white"></div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card-items">
                    <div class="d-flex d-flex-row">
                        <div class="item">
                            <div
                                class="rounded-circle border border-danger d-flex align-items-center justify-content-center w-15 h-15 bg-danger">
                                <span class="material-symbols-outlined fs-1 text-white">
                                    schedule
                                </span>
                            </div>
                        </div>
                        <div class="item ms-1">
                            <p class="text-center fs-4 text-danger">PESANAN ON TIME</p>
                            <p class="text-justify text-white">Lorem ipsum dolor, sit amet consectetur adipisicing
                                elit.
                                Est excepturi, reprehenderit tenetur ducimus illum</p>
                        </div>
                        <div class="vr text-white"></div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card-items">
                    <div class="d-flex d-flex-row">
                        <div class="item">
                            <div
                                class="rounded-circle border border-danger d-flex align-items-center justify-content-center w-15 h-15 bg-danger">
                                <span class="material-symbols-outlined fs-1 text-white">
                                    safety_check
                                </span>
                            </div>
                        </div>
                        <div class="item ms-1">
                            <p class="text-center fs-4 text-danger">KESELAMATAN</p>
                            <p class="text-justify text-white">Lorem ipsum dolor, sit amet consectetur adipisicing
                                elit.
                                Est excepturi, reprehenderit tenetur ducimus illum</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-2">
    <div class="row">
        <div class="col">
            <p class="fs-3">ARTIKEL POPULER</p>
            <hr>
            <div class="card-group">
                <?php $i = 1;
                foreach ($artikel as $art): ?>
                    <?php if ($i > 3)
                        break; ?>
                    <div class="card me-2">
                        <img src="/uploads/<?= $art['gambar-artikel'] ;?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= esc(word_limiter($art['judul-artikel'], 4)); ?></h5>
                            <p class="card-text"><?= esc(word_limiter($art['isi-artikel'], 4)); ?></p>
                            <p class="card-text"><small class="text-muted"><?= esc($art['tanggal-artikel']); ?></small></p>
                            <p class="text-end">
                                <a href="/artikels/<?= esc($art['slug-artikel']); ?>">Baca Selengkapnya &raquo;</a>
                            </p>
                        </div>
                    </div>
                    <?php $i++; endforeach; ?>
            </div>
            <p class="text-end mt-4">
                <a href="/artikels">Lihat Selengkapnya &raquo;</a>
            </p>


        </div>
    </div>
</div>
<div class="full-width-background bg-dark pt-2 pb-4 mt-5">
    <div class="container">
        <div class="row align-items-center mb-3">
            <div class="col-md-10">
                <p class="text-white fs-3 mb-0">REVIEW PENGGUNA</p>
            </div>
            <div class="col-md-2 text-md-end text-center">
                <a href="/reviews">Lihat Selengkapnya &raquo;</a>
            </div>
        </div>
        <div class="row">
            <?php $i = 1;
            foreach ($review as $view):
                if ($i > 3) {
                    break;
                } ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?= esc($view['judul-review']); ?></h5>
                            <p class="card-text"><?= esc(word_limiter($view['isi-review'], 4)); ?></p>
                        </div>
                        <div class="card-footer">
                            <p class="mb-0">By : <?= esc($view['nama-review']); ?></p>
                            <p class="card-text">
                                <small class="text-muted"><?= esc($view['tanggal-review']); ?></small>
                            </p>
                        </div>
                    </div>
                </div>
                <?php $i++; endforeach ?>
        </div>
    </div>
</div>


<div class="container mt-3 mb-0">
    <p class="fs-3">SHOP KAMI</p>
    <div class="col-8">
        <p class="text-end">
            <a href="/shops">Lihat Selengkapnya &raquo;</a>
        </p>
    </div>
</div>
<div class="row mx-2 mb-5">
    <div class="col-md-8">
        <?php
        $i = 1;
        foreach ($mobil as $mbl):
            if ($i > 3) {
                break;
            }
            ; ?>
            <a href="/shops/shop/<?= $mbl['id']; ?>" class="text-decoration-none">
                <div class="card mb-3 w-100">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/uploads/<?= $mbl['gambar-1']; ?>" class="img-fluid rounded-start" alt="...">
                            <div class="card-bawah mt-2 d-flex">
                                <ul class="d-flex flex-column">
                                    <li class="list-inline-item"><span class="material-symbols-outlined">
                                            calendar_month
                                        </span> <?= esc(date('Y', strtotime($mbl['tanggal']))); ?></li>
                                    <li class="list-inline-item"><span class="material-symbols-outlined">
                                            auto_transmission
                                        </span> <?= esc($mbl['transmisi']); ?></li>
                                    <li class="list-inline-item"><span class="material-symbols-outlined">
                                            location_on
                                        </span> <?= esc($mbl['lokasi']); ?></li>
                                    <li class="list-inline-item"><span class="material-symbols-outlined">
                                            speed
                                        </span><?= esc($mbl['kilometer']); ?> Km</li>
                                </ul>
                                <ul class="d-flex flex-column">
                                    <li class="list-inline-item"><span class="material-symbols-outlined">
                                            manufacturing
                                        </span> <?= esc($mbl['mesin']); ?></li>
                                    <li class="list-inline-item"><span class="material-symbols-outlined">
                                            oil_barrel
                                        </span><?= esc($mbl['bahanbakar']); ?></li>
                                    <li class="list-inline-item"><span class="material-symbols-outlined">
                                            colors
                                        </span><?= esc($mbl['warna']); ?></li>
                                    <li class="list-inline-item"><span class="material-symbols-outlined">
                                            pin
                                        </span><?= esc($mbl['platnomer']); ?></li>
                                </ul>
                            </div>
                        </div>

                        <div class="vr col-md-1"></div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <h4 class="card-title"><?= esc($mbl['nama']); ?></h4>
                                <p class="btn btn-danger">Rp.<?= esc($mbl['harga']); ?></p>
                                <div class="d-flex">
                                    <div class="col-md-6">
                                        <p class="fs-5 text-danger mb-0">Fitur</p>
                                        <ul>
                                            <li><?= esc($mbl['fitur-1']); ?></li>
                                            <li><?= esc($mbl['fitur-2']); ?></li>
                                            <li><?= esc($mbl['fitur-3']); ?></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="fs-5 text-danger mb-0">Interior</p>
                                        <ul>
                                            <li><?= esc($mbl['interior-1']); ?></li>
                                            <li><?= esc($mbl['interior-2']); ?></li>
                                            <li><?= esc($mbl['interior-3']); ?></li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="fs-5 text-danger mb-0">Deksripsi Mobil</p>
                                <p class="card-text"><?= esc(word_limiter($mbl['deskripsi'], 6)); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <?php $i++; endforeach ?>
    </div>
    <div class="col-md-4" id="contact">
        <div class="card">
            <img src="/img/contact-person.png" class="card-img-top custom-img-size mx-auto d-block mt-2" alt="...">
            <div class="card-body">
                <hr>
                <h5 class="card-title text-center">Muhammad Alex</h5>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex">
                            <span class="material-symbols-outlined">
                                mail
                            </span>
                            <p class="ms-1">Email</p>
                            <p class="ms-4">: Alexander@email.com</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="d-flex">
                            <span class="material-symbols-outlined">
                                contacts
                            </span>
                            <p class="ms-1">Kontak</p>
                            <p class="ms-4">: 08123003405010</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="d-flex">
                            <span class="material-symbols-outlined">
                                grid_view
                            </span>
                            <p class="ms-1">Office</p>
                            <p class="ms-4">: Alexander</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer d-flex justify-content-center bg-danger">
                <span class="material-symbols-outlined fs-1 border  rounded-3 text-white">
                    mail
                </span>
                <span class="material-symbols-outlined fs-1 mx-4 border  rounded-3 text-white ">
                    send
                </span>
                <span class="material-symbols-outlined fs-1 border  rounded-3 text-white">
                    chat
                </span>
                <span class="material-symbols-outlined fs-1 ms-4 border  rounded-3 text-white">
                    location_away
                </span>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-top bg-danger py-2">
                <h5 class="card-title ms-2 text-white">Populer</h5>
            </div>
            <?php $i = 1;
            foreach ($artikel as $art):
                if ($i > 3) {
                    break;
                }
                ?>
                <div class="card-body">
                    <div class="col-md-12">
                        <a href="/artikels/<?= esc($art['slug-artikel']); ?>" class="text-decoration-none">
                            <div class="d-flex">
                                <img src="/uploads/<?= $art['gambar-artikel'] ;?>" class="rounded img-fluid img-thumbnail small-img-artikel"
                                    alt="...">
                                <p class="ms-4 card-title text-black"><?= esc($art['judul-artikel']); ?></p>
                            </div>
                        </a>
                    </div>
                </div>
                <?php $i++; endforeach ?>
            <div class="card-footer">
                <p class="text-center">
                    <a href="/artikels">Lihat Selengkapnya &raquo;</a>
                </p>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>