<nav class="pcoded-navbar">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    <div class="pcoded-inner-navbar main-menu">
        <div class="">
            <div class="main-menu-header">
                <img class="img-80 img-radius" src="{{ asset('assets/images/logo-smk.png')}}" style="width: 150px;">
                {{-- <div class="user-details">
                    <span id="more-details">SMK Taman Siswa </i></span>
                    <p style="color: white">Mojoagung</p>
                </div> --}}
            </div>

        </div>
        <div class="p-15 p-b-0">
            <form class="form-material">

        <div class="pcoded-navigation-label">Halaman Admin</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="@yield('menu_home')">
                <a href="http://127.0.0.1:8000" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-home"></i><b>C</b></span>
                    <span class="pcoded-mtext">Dashboard</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="@yield('menu_anggota')">
                <a href="{{url('anggota')}}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-user"></i><b>C</b></span>
                    <span class="pcoded-mtext">Data Anggota</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="@yield('menu_buku')">
                <a href="{{url('buku')}}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-book"></i><b>M</b></span>
                    <span class="pcoded-mtext">Data Buku</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="@yield('menu_transaksi')">
                <a href="{{url('transaksi')}}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-receipt"></i><b>M</b></span>
                    <span class="pcoded-mtext">Data Peminjaman</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="@yield('menu_laporan')">
                <a href="{{url('laporan')}}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-layout"></i><b>M</b></span>
                    <span class="pcoded-mtext">Laporan</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>
</nav>
