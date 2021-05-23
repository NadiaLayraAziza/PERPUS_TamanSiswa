@section('js')
<script type="text/javascript">
  $(document).ready(function() {
    $('#table').DataTable({
      "iDisplayLength": 50
    });

} );
</script>
@stop
@extends('Baru.Admin.Admin-main')
@section('Content')
<div class="main-container">
    <div class="pd-ltr-20">
        <div class="row">
            <div class="col-xl-3 mb-30">
                <div class="card-box height-100-p widget-style1">
                    <div class="d-flex flex-wrap align-items-center">
                        <div class="progress-data" style="padding-left: 10px">
                            <i class="fa fa-edit fa-4x"></i>
                        </div>
                        <div class="widget-data">
                            <div class="weight-600 font-18">Transaksi</div>
                            <div class="h3 mb-0">{{$transaksi->count()}}</div>
                        </div>
                        <p class="text-muted mt-3 mb-0">
                            <i class="fa fa-edit" aria-hidden="true"></i> Total seluruh transaksi
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 mb-30">
                <div class="card-box height-100-p widget-style1">
                    <div class="d-flex flex-wrap align-items-center">
                        <div class="progress-data" style="padding-left: 10px">
                            <i class="icon-copy dw dw-id-card2 fa-4x"></i>
                        </div>
                        <div class="widget-data">
                            <div class="weight-600 font-18">Admin</div>
                            <div class="h3 mb-0">{{$user->where('level', 'admin')->count()}}</div>
                        </div>
                        <p class="text-muted mt-3 mb-0">
                            <i class="icon-copy dw dw-id-card2" aria-hidden="true"></i> Total Seluruh Admin
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 mb-30">
                <div class="card-box height-100-p widget-style1">
                    <div class="d-flex flex-wrap align-items-center">
                        <div class="progress-data" style="padding-left: 10px">
                            <i class="fa fa-book fa-4x"></i>
                        </div>
                        <div class="widget-data">
                            <div class="weight-600 font-18">Buku</div>
                            <div class="h3 mb-0">{{$buku->count()}}</div>
                        </div>
                        <p class="text-muted mt-3 mb-0">
                            <i class="fa fa-book" aria-hidden="true"></i> Total Judul Buku
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 mb-30">
                <div class="card-box height-100-p widget-style1">
                    <div class="d-flex flex-wrap align-items-center">
                        <div class="progress-data" style="padding-left: 10px">
                            <i class="fa fa-users fa-3x"></i>
                        </div>
                        <div class="widget-data">
                            <div class="weight-600 font-18">Anggota</div>
                            <div class="h3 mb-0">{{$anggota->count()}}</div>
                        </div>
                        <p class="text-muted mt-3 mb-0">
                            <i class="fa fa-users" aria-hidden="true"></i> Total Seluruh Anggota
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

        </div>
        <div class="card-box mb-30">
            <h2 class="h4 pd-20">Data Transaksi Sedang Pinjam</h2>
            <table class="data-table table nowrap">
                <thead>
                    <tr>
                        <th> Kode </th>
                        <th> Buku </th>
                        <th> Peminjam </th>
                        <th> Tgl Pinjam </th>
                        <th> Tgl Kembali </th>
                        <th> Status </th>
                        @if (Auth::user()->level != 'user')
                        <th> Action </th>
                        {{--  <th class="datatable-nosort">Action</th>  --}}
                        @endif
                    </tr>
                </thead>
                <tbody>
                @foreach($datas as $data)
                    <tr>
                        <td class="table-plus">
                            <a href="{{route('transaksi.show', $data->id)}}">
                                {{$data->kode_transaksi}}
                            </a>
                        </td>
                        <td> {{$data->buku->judul}} </td>
                        <td> {{$data->anggota->nama}} </td>
                        <td> {{date('d/m/y', strtotime($data->tgl_pinjam))}} </td>
                        <td> {{date('d/m/y', strtotime($data->tgl_kembali))}} </td>
                        <td>
                            @if($data->status == 'pinjam')
                                <label class="badge badge-warning">Pinjam</label>
                            @else
                                <label class="badge badge-success">Kembali</label>
                            @endif
                        </td>
                        @if (Auth::user()->level != 'user')
                        <td>
                            <form action="{{ route('transaksi.update', $data->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <button class="btn btn-info btn-sm" onclick="return confirm('Anda yakin data ini sudah kembali?')">Kembalikan Buku
                                </button>
                            </form>
                        </td>
                        {{--  <td>
                            <div class="dropdown">
                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                    <i class="dw dw-more"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                    <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                    <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                    <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                                </div>
                            </div>
                        </td>  --}}
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">

        </div>
    </div>
</div>
@endsection
