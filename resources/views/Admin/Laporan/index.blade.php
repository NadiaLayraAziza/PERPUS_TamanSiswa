@extends('Admin.master')
@section('menu_laporan', 'active')
@section('Content')
<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 style="color: white">Laporan</h5>
                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                        <li><i class="fa fa-window-maximize full-card"></i></li>
                                        <li><i class="fa fa-minus minimize-card"></i></li>
                                        <li><i class="fa fa-refresh reload-card"></i></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="card-block" style="text-align: center">
                                <div class="row">
                                    <div class="col-4 cst-cont">
                                        <a href="{{ route('laporan.anggota') }}" class="btn btn-primary" style="margin-bottom: 5px">Cetak Data Anggota</a>
                                    </div>
                                    <div class="col-4 cst-cont">
                                        <a href="{{ route('laporan.buku') }}" class="btn btn-danger" style="margin-bottom: 5px">Cetak Data Buku</a>
                                    </div>
                                    <div class="col-4 cst-cont">
                                        <a href="{{ route('laporan.transaksi') }}" class="btn btn-success" style="margin-bottom: 5px">Cetak Data Peminjaman</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
