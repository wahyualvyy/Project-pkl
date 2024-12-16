<nav class="navbar navbar-expand-lg navbar-admin">
    <div class="container">
        <a class="navbar-brand text-white" href="#">Admin Navigasi</a>
        <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon text-white"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
                    <a class="nav-link text-white" aria-current="page" href="/">
                    <i class="ti ti-home-2 me-1"></i>Dashboard
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="ti ti-article me-1"></i>Artikel
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/admin/artikel/form-artikel">Form Artikel</a></li>
                        <li><a class="dropdown-item" href="/admin/artikel/table-artikel">Tabel Artikel</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="/admin/review/table-review">Tabel Review</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="ti ti-brand-databricks me-1"></i>Mobil
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/admin/form">Form Mobil</a></li>
                        <li><a class="dropdown-item" href="/admin/table">Tabel Mobil</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="/admin/chart">Grafik Mobil</a></li>
                        <li><a class="dropdown-item" href="/admin/data/shop">Tabel Pembeli</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" aria-current="page" href="/admin/pengaturan">
                        <i class="ti ti-settings me-1"></i>Pengaturan
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/admin/"><i class="ti ti-logout me-1"></i>Logout</a>
                </li>
            </ul>
        </div>

    </div>
</nav>