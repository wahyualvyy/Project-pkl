<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container mt-2">
    <div class="col">
        <div class="row">
            <p class="fs-1">Profil Pengaturan</p>
            <span class="">Admin &raquo; Profil </span>
            <hr>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-8">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-12 col-md-4 d-flex justify-content-center align-items-center">
                                <img src="/img/profile.jpeg" class="img-fluid rounded-circle" alt="...">
                            </div>
                            <div class="col-12 col-md-8">
                                <div class="card-body">
                                    <form>
                                        <div class="row mb-3">
                                            <label for="nama" class="col-sm-4 col-form-label">Nama</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="nama">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="email" class="col-sm-4 col-form-label">Email</label>
                                            <div class="col-sm-8">
                                                <input type="email" class="form-control" id="email">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="password" class="col-sm-4 col-form-label">Password</label>
                                            <div class="col-sm-8">
                                                <input type="password" class="form-control" id="password">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="gambar" class="col-sm-4 col-form-label">Photo Profile</label>
                                            <div class="col-sm-8">
                                                <input type="file" class="form-control" id="gambar">
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <button type="submit" class="btn btn-primary ">Update Profil</button>
                                        </div>
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
<?= $this->endSection(); ?>