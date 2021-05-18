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
                                    <div class="col-6 cst-cont">
                                        @if (Session::has('message'))
                                        <div class="alert alert-{{ Session::get('message_type') }}" id="waktu2" style="margin-top:10px;">{{ Session::get('message') }}</div>
                                        @endif
                                    </div>
                                    {{--  <div class="col-9 cst-cont">
                                        <form action="{{ route('transaksi.index') }}" method="GET">
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
                                            <th>Kode</th>
                                            <th>Buku</th>
                                            <th>Nama Peminjam</th>
                                            <th>Tgl Pinjam</th>
                                            <th>Tgl Kembali</th>
                                            {{--  <th>Durasi</th>
                                            <th>Denda</th>  --}}
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($datas as $data)
                                        <tr>
                                            <td class="py-1">
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
                                            {{--  <td>
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
                                            </td>  --}}
                                            <td>
                                                @if(Auth::user()->level == 'admin')
                                                    @if($data->status == 'pinjam')
                                                    <form action="{{ route('transaksi.update', $data->id) }}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        <button class="btn btn-primary" onclick="return confirm('Anda yakin data ini sudah kembali?')">
                                                            Sudah Kembali
                                                        </button>
                                                    </form>
                                                    @endif
                                                    <form action="{{ route('transaksi.destroy', $data->id) }}" class="pull-left"  method="post">
                                                        <a class="btn btn-info" href="{{ route('transaksi.show', $data->id) }}">Show</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button cclass="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')">
                                                            Delete
                                                        </button>
                                                    </form>
                                                @else
                                                    @if($data->status == 'pinjam')
                                                    <form action="{{ route('transaksi.update', $data->id) }}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                    <button class="btn btn-primary" onclick="return confirm('Anda yakin data ini sudah kembali?')">
                                                        Sudah Kembali
                                                    </button>
                                                    </form>
                                                    @else
                                                    -
                                                    @endif
                                                @endif
                                            </td>
                                            {{--  <td>{{ $transaksi->status }}</td>
                                            <td>
                                                <a href="" class="btn btn-info">Kembali</a>
                                                <a href="" class="btn btn-danger">Perpanjang</a>
                                            </td>  --}}
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
