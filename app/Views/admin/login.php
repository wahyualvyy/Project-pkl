<?= $this->extend('layout/login'); ?>
<?= $this->section('content') ?>
<div class="container mt-5 pt-5">
    <div class="row">
        <div class="card mb-3 m-auto w-75">
            <div class="row g-0 mt-2">
                <div class="col-md-6 d-flex align-items-center justify-content-center">
                    <img src="/img/login-card.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <div class="col-12 col-sm-8 col-md-12 m-auto">
                            <div class="card-right rounded-left rounded-right">
                                <div class="card-body">
                                    <p class="fs-2 text-center">LOGIN ADMIN</p>
                                    <form action="admin/login" method="post">
                                        <?= csrf_field(); ?>
                                        <input type="text" name="nama" class="form-control my-4 py-3" placeholder="Nama"
                                            autofocus required>
                                            <input type="password" name="password" class="form-control my-4 py-3"
                                            placeholder="Password">
                                        <div class="text-center mt-3">
                                            <button
                                                class="btn btn-primary text-decoration-none btn fs-4 text-white btn-md ">LOGIN
                                            </button>
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