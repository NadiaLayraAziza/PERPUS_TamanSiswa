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
                                <h5 style="color: white">Data Anggota</h5>
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
                                        <a href="{{ route('anggota.create') }}" class="btn btn-success" style="margin-bottom: 5px">Tambah Data</a>
                                    </div>
                                    <div class="col-9 cst-cont">
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
                                            <th>No </th>
                                            <th>Nis  </th>
                                            <th>Nama  </th>
                                            <th>Jenis Kelamin  </th>
                                            <th>Jurusan  </th>
                                            <th>Aksi  </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($posts as $index => $murid)

                                        <tr>
                                            <td>{{ $index + $posts->firstItem() }}</td>
                                            <td>{{ $murid->nis }}</td>
                                            <td>{{ $murid->nama }}</td>
                                            <td>{{ $murid->jk }}</td>
                                            <td>{{ $murid->jurusan }}</td>
                                            <td>
                                                <form action="{{ route('anggota.destroy',$murid->nis) }}" method="POST">
                                                    <a class="btn btn-info" href="{{ route('anggota.show',$murid->nis) }}">Show</a>
                                                    <a class="btn btn-primary" href="{{ route('anggota.edit',$murid->nis) }}">Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                    <button onclick="return confirm('Anda yakin ingin meghapus data ini ?')"
                                                    type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
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
