@extends('Admin.master')
@section('menu_buku', 'active')
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
                                <td rowspan="10" align="center" style="padding: right 0;">
                                  <img src="{{ asset('assets/images/logo-smk.png')}}" style="width: 175px;"></td>

                              </tr>
                              <tr>
                                <th style="padding-top: 25px">Judul</th>
                                <td style="padding-top: 25px">:</td>
                                <td style="padding-top: 25px ;padding-right:250px">{{$buku->judul}}</td>
                              </tr>
                              <tr>
                                  <th>Pengarang</th>
                                  <td>:</td>
                                  <td>{{$buku->pengarang}}</td>
                                </tr>
                              <tr>
                                <th>Penerbit</th>
                                <td>:</td>
                                <td>{{$buku->penerbit}}</td>
                              </tr>
                              <tr>
                                <th>Tahun Terbit</th>
                                <td>:</td>
                                <td>{{$buku->tahun_terbit}}</td>
                              </tr>
                              <tr>
                                  <th>ISBN</th>
                                  <td>:</td>
                                  <td>{{$buku->isbn}}</td>
                              </tr>
                              <tr>
                                <th>Jumlah Buku</th>
                                <td>:</td>
                                <td>{{$buku->jumlah_buku}}</td>
                            </tr>
                              <tr>
                                <th>Lokasi</th>
                                <td>:</td>
                                <td>{{$buku->lokasi}}</td>
                            </tr>
                            <tr>
                              <th>Tanggal Input</th>
                              <td>:</td>
                              <td>{{$buku->tgl_input}}</td>
                            </tr>
                              <tr>
                                <th><button onclick="goBack()" class="btn btn-primary" style="margin-top: 25px">Kembali</button></th>
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
