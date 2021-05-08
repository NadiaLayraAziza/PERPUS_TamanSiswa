@extends('Layouts.app')
@section('content')

<form method="post" action="{{ route('anggota.store') }}" id="myForm">
    @csrf
    <div class="form-group">
        <label>Nis</label>
        <input class="form-control" name="nis" />

    </div>

    <div class="form-group">
        <label>Nama</label>
        <input class="form-control" name="nama" />

    </div>

    <div class="form-group">
        <label>Tempat Lahir</label>
        <input class="form-control" name="tempat_lahir" />

    </div>

    <div class="form-group">
        <label>Tanggal Lahir</label>
        <input class="form-control" type="date" name="tanggal_lahir" />

    </div>

    <div class="form-group">
        <label>Jenis Kelamin</label><br>
        <label class="checkbox-inline">
            <input type="checkbox" value="Laki-laki" name="jk" /> Laki-laki
        </label>
        <label class="checkbox-inline">
            <input type="checkbox" value="Perempuan" name="jk" /> Perempuan
        </label>
    </div>

    <div class="form-group">
        <label>Jurusan</label>
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
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
