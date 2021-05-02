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
        <div class="pcoded-navigation-label">Halaman Siswa</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="@yield('menu_profil')">
                <a href="{{route('siswa.index',$siswa->nis)}}" class="waves-effect waves-dark">
                    {{--  route('siswa.index',$siswa->nis)  --}}
                    <span class="pcoded-micon"><i class="ti-user"></i><b>M</b></span>
                    <span class="pcoded-mtext">Profil</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="@yield('menu_katalog')">
                <a href="{{route('siswa.katalog',$siswa->nis)}}" class="waves-effect waves-dark">
                    {{--  route('siswa.katalog',$siswa->nis)  --}}
                    <span class="pcoded-micon"><i class="ti-book"></i><b>C</b></span>
                    <span class="pcoded-mtext">Katalog</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="@yield('menu_riwayat')">
                <a href="{{route('siswa.show',$siswa->nis)}}" class="waves-effect waves-dark">
                    {{--  route('siswa.show',$siswa->nis)  --}}
                    <span class="pcoded-micon"><i class="ti-receipt"></i><b>M</b></span>
                    <span class="pcoded-mtext">Riwayat Peminjaman</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>

</nav>
