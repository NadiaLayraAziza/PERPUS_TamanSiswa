@section('js')

<script type="text/javascript">

$(document).ready(function() {
    $(".users").select2();
});

</script>
@stop

@extends('Baru.Admin.Admin-main')
@section('Content')

<div class="main-body">
  <div class="page-wrapper">
      <!-- Page-body start -->
      <div class="page-body">
          <div class="row">
              <div class="col-xl-12 col-md-12">
                  <div class="card table-card">
                      <div class="card-header" style="background-color: #336e7b;">
                          <h5 style="color: white">Detail Data <b>{{$data->nama}}</b></h5>
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
                          <div class="table-responsive">
                            <table style="width:100%">
                              <tr>
                                <td rowspan="9" align="center" style="padding: right 0;">
                                    <img class="product" width="200" height="200"
                                    @if($data->user->gambar) src="{{ asset('images/user/'.$data->user->gambar) }}" @endif />
                                </td>
                                <th style="padding-top: 25px">NISN</th>
                                <td style="padding-top: 25px">:</td>
                                <td style="padding-top: 25px ;padding-right:250px">{{$data->nisn}}</td>
                              </tr>
                              <tr>
                                <th>Nama</th>
                                <td>:</td>
                                <td>{{$data->nama}}</td>
                              </tr>
                              <tr>
                                  <th>Tempat Lahir</th>
                                  <td>:</td>
                                  <td>{{$data->tempat_lahir}}</td>
                                </tr>
                              <tr>
                                <th>Tanggal Lahir</th>
                                <td>:</td>
                                <td>{{$data->tgl_lahir}}</td>
                              </tr>
                              <tr>
                                <th>Jenis Kelamin</th>
                                <td>:</td>
                                <td>{{$data->jk}}</td>
                              </tr>
                              <tr>
                                  <th>Jurusan</th>
                                  <td>:</td>
                                  <td>{{$data->jurusan}}</td>
                              </tr>
                              <tr>
                                <th>User Login</th>
                                <td>:</td>
                                <td>{{$data->user->username}}</td>
                            </tr>
                              <tr>
                                {{--  <button onclick="goBack()" class="btn btn-primary" style="margin-top: 25px">Kembali</button>  --}}
                                <th><a href="{{route('anggota.index')}}" class="btn btn-primary pull-right">Kembali</a></th>
                            </tr>
                            </table>
                          </div>
                      </div>
                  </div>
              </div>

          </div>
      </div>
      <!-- Page-body end -->
  </div>

</div>
@endsection
