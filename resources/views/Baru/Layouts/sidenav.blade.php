<div class="left-side-bar">
    <div class="brand-logo">
        <a href="index.html">
            <img src="{{ asset('vendors/images/deskapp-logo.svg')}}" alt="" class="dark-logo">
            <img src="{{ asset('vendors/images/deskapp-logo-white.svg')}}" alt="" class="light-logo">
        </a>
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
                <li>
                    <div class="dropdown-divider"></div>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-edit2"></span><span class="mtext">Data Master</span>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="#" class="dropdown-toggle no-arrow">
                                <span class="micon dw dw-user-13" style="padding-left: 220px"></span>
                                <span class="mtext">Data Admin</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/buku')}}" class="dropdown-toggle no-arrow">
                                <span class="micon dw dw-book-1" style="padding-left: 220px"></span>
                                <span class="mtext">Data Buku</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/anggota')}}" class="dropdown-toggle no-arrow">
                                <span class="micon dw dw-user-2" style="padding-left: 220px"></span>
                                <span class="mtext">Data Anggota</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle no-arrow">
                                <span class="micon dw dw-book-2" style="padding-left: 220px"></span>
                                <span class="mtext">Data Transaksi</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <div class="dropdown-divider"></div>
                </li>
                <li class="dropdown">
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
                </li>
            </ul>
        </div>
    </div>
</div>