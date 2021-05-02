@extends('Siswa.SiswaMaster')
@section('menu_profil', 'active')
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
                                    <h5>Ubah Profil</h5>
                                </div>
                                <div class="card-block">

                                    <form method="POST" action="{{ route('anggota.update', $siswa->nis) }}" id="myForm" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Nis</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="nis" value="{{ $siswa->nis }}" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Nama Siswa</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="nama" value="{{ $siswa->nama }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="tempat_lahir" value="{{ $siswa->tempat_lahir }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" name="tanggal_lahir" value="{{ $siswa->tanggal_lahir }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                            <div class="col-sm-10">
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" value="Laki-laki" name="jk" <?php if ($siswa->jk =='Laki-laki') {echo "selected";}?> /> Laki-laki
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" value="Perempuan" name="jk" <?php if ($siswa->jk =='Perempuan') {echo "selected";}?> /> Perempuan
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label" >Jurusan</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="jurusan">
                                                    <option value="Teknik Elektro" <?php if ($siswa->jurusan =='Teknik Elektro') {
                                                        echo "selected";} ?>>Teknik Elektro</option>
                                                    <option value="Teknik Mesin" <?php if ($siswa->jurusan =='Teknik Mesin') {
                                                        echo "selected";} ?>>Teknik Mesin</option>
                                                    <option value="Teknologi Informasi" <?php if ($siswa->jurusan =='Teknologi Informasi') {
                                                        echo "selected";} ?>>Teknologi Informasi</option>
                                                    <option value="Teknik Sipil" <?php if ($siswa->jurusan =='Teknik Sipil') {
                                                        echo "selected";} ?>>Teknik Sipil</option>
                                                    <option value="Teknik Kimia" <?php if ($siswa->jurusan =='Teknik Kimia') {
                                                        echo "selected";} ?>>Teknik Kimia</option>
                                                    <option value="Akuntansi" <?php if ($siswa->jurusan =='Akuntansi') {
                                                        echo "selected";} ?>>Akuntansi</option>
                                                    <option value="Administrasi Niaga" <?php if ($siswa->jurusan =='Administrasi Niaga') {
                                                        echo "selected";} ?>>Administrasi Niaga</option>
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