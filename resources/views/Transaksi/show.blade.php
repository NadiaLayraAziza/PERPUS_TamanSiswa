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
                          <h5 style="color: white">Detail Peminjaman <b>{{$data->kode_transaksi}}</b></h5>
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
                                    <img width="200" height="200" @if($data->buku->cover) src="{{ asset('images/buku/'.$data->buku->cover) }}" @endif />
                                </td>
                                <th style="padding-top: 25px">Kode Transaksi</th>
                                <td style="padding-top: 25px">:</td>
                                <td style="padding-top: 25px ;padding-right:250px">{{$data->kode_transaksi}}</td>
                              </tr>
                              <tr>
                                <th>Tanggal Pinjam</th>
                                <td>:</td>
                                <td>{{ date('Y-m-d', strtotime($data->tgl_pinjam)) }}</td>
                              </tr>
                              <tr>
                                  <th>Tanggal Kembali</th>
                                  <td>:</td>
                                  <td>{{ date('Y-m-d', strtotime($data->tgl_kembali)) }}</td>
                                </tr>
                              <tr>
                                <th>Buku</th>
                                <td>:</td>
                                <td>{{$data->buku->judul}}</td>
                              </tr>
                              <tr>
                                <th>Anggota</th>
                                <td>:</td>
                                <td>{{$data->anggota->nama}}</td>
                              </tr>
                              <tr>
                                <th>Status</th>
                                  <td>:</td>
                                    @if($data->status == 'pinjam')
                                        <td><label class="badge badge-warning">Pinjam</label></td>
                                    @else
                                        <td><label class="badge badge-success">Kembali</label></td>
                                    @endif
                              </tr>
                              <tr>
                                <th>Keterangan</th>
                                <td>:</td>
                                <td>{{ $data->ket }}</td>
                              </tr>
                            </table>
                            <a href="{{route('transaksi.index')}}" class="btn btn-light pull-right">Back</a>
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
