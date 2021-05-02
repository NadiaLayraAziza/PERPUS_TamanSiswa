@extends('Admin.master')
@section('menu_anggota', 'active')
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
                                    <h5>Tambah Data Anggota</h5>
                                </div>
                                <div class="card-block">
                                    <form method="post" action="{{ route('anggota.store') }}" id="myForm">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Nis</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="nis">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Nama Siswa</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="nama">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="tempat_lahir">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" name="tanggal_lahir">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Foto Profil</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control" name="image">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                            <div class="col-sm-10">
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" value="Laki-laki" name="jk" /> Laki-laki
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" value="Perempuan" name="jk" /> Perempuan
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label" >Jurusan</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="jurusan">
                                                    <option value="Teknik Elektro">Teknik Elektro</option>
                                                    <option value="Teknik Mesin">Teknik Mesin</option>
                                                    <option value="Teknologi Informasi">Teknologi Informasi</option>
                                                    <option value="Teknik Sipil">Teknik Sipil</option>
                                                    <option value="Teknik Kimia">Teknik Kimia</option>
                                                    <option value="Akuntansi">Akuntansi</option>
                                                    <option value="Administrasi Niaga">Administrasi Niaga</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <button onclick="goBack()" class="btn btn-primary" style="margin-left: 15px; margin-right:50px">Kembali</button>
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-success">Submit</button>
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
