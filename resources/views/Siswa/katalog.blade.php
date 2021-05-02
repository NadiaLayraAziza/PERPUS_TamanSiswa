@extends('Siswa.SiswaMaster')
@section('menu_katalog', 'active')
@section('Content')
<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 style="color: white">Katalog Buku Perpustakaan</h5>
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
                                        <form action="{{ route('anggota.index') }}" method="GET">
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
                                            <th>Pengarang</th>
                                            <th>Penerbit</th>
                                            <th>Jumlah Buku</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($siswa as $buku)
                                        <tr>
                                            {{--  <td>{{ $index + $siswa->firstItem() }}</td>  --}}
                                            <td>{{ $buku->judul }}</td>
                                            <td>{{ $buku->pengarang }}</td>
                                            <td>{{ $buku->penerbit }}</td>
                                            <td>{{ $buku->jumlah_buku }}</td>
                                        </tr>

                                    </tbody>
                                    @endforeach
                                </table>
                                {{ $siswa->links() }}

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
