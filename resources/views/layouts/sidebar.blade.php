<link rel="stylesheet" href="assets/css/style.css">
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand" style="text-align: center; padding: 10px; margin-bottom: 20px; height: 70px;">
            <img src="{{ asset('assets/img/santara.jpg') }}" alt="Santara Logo" style="width: 100%; max-width: 120px;">
        </div>
        <ul class="sidebar-menu" style="margin-top: 50px;">
            <li class="menu-header" style="margin-bottom: 0px;"> Manajemen Sales </li>
            <li class="dropdown">
                <a href="{{ route('dashboard.index') }}" class="nav-link"><i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <li>
                <a href="{{ route('sales.index') }}" class="nav-link "><i class="fas fa-users"></i>
                    <span>Sales</span></a>
            </li>
            <li>
                <a href="{{ route('absensi.index') }}" class="nav-link "><i class="fas fa-clock"></i>
                    <span>Absensi</span></a>
            </li>
            <li>
                <a href="{{ route('ijin.index') }}" class="nav-link "><i class="fas fa-file"></i>
                    <span>Ijin</span></a>
            </li>
            <li>
                <a href="{{ route('pengajuanijin.index') }}" class="nav-link"><i class="fas fa-paper-plane"></i>
                    <span>Pengajuan Ijin</span></a>
            </li>
            <li>
                <a href="{{ route('pelatihan.index') }}" class="nav-link "><i class="fas fa-graduation-cap"></i>
                    <span>Pelatihan</span></a>
            </li>
            <li>
                <a href="{{ route('pendidikan.index') }}" class="nav-link"><i class="fas fa-book"></i>
                    <span>Pendidikan</span></a>
            </li>
            <li>
                <a href="{{ route('gaji.index') }}" class="nav-link "><i class="fas fa-money-bill-wave"></i>
                    <span>Gaji</span></a>
            </li>
            <li>
                <a href="{{ route('tunjangan.index') }}" class="nav-link"><i class="fas fa-coins"></i>
                    <span>Tunjangan</span></a>
            </li>
        </ul>
    </aside>
</div>
