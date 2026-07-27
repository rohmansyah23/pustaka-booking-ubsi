<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin'); ?>">
        <div class="sidebar-brand-icon">
            <i class="fas fa-ghost"></i>
        </div>
        <div class="sidebar-brand-text mx-1">Admin PSTK</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Looping Menu -->
    <div class="sidebar-heading">Home</div>
    <li class="nav-item active">
        <!-- Nav Item - Dashboard -->
        <a class="nav-link pb-0" href="<?= base_url('admin'); ?>">
            <i class="fa fa-fw fa-cogs"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="nav-item">
        <!-- Nav Item - Dashboard -->
        <a class="nav-link pb-0" href="<?= base_url('home'); ?>">
            <i class="fa-solid fa-house-user"></i>
            <span>Halaman Utama</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider mt-3">

    <!-- Heading -->
    <div class="sidebar-heading">Master Data</div>
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('buku/kategori'); ?>">
            <i class="fa fa-fw fa-th-list"></i>
            <span>Kategori Buku</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('buku'); ?>">
            <i class="fa fa-fw fa-book"></i>
            <span>Data Buku</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('user/anggota'); ?>">
            <i class="fas fa-users"></i>
            <span>Data Member</span>
        </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider mt-3">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Transaksi -->
    <div class="sidebar-heading">Transaksi</div>

    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('pinjam/DaftarBooking'); ?>">
            <i class="fa fa-fw fa-cart-arrow-down"></i>
            <span>Booking Masuk</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('pinjam'); ?>">
            <i class="fa fa-fw fa-align-right"></i>
            <span>Buku Dipinjam</span>
        </a>
    </li>
    <!-- Divider -->

    <hr class="sidebar-divider mt-3">

    <!-- Laporan -->
    <div class="sidebar-heading">Laporan</div>
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('Laporan/laporan_buku'); ?>">
            <i class="fa fa-fw fa-swatchbook"></i>
            <span>Laporan Data Buku</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('user/anggota'); ?>">
            <i class="fa fa-fw fas fa-users"></i>
            <span>Laporan Data Anggota</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('Laporan/laporan_pinjam'); ?>">
            <i class="fa fa-fw fa-table"></i>
            <span>Laporan Data Peminjaman</span>
        </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider mt-3">
</ul>