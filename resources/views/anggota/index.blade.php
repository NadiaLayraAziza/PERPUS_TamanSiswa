@section('js')
<script type="text/javascript">
  $(document).ready(function() {
    $('#table').DataTable({
      "iDisplayLength": 50
    });

} );
</script>
@stop
@extends('layouts.app')

@section('content')

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
                                    <div class="col-6 cst-cont">
                                        @if (Session::has('message'))
                                        <div class="alert alert-{{ Session::get('message_type') }}" id="waktu2" style="margin-top:10px;">{{ Session::get('message') }}</div>
                                        @endif
                                    </div>
                                    {{--  <div class="col-9 cst-cont">
                                        <form action="{{ route('anggota.index') }}" method="GET">
                                            <div class="input-group custom-search-form">
                                                <input type="text" class="form-control" name="search" placeholder="Search...">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i> Cari</button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>  --}}
                                </div>
                            </div>

                            <div class="card-block">
                                <table class="table table-hover m-b-0 without-header">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>NISN</th>
                                            <th>Jurusan</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Jurusan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($datas as $data)

                                        <tr>
                                            <td class="py-1">
                                                @if($data->user->gambar)
                                                  <img src="{{url('images/user', $data->user->gambar)}}" alt="image" style="margin-right: 10px;" />
                                                @else
                                                  <img src="{{url('images/user/default.png')}}" alt="image" style="margin-right: 10px;" />
                                                @endif

                                                {{$data->nama}}
                                            </td>
                                            <td>
                                                <a href="{{route('anggota.show', $data->id)}}">{{$data->npm}}</a>
                                            </td>
                                            <td>
                                                @if($data->prodi == 'TI')
                                                  Teknik Informatika
                                                @elseif($data->prodi == 'SI')
                                                  Sistem Informasi
                                                @else
                                                  Kesehatan Masyarakat
                                                @endif
                                            </td>
                                            <td>{{$data->jk === "L" ? "Laki - Laki" : "Perempuan"}}</td>
                                            <td>{{ $data->jurusan }}</td>
                                            <td>
                                                <form action="{{ route('anggota.destroy', $data->id) }}" method="POST">
                                                    <a class="btn btn-info" href="{{ route('anggota.show', $data->id) }}">Show</a>
                                                    <a class="btn btn-primary" href="{{route('anggota.edit', $data->id)}}">Edit</a>
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
                                {{--  {{ $posts->links() }}  --}}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
