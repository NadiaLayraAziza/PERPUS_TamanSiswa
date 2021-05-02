@extends('Siswa.SiswaMaster')
@section('menu_riwayat', 'active')
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
                                    <div class="col-12 cst-cont">
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
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{--  @foreach ($siswa as $transaksi)  --}}
                                        <tr>
                                            <td>{{ $siswa->id }}</td>
                                            <td>{{ $siswa->judul }}</td>
                                            <td>{{ $siswa->nama }}</td>
                                            <td>{{ $siswa->tgl_pinjam }}</td>
                                            <td>{{ $siswa->tgl_kembali }}</td>
                                            <td>
                                                    <?php
                                                    $datetime2 = strtotime($siswa->tgl_kembali) ;
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
                                            <td>{{ $siswa->status }}</td>
                                        </tr>

                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
