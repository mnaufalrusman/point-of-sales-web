<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <i class="fa-solid fa-store"></i>
        </div>
        <div class="sidebar-brand-text mx-3">POS Naufal</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::route()->getName() == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Master
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ Request::is('category*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('category.index') }}">
            <i class="fa-solid fa-cube"></i>
            <span>Kategori</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fa-solid fa-cubes"></i>
            <span>Produk</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fa-solid fa-id-card"></i>
            <span>Member</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fa-solid fa-truck"></i>
            <span>Supplier</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        TRANSAKSI
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fa-solid fa-money-bill"></i>
            <span>Pengeluaran</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fa-solid fa-download"></i>
            <span>Pembelian</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fa-solid fa-upload"></i>
            <span>Penjualan</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fa-solid fa-cart-shopping"></i>
            <span>Transaksi Aktif</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fa-solid fa-cart-plus"></i>
            <span>Transaksi Baru</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        REPORT
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fa-solid fa-file-pdf"></i>
            <span>Laporan</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        SYSTEM
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fa-solid fa-users"></i>
            <span>User</span></a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fa-solid fa-gears"></i>
            <span>Pengaturan</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    {{-- <!-- Sidebar Message -->
    <div class="sidebar-card d-none d-lg-flex">
        <img class="sidebar-card-illustration mb-2" src="{{ asset('templates/img/undraw_rocket.svg') }}"
            alt="...">
        <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components,
            and more!</p>
        <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to
            Pro!</a>
    </div> --}}

</ul>
<!-- End of Sidebar -->
