<nav class="sidebar">
    <div class="sidebar-header">
        <a href="{{ route('dashboard') }}" class="sidebar-brand">
            CN<span>PLUS</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="link-icon" data-feather="home"></i>
                    <span class="link-title">Home</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#master" role="button" aria-expanded="false"
                    aria-controls="emails">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">File Master</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="master">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link">User</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('produk.index') }}" class="nav-link">Produk</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('kelompok_produk.index') }}" class="nav-link">Kelompok Produk</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Karyawan</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#transfer" role="button" aria-expanded="false"
                    aria-controls="emails">
                    <i class="link-icon" data-feather="server"></i>
                    <span class="link-title">File Transfer</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="transfer">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link">Coming Soon</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#laporan" role="button" aria-expanded="false"
                    aria-controls="emails">
                    <i class="link-icon" data-feather="edit-2"></i>
                    <span class="link-title">File Laporan</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="laporan">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link">Coming Soon</a>
                        </li>
                    </ul>
                </div>
            </li>

        </ul>
    </div>
</nav>
