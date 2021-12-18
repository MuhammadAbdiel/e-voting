<nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
    <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="/img/boy.png" style="max-width: 60px">

                @if (auth()->user()->level == 'Administrator')
                <span class="ml-2 d-none d-lg-inline text-white small badge bg-success">Admin</span>
                @elseif (auth()->user()->level == 'Petugas')
                <span class="ml-2 d-none d-lg-inline text-white small badge bg-success">Petugas</span>
                @else
                <span class="ml-2 d-none d-lg-inline text-white small badge bg-success">Pemilih</span>
                @endif

            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                @can('admin')
                <a class="dropdown-item" href="/dashboard/admin">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Users
                </a>
                @endcan

                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>
    </ul>
</nav>