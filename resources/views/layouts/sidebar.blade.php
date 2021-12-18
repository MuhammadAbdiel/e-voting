<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon">
            <img src="/img/voting.png">
        </div>
        <div class="sidebar-brand-text mx-3">E - VOTING</div>
    </a>
    <hr class="sidebar-divider my-0">

    @can('petugas')
    <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item {{ Request::is('dashboard/kotak') ? 'active' : '' }}">
        <a class="nav-link" href="/dashboard/kotak">
            <i class="fas fa-fw fa-columns"></i>
            <span>Kotak Suara</span>
        </a>
    </li>
    @endcan

    @can('admin')
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
            aria-controls="collapseForm">
            <i class="fab fa-fw fa-wpforms"></i>
            <span>Kelola Data</span>
        </a>
        <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Data</h6>
                <a class="collapse-item" href="/dashboard/calon">Data Kandidat</a>
                <a class="collapse-item" href="/dashboard/user">Data Pemilih</a>
            </div>
        </div>
    </li>
    @endcan

    <li class="nav-item {{ Request::is('dashboard/bilik') ? 'active' : '' }}">
        <a class="nav-link" href="/dashboard/bilik">
            <i class="fas fa-fw fa-table"></i>
            <span>Bilik Suara</span>
        </a>
    </li>
    <li class="nav-item {{ Request::is('dashboard/hitung') ? 'active' : '' }}">
        <a class="nav-link" href="/dashboard/hitung">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Quick Count</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <div class="version" id="version-ruangadmin"></div>
</ul>