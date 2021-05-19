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
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header" style="margin-top: 0px">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Data Peminjaman</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Data Master</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Peminjaman</li>
                            </ol>
                        </nav>
                    </div>
                    @if(Auth::user()->level != 'user')
                    <div class="col-md-6 col-sm-12 text-right">
                        <a href="{{ route('transaksi.create') }}" type="button" class="btn" data-bgcolor="#3b5998" data-color="#ffffff">
                            <i class="icon-copy fa fa-user-plus" aria-hidden="true"></i>
                            Tambah Data
                        </a>
                    </div>
                    @endif
                </div>
            </div>

            <div class="search-icon-box card-box mb-30">
                <input type="text"
                    class="border-radius-5"
                    id="myInput"
                    placeholder="Search"
                    title="Type in a name"
                    style="background-color:cadetblue">
                <i class="search_icon dw dw-search"></i>
            </div>

            <div class="card-box pd-20 height-100-p mb-30">
				<table class="data-table table nowrap">
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
                            @if(Auth::user()->level != 'user')
                            <th>Action</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @foreach ($datas as $data)

                        <tr>
                            {{-- <td>
                                @if($data->user->gambar)
                                  <img width="30" height="30" class="img-radius" src="{{url('images/user', $data->user->gambar)}}" alt="image"  />
                                @else
                                  <img width="30" height="30" class="img-radius" src="{{url('images/user/default.png')}}" alt="image"  />
                                @endif
                                {{$data->nama}}
                            </td> --}}
                            <td>
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
                            @if(Auth::user()->level != 'user')
                            <td>
                                <form action="" method="POST">
                                    <button type="button" class="btn" data-bgcolor="#28a745" data-color="#ffffff">
                                        <i class="icon-copy fa fa-info-circle" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btn" data-bgcolor="#ffc107" data-color="#ffffff">
                                        <i class="icon-copy fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </button>
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Anda yakin ingin meghapus data ini ?')" type="button" class="btn btn-danger" >
                                    <i class="icon-copy fa fa-trash" aria-hidden="true"></i>
                                {{-- </button>
                                    <button onclick="return confirm('Anda yakin ingin meghapus data ini ?')"
                                    type="submit" class="btn btn-danger">Delete</button>
                                </form> --}}
                            </td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
			</div>

        </div>

        {{-- Footer --}}
        @include('Baru.Layouts.footer')
        {{-- End Footer --}}

    </div>
</div>

<script>
    $(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
</script>

@endsection
