<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ asset('/') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    @can('manage_petugas')
    <li class="nav-item active">
        <a class="nav-link" href="{{ asset('/') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>    
    @endcan

    @can('manage_admin')
    <li class="nav-item active">
        <a class="nav-link" href="{{ asset('/') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>    
    @endcan

    <!-- Divider -->
    <hr class="sidebar-divider">
    <li class="nav-item active">
        <a class="nav-link" href="{{ asset('/grafik') }}">
            <i class="fa-solid fa-chart-line"></i>
            <span>Chart</span></a>
    </li>

    @can('manage_admin') 
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('spp.index') }}">
            <i class="fa-solid fa-note-sticky"></i>
            <span>Spp</span></a>
    </li>
    @endcan

    @can('manage_admin')    
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('kelas.index') }}">
            <i class="fa-solid fa-school-circle-check"></i>
            <span>Kelas</span></a>
    </li>
    @endcan

    @can('manage_admin')   
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('petugas.index') }}">
            <i class="fa-solid fa-user-plus"></i>
            <span>Petugas</span></a>
    </li>
    @endcan
    {{-- <li class="nav-item active">
        <a class="nav-link" href="{{ route('siswa.index') }}">
            <i class="fa-solid fa-graduation-cap"></i>
            <span>Siswa</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('pembayaran.index') }}">
            <i class="fa-solid fa-money-check-dollar"></i>
            <span>Pembayaran</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="sesi">
            <i class="fa-solid fa-money-check-dollar"></i>
            <span>Login</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="sesi/register">
            <i class="fa-solid fa-money-check-dollar"></i>
            <span>Register</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="sesi/logout">
            <i class="fa-solid fa-right-from-bracket"></i>
            <span>Logout</span></a>
    </li>f --}}

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>