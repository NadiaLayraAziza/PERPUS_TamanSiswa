@section('js')

<script type="text/javascript">

$(document).ready(function() {
    $(".users").select2();
});

</script>
@stop

@extends('layouts.app')

@section('content')
    <div class="pcoded-inner-content">
        {{--  Main-body start   --}}
        <div class="main-body">
            <div class="page-wrapper">
                {{--  Page body start  --}}
                <div class="page-body">

                    <div class="row">
                        <div class="col-sm-12">
                            {{--  Basic Form Inputs card start  --}}
                            <div class="card">
                                <div class="card-header">
                                    <h5>Tambah Data Anggota</h5>
                                </div>
                                <div class="card-block">

                                    <form method="POST" action="{{ route('anggota.store') }}" enctype="multipart/form-data" id="myForm">
                                        @csrf
                                        <div class="form-group row{{ $errors->has('nama') ? ' has-error' : '' }}">
                                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                            <div class="col-sm-10">
                                                <input id="nama" type="text" class="form-control" name="nama" value="{{ old('nama') }}" required>
                                                @if ($errors->has('nama'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('nama') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row{{ $errors->has('nisn') ? ' has-error' : '' }}">
                                            <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
                                            <div class="col-sm-10">
                                                <input id="nisn" type="number" class="form-control" name="nisn" value="{{ old('nisn') }}" maxlength="8" required>
                                                @if ($errors->has('nisn'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('nisn') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row{{ $errors->has('tempat_lahir') ? ' has-error' : '' }}">
                                            <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                            <div class="col-sm-10">
                                                <input id="tempat_lahir" type="text" class="form-control" name="tempat_lahir" value="{{ old('tempat_lahir') }}" required>
                                                @if ($errors->has('tempat_lahir'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('tempat_lahir') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row{{ $errors->has('tgl_lahir') ? ' has-error' : '' }}">
                                            <label for="tgl_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                            <div class="col-sm-10">
                                                <input id="tgl_lahir" type="date" class="form-control" name="tgl_lahir" value="{{ old('tgl_lahir') }}" required>
                                                @if ($errors->has('tgl_lahir'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('tgl_lahir') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row{{ $errors->has('level') ? ' has-error' : '' }}">
                                            <label for="level" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="jk" required="">
                                                    <option value=""></option>
                                                    <option value="L">Laki - Laki</option>
                                                    <option value="P">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row{{ $errors->has('jurusan') ? ' has-error' : '' }}">
                                            <label for="jurusan" class="col-sm-2 col-form-label" >Jurusan</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="jurusan" required="">
                                                    <option value=""></option>
                                                    <option value="TI">Teknik Informatika</option>
                                                    <option value="SI">Sistem Informasi</option>
                                                    <option value="KM">Kesehatan Masyarakat</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row{{ $errors->has('user_id') ? ' has-error' : '' }} " style="margin-bottom: 20px;">
                                            <label for="user_id" class="col-sm-2 col-form-label">User Login</label>
                                            <div class="col-sm-10">
                                            <select class="form-control" name="user_id" required="">
                                                <option value="">(Cari User)</option>
                                                @foreach($users as $user)
                                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                                @endforeach
                                            </select>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary" id="submit">
                                                    Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger">
                                                    Reset
                                        </button>
                                        <a href="{{route('anggota.index')}}" class="btn btn-light pull-right">Back</a>

                                    </form>
                                </div>
                            </div>
                            {{--  Basic Form Inputs card end   --}}
                        </div>
                    </div>
                </div>
                {{--  Page body end   --}}
            </div>
        </div>
        {{--  Main-body end  --}}
        {{--  <div id="styleSelector">

        </div>  --}}
    </div>
@endsection
