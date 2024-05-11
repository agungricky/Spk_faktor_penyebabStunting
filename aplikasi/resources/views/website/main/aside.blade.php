<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('/public/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Sehat Nusantara</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('/public/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">
                    @if ($dataLogin)
                        <span>{{ $dataLogin->Username }}</span>
                    @endif
                </a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link bg-info">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav">
                        @if ($dataLogin->Role == 'Pengguna')
                            <li class="nav-item">
                                <a href="{{ url('/') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>User</p>
                                </a>
                            </li>
                        @endif
                        @if ($dataLogin->Role == 'Bidan')
                            <li class="nav-item">
                                <a href="{{ url('Admin') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Admin</p>
                                </a>
                            </li>
                        @endif
                    </ul>
                </li>

                @if ($dataLogin->Role == 'Pengguna')
                    <li class="nav-item">
                        <a href="#" class="nav-link bg-info">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                                Fitur
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav">
                            <li class="nav-item">
                                <a href="{{ url('Analisa-Faktor-Stunting') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Analisa Faktor Stunting</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/Riwayat-kesehatan') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Cek Riwayat Hasil</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
