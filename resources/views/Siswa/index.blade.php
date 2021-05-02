@extends('Siswa.SiswaMaster')
@section('menu_profil', 'active')
@section('Content')
<div class="main-body">
  <div class="page-wrapper">
      <!-- Page-body start -->
      <div class="page-body">
          <div class="row">
              <div class="col-xl-12 col-md-12">
                  <div class="card table-card">
                      <div class="card-header" style="background-color: #336e7b;">
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
                          <div class="table-responsive">
                            <table style="width:100%">
                              <tr>
                                <td rowspan="9" align="center" style="padding: right 0;">
                                  <img src="{{ asset('assets/images/foto.jpg')}}" style="width: 175px;"></td>
                                <th style="padding-top: 25px">NIS</th>
                                <td style="padding-top: 25px">:</td>
                                <td style="padding-top: 25px ;padding-right:250px">{{$siswa->nis}}</td>
                              </tr>
                              <tr>
                                <th>Nama</th>
                                <td>:</td>
                                <td>{{$siswa->nama}}</td>
                              </tr>
                              <tr>
                                  <th>Tempat Lahir</th>
                                  <td>:</td>
                                  <td>{{$siswa->tempat_lahir}}</td>
                                </tr>
                              <tr>
                                <th>Tanggal Lahir</th>
                                <td>:</td>
                                <td>{{$siswa->tanggal_lahir}}</td>
                              </tr>
                              <tr>
                                <th>Jenis Kelamin</th>
                                <td>:</td>
                                <td>{{$siswa->jk}}</td>
                              </tr>
                              <tr>
                                  <th>Jurusan</th>
                                  <td>:</td>
                                  <td>{{$siswa->jurusan}}</td>
                              </tr>
                              <tr>
                                <th><a class="btn btn-primary" style="margin-top: 25px" href="{{ route('siswa.edit',$siswa->nis) }}">Edit Profil</a></th>
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
  <div id="styleSelector"> </div>
</div>
<script>
  function goBack() {
    window.history.back();
  }
  </script>
@endsection
