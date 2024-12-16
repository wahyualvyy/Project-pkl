<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-body">
                    <h2 class="fs-1">Form Penginputan</h2>
                    <p>Admin &raquo; Form &raquo; Mobil</p>
                    <hr>

                    <form action="/mobil/create" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>

                        <div class="mb-3">
                            <label for="gambar-1" class="form-label fw-bold">Gambar Mobil - 1 :</label>
                            <input type="file" class="form-control" id="gambar-1" name="gambar-1">
                        </div>

                        <div class="mb-3">
                            <label for="gambar-2" class="form-label fw-bold">Gambar Mobil - 2 :</label>
                            <input type="file" class="form-control" id="gambar-2" name="gambar-2">
                        </div>

                        <div class="mb-3">
                            <label for="gambar-3" class="form-label fw-bold">Gambar Mobil - 3 :</label>
                            <input type="file" class="form-control" id="gambar-3" name="gambar-3">
                        </div>

                        <div class="mb-3">
                            <label for="nama" class="form-label fw-bold">Nama Mobil:</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>

                        <div class="mb-3">
                            <label for="deskripsi" class="form-label fw-bold">Deskripsi Mobil:</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="harga" class="form-label fw-bold">Harga Mobil:</label>
                            <input type="text" class="form-control" id="harga" name="harga">
                        </div>

                        <div class="mb-3">
                            <label for="tanggal" class="form-label fw-bold">Tanggal Pembuatan:</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal">
                        </div>

                        <div class="mb-3">
                            <label for="transmisi" class="form-label fw-bold">Pilih Transmisi:</label>
                            <select class="form-select" name="transmisi" id="transmisi">
                                <option selected>Pilih Transmisi</option>
                                <option value="Manual">Manual</option>
                                <option value="Otomatis">Otomatis</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="lokasi" class="form-label fw-bold">Lokasi:</label>
                            <input type="text" class="form-control" id="lokasi" name="lokasi">
                        </div>

                        <div class="mb-3">
                            <label for="kilometer" class="form-label fw-bold">Kilometer:</label>
                            <input type="text" class="form-control" id="kilometer" name="kilometer">
                        </div>

                        <div class="mb-3">
                            <label for="mesin" class="form-label fw-bold">Pilih Mesin:</label>
                            <select class="form-select" name="mesin" id="mesin">
                                <option selected>Pilih Mesin</option>
                                <option value="Baik">Baik</option>
                                <option value="Rusak">Rusak</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="bahanbakar" class="form-label fw-bold">Pilih Bahan Bakar:</label>
                            <select class="form-select" name="bahanbakar" id="bahanbakar">
                                <option selected>Pilih Bahan Bakar</option>
                                <option value="Bensin">Bensin</option>
                                <option value="Diesel">Diesel</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="platnomer" class="form-label fw-bold">Pilih Plat Nomer:</label>
                            <select class="form-select" name="platnomer" id="platnomer">
                                <option selected>Pilih Plat Nomer</option>
                                <option value="Genap">Genap</option>
                                <option value="Ganjil">Ganjil</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="pajak" class="form-label fw-bold">Tanggal Pajak:</label>
                            <input type="date" class="form-control" id="pajak" name="pajak">
                        </div>

                        <div class="mb-3">
                            <label for="warna" class="form-label fw-bold">Warna Mobil:</label>
                            <input type="text" class="form-control" id="warna" name="warna">
                        </div>

                        <div class="mb-3">
                            <label for="bpkb" class="form-label fw-bold">Pilih BPKB:</label>
                            <select class="form-select" name="bpkb" id="bpkb">
                                <option selected>Pilih BPKB</option>
                                <option value="Ada">Ada</option>
                                <option value="Tidak Ada">Tidak Ada</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="cc" class="form-label fw-bold">Berapa cc:</label>
                            <input type="number" class="form-control" id="cc" name="cc">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Merek Mobil:</label>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="merek[]" value="Mercedes"
                                    id="merek-mercedes">
                                <label class="form-check-label" for="merek-mercedes">Mercedes</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="merek[]" value="BMW"
                                    id="merek-bmw">
                                <label class="form-check-label" for="merek-bmw">BMW</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="merek[]" value="Toyota"
                                    id="merek-toyota">
                                <label class="form-check-label" for="merek-toyota">Toyota</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Jenis Mobil:</label>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="jenis" value="SUV" id="jenis-suv">
                                <label class="form-check-label" for="jenis-suv">SUV</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="jenis" value="SPORT"
                                    id="jenis-sport">
                                <label class="form-check-label" for="jenis-sport">SPORT</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="jenis" value="LUXURY"
                                    id="jenis-luxury">
                                <label class="form-check-label" for="jenis-luxury">LUXURY</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="servis" class="form-label fw-bold">Tanggal Service:</label>
                            <input type="date" class="form-control" id="servis" name="servis">
                        </div>

                        <div class="mb-3">
                            <label for="duduk" class="form-label fw-bold">Seat:</label>
                            <select name="duduk" id="duduk" class="form-select">
                                <option selected>Pilih Berapa Penumpang</option>
                                <option value="2">2 Seat</option>
                                <option value="4">4 Seat</option>
                                <option value="6">6 Seat</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="buku-manual" class="form-label fw-bold">Buku Manual:</label>
                            <select class="form-select" name="buku-manual" id="buku-manual">
                                <option selected>Pilih Buku Manual</option>
                                <option value="Ada">Ada</option>
                                <option value="Tidak Ada">Tidak Ada</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="buku-service" class="form-label fw-bold">Buku Service:</label>
                            <select class="form-select" name="buku-service" id="buku-service">
                                <option selected>Pilih Buku Service</option>
                                <option value="Ada">Ada</option>
                                <option value="Tidak Ada">Tidak Ada</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="kunci" class="form-label fw-bold">Kunci Serep:</label>
                            <select class="form-select" name="kunci" id="kunci">
                                <option selected>Pilih Kunci Serep</option>
                                <option value="Ada">Ada</option>
                                <option value="Tidak Ada">Tidak Ada</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="fitur-1" class="form-label fw-bold">Fitur - 1:</label>
                            <input type="text" class="form-control" id="fitur-1" name="fitur-1">
                        </div>

                        <div class="mb-3">
                            <label for="fitur-2" class="form-label fw-bold">Fitur - 2:</label>
                            <input type="text" class="form-control" id="fitur-2" name="fitur-2">
                        </div>

                        <div class="mb-3">
                            <label for="fitur-3" class="form-label fw-bold">Fitur - 3:</label>
                            <input type="text" class="form-control" id="fitur-3" name="fitur-3">
                        </div>

                        <div class="mb-3">
                            <label for="interior-1" class="form-label fw-bold">Interior - 1:</label>
                            <input type="text" class="form-control" id="interior-1" name="interior-1">
                        </div>

                        <div class="mb-3">
                            <label for="interior-2" class="form-label fw-bold">Interior - 2:</label>
                            <input type="text" class="form-control" id="interior-2" name="interior-2">
                        </div>

                        <div class="mb-3">
                            <label for="interior-3" class="form-label fw-bold">Interior - 3:</label>
                            <input type="text" class="form-control" id="interior-3" name="interior-3">
                        </div>

                        <button type="submit" class="btn btn-success d-block mx-auto">Submit Data Mobil</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>