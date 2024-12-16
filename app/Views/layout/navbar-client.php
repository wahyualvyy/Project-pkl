<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container">
        <a class="navbar-brand fs-1 text-white sticky-top" href="#"
            style=" font-family: 'Kaushan Script', cursive">Revena</a>

        <button class="navbar-toggler bg-white" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="d-flex flex-grow-1 justify-content-center">
                <form class="d-flex w-50" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-danger text-white" type="submit">Search</button>
                </form>
            </div>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item fs-5">
                    <a class="nav-link active text-white" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item mx-4 fs-5 ">
                    <a class="nav-link text-white" href="/tentang">Tentang Kami</a>
                </li>
                <!-- <li class="nav-item fs-5">
                    <a class="nav-link text-white" href="/admin">Admin</a>
                </li> -->
            </ul>
        </div>

    </div>
</nav>
<hr class="my-0">
<nav class="navbar sticky-top bg-dark navbar-kecil">
    <div class="container d-flex justify-content-center gap-3 ">
        <li class="nav-item dropdown list-unstyled text-white ">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Mobil
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/shops#Toyota">Toyota</a></li>
                <li><a class="dropdown-item" href="/shops#Mercedes">Mercedes</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="/shops#BMW">BMW</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown list-unstyled text-white ">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Mobil Bekas
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown list-unstyled text-white ">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Artikels Dan Review
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/artikels">Artikel</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="/reviews">Review dan Saran</a></li>
                <li><a class="dropdown-item" href="/reviews/review">Tulis Review dan Saran</a></li>
            </ul>
        </li>
    </div>
</nav>
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header bg-dark">
        <h5 class="offcanvas-title text-white" id="offcanvasRightLabel">Navigasi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body bg-dark">
        <form class="d-flex me-5" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-danger text-white" type="submit">Search</button>
        </form>
        <ul class="navbar-nav">
            <li class="nav-item me-4 fs-4">
                <a class="nav-link active text-white" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item me-4 fs-4 ">
                <a class="nav-link text-white" href="/tentang">Tentang Kami</a>
            </li>
            <li class="nav-item me-3 fs-4">
                <a class="nav-link text-white" href="/#contact">Contact</a>
            </li>
            <!-- <li class="nav-item me-3 fs-4">
                <a class="nav-link text-white" href="/admin">Admin</a>
            </li> -->
        </ul>
    </div>
</div>