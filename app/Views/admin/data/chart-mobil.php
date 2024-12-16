<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <hr>
            <p class="fs-1 mt-2">Grafik Penjualan Mobil</p>
            <span class="">Admin &raquo; Chart</span>
            <hr>
            <div>
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>