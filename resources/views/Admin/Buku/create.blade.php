@extends('Admin.master')
@section('menu_buku', 'active')
@section('Content')

    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page body start -->
                <div class="page-body">

                    <div class="row">
                        <div class="col-sm-12">
                            <!-- Basic Form Inputs card start -->
                            <div class="card">
                                <div class="card-header">
                                    <h5>Tambah Data Buku</h5>
                                </div>
                                <div class="card-block">
                                    <form method="post" action="{{ route('buku.store') }}" id="myForm">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Judul</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="judul">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Pengarang</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="pengarang">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Penerbit</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="penerbit">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Cover Buku</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control" name="image">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tahun Terbit</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="tahun">
                                                    <?php
                                                        $tahun = date("Y");
                                                        for ($i=$tahun - 29; $i <= $tahun; $i++) {
                                                            echo '
                                                                <option value="'.$i.'">'.$i.'</option>
                                                            ';
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">ISBN</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="isbn">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label" >Jumlah Buku</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="jumlah">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label" >Lokasi</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="lokasi">
                                                    <option value="rak1">Rak 1</option>
                                                    <option value="rak2">Rak 2</option>
                                                    <option value="rak3">Rak 3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label" >Tanggal Input</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" name="jumlah">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <button onclick="goBack()" class="btn btn-primary" style="margin-left: 15px; margin-right:50px">Kembali</button>
                                            <div class="col-sm-10">
                                                <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
                                            </div>
                                        </div>
                                    </form>


                                </div>
                            </div>
                            <!-- Basic Form Inputs card end -->
                        </div>
                    </div>
                </div>
                <!-- Page body end -->
            </div>
        </div>
        <!-- Main-body end -->
        <div id="styleSelector">

        </div>
    </div>
    <script>
        function goBack() {
          window.history.back();
        }
    </script>
@endsection
