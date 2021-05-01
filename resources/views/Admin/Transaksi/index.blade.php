@extends('Admin.master')
@section('menu_anggota', 'active')
@section('Content')
<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 style="color: white">Data Peminjaman</h5>
                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                        <li><i class="fa fa-window-maximize full-card"></i></li>
                                        <li><i class="fa fa-minus minimize-card"></i></li>
                                        <li><i class="fa fa-refresh reload-card"></i></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="card-block">
                                <div class="row">
                                    <div class="col-3 cst-cont">
                                        <a href="{{ route('transaksi.create') }}" class="btn btn-success" style="margin-bottom: 5px">Tambah Data</a>
                                    </div>
                                    <div class="col-9 cst-cont">
                                        <form action="{{ route('transaksi.index') }}" method="GET">
                                            <div class="input-group custom-search-form">
                                                <input type="text" class="form-control" name="search" placeholder="Search...">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i> Cari</button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            @if ($message = Session::get('success'))
                                <div class="card bg-c-green total-card">
                                    <div class="text-left">
                                        <h4>{{ $message }}</h4>
                                    </div>
                                </div>
                            @endif

                            <div class="card-block">
                                <table class="table table-hover m-b-0 without-header">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Nama</th>
                                            <th>Tanggal Pinjam</th>
                                            <th>Tanggal Kembali</th>
                                            <th>Durasi</th>
                                            <th>Denda</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($posts as $index => $transaksi)
                                        <tr>
                                            <td>{{ $index + $posts->firstItem() }}</td>
                                            <td>{{ $transaksi->judul }}</td>
                                            <td>{{ $transaksi->nama }}</td>
                                            <td>{{ $transaksi->tgl_pinjam }}</td>
                                            <td>{{ $transaksi->tgl_kembali }}</td>
                                            <td>
                                                    <?php
                                                    $datetime2 = strtotime($transaksi->tgl_kembali) ;
                                                    $datenow = strtotime(date("Y-m-d"));
                                                    $durasi = ($datetime2 - $datenow) / 86400 ;
                                                ?>
                                                @if ($durasi < 0 )
                                                    Durasi Habis / {{ $durasi }} Hari
                                                @else
                                                    {{ $durasi }} Hari
                                                @endif
                                            </td>
                                            <td>
                                                @if ($durasi < 0)
                                                <?php $denda = abs($durasi) * 500 ; ?>
                                                {{ $denda }}
                                            @else
                                                0
                                            @endif
                                            </td>
                                            <td>{{ $transaksi->status }}</td>

                                            <td>
                                                <a href="" class="btn btn-info">Kembali</a>

                                                <a href="" class="btn btn-danger">Perpanjang</a>
                                            </td>
                                        </tr>

                                    </tbody>
                                    @endforeach
                                </table>
                                {{ $posts->links() }}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
