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
        @if(Auth::user()->level == 'admin')
        <ul class="pcoded-item pcoded-left-item">
            <li class="">
                {{--  nav-item {{ (['/', 'home']) }}  --}}
                <a href="{{url('/')}}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-home"></i><b>C</b></span>
                    <span class="pcoded-mtext">Dashboard</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>
        <ul class="pcoded-item pcoded-left-item">
            <li class="">
                {{--  nav-item {{ (['anggota']) }}  --}}
                <a href="{{url('anggota')}}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-user"></i><b>C</b></span>
                    <span class="pcoded-mtext">Data Anggota</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>
        <ul class="pcoded-item pcoded-left-item">
            <li class="">
                {{--  nav-item {{ (['buku']) }}  --}}
                <a href="{{url('buku')}}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-book"></i><b>M</b></span>
                    <span class="pcoded-mtext">Data Buku</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>
        @endif
        <ul class="pcoded-item pcoded-left-item">
            <li class="">
                {{--  nav-item {{ (['transaksi']) }}  --}}
                <a href="{{url('transaksi')}}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-receipt"></i><b>M</b></span>
                    <span class="pcoded-mtext">Data Peminjaman</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>
        <ul class="pcoded-item pcoded-left-item">
            <li class="">
                {{--  nav-item {{ (['anggota']) }}  --}}
                <a href="{{url('user')}}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-user"></i><b>C</b></span>
                    <span class="pcoded-mtext">Data User</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>
        <ul class="pcoded-item pcoded-left-item">
            <li class="pcoded-hasmenu ">
                <a href="#ui-laporan" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-receipt"></i><b>A</b></span>
                    <span class="pcoded-mtext">Laporan</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a  href="{{url('laporan/trs')}}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Laporan Transaksi</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{url('laporan/buku')}}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Laporan Buku</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    {{--  <li class="">
                        <a href="sample-page.html" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-layout-sidebar-left"></i><b>S</b></span>
                            <span class="pcoded-mtext">Sample Page</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>  --}}
                </ul>
            </li>
        </ul>
</nav>
