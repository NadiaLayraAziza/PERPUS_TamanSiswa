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
                                <h5 style="color: white">Data Buku</h5>
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
                                        <a href="{{ route('buku.create') }}" class="btn btn-success" style="margin-bottom: 5px">Tambah Data</a>
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

                            {{--  @if ($message = Session::get('success'))
                                <div class="card bg-c-green total-card">
                                    <div class="text-left">
                                        <h4>{{ $message }}</h4>
                                    </div>
                                </div>
                            @endif  --}}

                            <div class="card-block">
                                <table class="table table-hover m-b-0 without-header">
                                    <thead>
                                        <tr>
                                            <th>Judul</th>
                                            <th>ISBN</th>
                                            <th>Pengarang</th>
                                            <th>Penerbit</th>
                                            <th>Tahun Terbit</th>
                                            <th>Stok</th>
                                            <th>Rak</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($datas as $data)
                                        <tr>
                                            <td class="py-1">
                                                @if($data->cover)
                                                  <img src="{{url('images/buku/'. $data->cover)}}" alt="image" style="margin-right: 10px;" />
                                                @else
                                                  <img src="{{url('images/buku/default.png')}}" alt="image" style="margin-right: 10px;" />
                                                @endif
                                                <a href="{{route('buku.show', $data->id)}}">
                                                  {{$data->judul}}
                                                </a>
                                            </td>
                                            <td>{{ $data->isbn }}</td>
                                            <td>{{ $data->pengarang }}</td>
                                            <td>{{ $data->penerbit }}</td>
                                            <td>{{ $data->tahun_terbit }}</td>
                                            <td>{{ $data->jumlah_buku }}</td>
                                            <td>{{ $data->lokasi }}</td>
                                            <td>
                                                <form action="{{ route('buku.destroy', $data->id) }}" method="POST">
                                                    <a class="btn btn-info" href="{{ route('buku.show', $data->id) }}">Show</a>
                                                    <a class="btn btn-primary" href="{{ route('buku.edit', $data->id) }}">Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button onclick="return confirm('Anda yakin ingin meghapus data ini ?')"
                                                    type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>

                                    </tbody>
                                    @endforeach
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
