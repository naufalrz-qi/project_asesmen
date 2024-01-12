<main class="d-flex flex-nowrap">
    <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <svg class="bi pe-none me-2" width="40" height="32">
                <use xlink:href="#bootstrap"></use>
            </svg>
            <span class="fs-4">Menu Utama</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="#" id="menu-home" class="nav-link active" aria-current="page">
                    Home
                </a>
            </li>
            <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 nav-link text-white" data-bs-toggle="collapse" data-bs-target="#master-collapse" aria-expanded="false">
                  File Master
                </button>
                <div class="collapse" id="master-collapse" style="">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="#" id="menu-user" class="ms-3 nav-link text-white d-inline-flex text-decoration-none rounded">User</a></li>
                    <li><a href="#" id="menu-produk" class="ms-3 nav-link text-white d-inline-flex text-decoration-none rounded">produk</a></li>
                    <li><a href="#" id="menu-karyawan" class="ms-3 nav-link text-white d-inline-flex text-decoration-none rounded">Karyawan</a></li>
                  </ul>
                </div>
              </li>
              <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 nav-link text-white" data-bs-toggle="collapse" data-bs-target="#transaksi-collapse" aria-expanded="false">
                  File Transaksi
                </button>
                <div class="collapse" id="transaksi-collapse" style="">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="#" class="ms-3 nav-link text-white d-inline-flex text-decoration-none rounded">Coming Soon</a></li>
                  </ul>
                </div>
              </li>
              <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 nav-link text-white" data-bs-toggle="collapse" data-bs-target="#laporan-collapse" aria-expanded="false">
                  File Laporan
                </button>
                <div class="collapse" id="laporan-collapse" style="">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="#" class="ms-3 nav-link text-white d-inline-flex text-decoration-none rounded">Coming Soon</a></li>
                  </ul>
                </div>
              </li>
        </ul>
        <hr>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="" width="32" height="32"
                    class="rounded-circle me-2">
                <strong>mdo</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
        </div>
    </div>
    <div class="b-example-divider b-example-vr"></div>

</main>