@section('js')

<script type="text/javascript">

$(document).ready(function() {
    $(".users").select2();
});

</script>

<script type="text/javascript">
        function readURL() {
            var input = this;
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $(input).prev().attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $(function () {
            $(".uploads").change(readURL)
            $("#f").submit(function(){
                // do ajax submit or just classic form submit
              //  alert("fake subminting")
                return false
            })
        })
        </script>
@stop

@extends('layouts.app')

@section('content')

<div class="main-body">
  <div class="page-wrapper">
      <!-- Page-body start -->
      <div class="page-body">
          <div class="row">
              <div class="col-xl-12 col-md-12">
                  <div class="card table-card">
                      <div class="card-header" style="background-color: #336e7b;">
                          <h5 style="color: white">Detail Buku <b>{{$data->judul}}</h5>
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
                                <td rowspan="10" align="center" style="padding: right 0;">
                                    <img width="200" height="200" @if($data->cover) src="{{ asset('images/buku/'.$data->cover) }}" @endif />
                                </td>
                              </tr>
                              <tr>
                                <th style="padding-top: 25px">Judul</th>
                                <td style="padding-top: 25px">:</td>
                                <td style="padding-top: 25px ;padding-right:250px">{{$data->judul}}</td>
                              </tr>
                              <tr>
                                <th>ISBN</th>
                                <td>:</td>
                                <td>{{$data->isbn}}</td>
                              </tr>
                              <tr>
                                  <th>Pengarang</th>
                                  <td>:</td>
                                  <td>{{$data->pengarang}}</td>
                                </tr>
                              <tr>
                                <th>Penerbit</th>
                                <td>:</td>
                                <td>{{$data->penerbit}}</td>
                              </tr>
                              <tr>
                                <th>Tahun Terbit</th>
                                <td>:</td>
                                <td>{{$data->tahun_terbit}}</td>
                              </tr>
                              <tr>
                                <th>Jumlah Buku</th>
                                <td>:</td>
                                <td>{{$data->jumlah_buku}}</td>
                              </tr>
                              <tr>
                                <th>Deskripsi</th>
                                <td>:</td>
                                <td>{{$data->deskripsi}}</td>
                              </tr>
                              <tr>
                                <th>Lokasi</th>
                                <td>:</td>
                                <td>{{$data->lokasi}}</td>
                              </tr>
                              <tr>
                                <th><th><a href="{{route('buku.index')}}" class="btn btn-primary pull-right">Kembali</a></th></th>
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
