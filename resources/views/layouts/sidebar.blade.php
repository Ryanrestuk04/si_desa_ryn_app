<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark
 accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify
content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-0">
            <!-- <i class="fas fa-home"></i> -->
        </div>
        <div class="sidebar-brand-text mx-3">DESA RYAN
            <sup>app</sup>
        </div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        Management Data
    </div>

    <!-- Nav Item - Tables -->
    <li class="nav-item {{ request()->is('resident*') ? 'active' : '' }}">
        <a class="nav-link" href="/resident">
            <i class="fas fa-fw fa-table"></i>
            <span>Penduduk</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0"
            id="sidebarToggle"></button>
    </div>
</ul>