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
                            <h4>Data Seluruh Usur</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Data Master</a></li>
                                <li class="breadcrumb-item active" aria-current="page">User</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <a href="{{ route('user.create') }}" type="button" class="btn" data-bgcolor="#3b5998" data-color="#ffffff">
                            <i class="icon-copy fa fa-user-plus" aria-hidden="true"></i>
                            Tambah Data
                        </a>
                    </div>
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
                            <th> Name </th>
                            <th> Username </th>
                            <th> Email </th>
                            <th> Level </th>
                            <th class="datatable-nosort">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($datas as $data)
                        <tr>
                          <td class="py-1">
                          @if($data->gambar)
                            <img width="30" height="30" src="{{url('images/user', $data->gambar)}}" alt="image" />
                          @else
                            <img width="30" height="30" src="{{url('images/user/default.png')}}" alt="image" />
                          @endif
                            {{$data->name}}
                          </td>
                          <td>
                          <a href="{{route('user.show', $data->id)}}">
                          {{$data->username}}
                          </a>
                          </td>
                          <td>
                            {{$data->email}}
                          </td>
                          <td>
                            {{$data->level}}
                          </td>
                          <td>
                            <div class="dropdown">
                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                    <i class="dw dw-more"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                    <a class="dropdown-item" href="{{route('user.show', $data->id)}}"><i class="dw dw-eye"></i> View</a>
                                    <a class="dropdown-item" href="{{route('user.edit', $data->id)}}"><i class="dw dw-edit2"></i> Edit</a>
                                    <form action="{{ route('user.destroy', $data->id) }}" class="pull-left"  method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                    <a class="dropdown-item" onclick="return confirm('Anda yakin ingin menghapus data ini?')"><i class="dw dw-delete-3"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                          {{--  <td>
                            <div class="btn-group dropdown">
                            <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Action
                          </button>
                          <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 30px, 0px);">
                            <a class="dropdown-item" href="{{route('user.edit', $data->id)}}"> Edit </a>
                            <form action="{{ route('user.destroy', $data->id) }}" class="pull-left"  method="post">
                            {{ csrf_field() }}
                            {{ method_field('delete') }}
                            <button class="dropdown-item" onclick="return confirm('Anda yakin ingin menghapus data ini?')"> Delete
                            </button>
                          </form>

                            </div>
                            </div>
                          </td>  --}}
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
