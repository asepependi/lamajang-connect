<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #033D44;">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">

        <div class="sidebar-brand-text mx-3">Lamajang Connect </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->is('dashboard') || request()->is('/') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">


    <!-- Nav Item - Charts -->
    <li class="nav-item {{ request()->is('dashboard/budaya*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('budaya.index') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Budaya</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Nav Item - Tables -->
    <li class="nav-item {{ request()->is('dashboard/pariwisata*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('pariwisata.index') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Pariwisata</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">



    <!-- Nav Item - Tables -->
    <li class="nav-item {{ request()->is('dashboard/penginapan*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('penginapan.index') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Penginapan</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
</ul>
