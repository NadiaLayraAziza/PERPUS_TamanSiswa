<div class="left-side-bar">
    <div class="brand-logo" style="padding-left: 40px; padding-top: 7px" >
        {{--  <a href="index.html">  --}}
            <img  class="img-80 img-radius" src="{{ asset('vendors/images/logo-smk.png')}}" style="width: 150px;">
            {{--  class="img-80 img-radius"  --}}
            {{--  style="width: 150px;"  --}}
            {{--  <img src="{{ asset('vendors/images/deskapp-logo.svg')}}" alt="" class="dark-logo">
            <img src="{{ asset('vendors/images/deskapp-logo-white.svg')}}" alt="" class="light-logo">  --}}
        {{--  </a>  --}}
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li>
                    <div class="dropdown-divider"></div>
                </li>
                <li>
                    <a href="{{url('/')}}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
                    </a>
                </li>
                @if(Auth::user()->level != 'user')
                <li>
                    <div class="dropdown-divider"></div>
                </li>
                <li>
                    <a href="{{url('user')}}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-user-1"></span><span class="mtext">Data User</span>
                    </a>
                </li>
                <li>
                    <div class="dropdown-divider"></div>
                </li>
                <li>
                    <a href="{{url('/buku')}}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-book-1"></span><span class="mtext">Data Buku</span>
                    </a>
                </li>
                @endif
                @if(Auth::user()->level == 'user')
                <li>
                    <div class="dropdown-divider"></div>
                </li>
                <li>
                    <a href="{{url('/katalog')}}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-book-1"></span><span class="mtext">Katalog</span>
                    </a>
                </li>
                @endif
                {{--  <li>
                    <div class="dropdown-divider"></div>
                </li>
                <li>
                    <a href="{{url('/buku')}}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-book-1"></span><span class="mtext">Katalog Buku</span>
                    </a>
                </li>  --}}
                <li>
                    <div class="dropdown-divider"></div>
                </li>
                @if(Auth::user()->level != 'user')
                <li>
                    <a href="{{url('/anggota')}}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-user-2"></span><span class="mtext">Data Anggota</span>
                    </a>
                </li>
                <li>
                    <div class="dropdown-divider"></div>
                </li>
                @endif
                <li>
                    <a href="{{url('/transaksi')}}" class="dropdown-toggle no-arrow">
                        @if(Auth::user()->level == 'user')
                        <span class="micon dw dw-edit"></span><span class="mtext">Riwayat Peminjaman</span>
                        @else
                        <span class="micon dw dw-edit"></span><span class="mtext">Data Peminjaman</span>
                        @endif
                    </a>
                </li>
                <li>
                    <div class="dropdown-divider"></div>
                </li>
                {{-- @if(Auth::user()->level != 'user')
                <li>
                    <a href="{{url('/laporan')}}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-server"></span><span class="mtext">Laporan</span>
                    </a>
                </li>
                <li>
                    <div class="dropdown-divider"></div>
                </li>
                @endif --}}
                {{--  <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-edit2"></span><span class="mtext">Siswa</span>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="#" class="dropdown-toggle no-arrow">
                                <span class="micon dw dw-user-13" style="padding-left: 220px"></span>
                                <span class="mtext">Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle no-arrow">
                                <span class="micon dw dw-book-1" style="padding-left: 220px"></span>
                                <span class="mtext">Katalog</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle no-arrow">
                                <span class="micon dw dw-user-2" style="padding-left: 220px"></span>
                                <span class="mtext">Riwayat</span>
                            </a>
                        </li>
                    </ul>
                </li>  --}}
            </ul>
        </div>
    </div>
</div>
