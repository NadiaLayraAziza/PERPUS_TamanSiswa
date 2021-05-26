<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<style type="text/css">

    /* th {
    background: #fff5f5;
    background: linear-gradient(#687587, #404853);
    border-left: 1px solid rgba(0, 0, 0, 0.2);
    border-right: 1px solid rgba(255, 255, 255, 0.1);
    color: rgb(0, 0, 0);
    padding: 8px;
    text-align: left;
    text-transform: uppercase;
    }
    th:first-child {
    border-top-left-radius: 4px;
    border-left: 0;
    }
    th:last-child {
    border-top-right-radius: 4px;
    border-right: 0;
    }
    #isi-td{
    border-right: 0px solid #2074c9;
    border-bottom: 0px solid #1b73cc;
    padding:0;
    }
    td {
    border-right: 1px solid #c6c9cc;
    border-bottom: 1px solid #c6c9cc;
    padding: 8px;
    }
    td:first-child {
    border-left: 1px solid #c6c9cc;
    }
    tr:first-child td {
    border-top: 0;
    }
    tr:nth-child(even) td {
    background: #e8eae9;
    }
    tr:last-child td:first-child {
    border-bottom-left-radius: 4px;
    }
    tr:last-child td:last-child {
    border-bottom-right-radius: 4px;
    } */
    /* img {
    	width: 40px;
    	height: 40px;
    	border-radius: 100%;
    } */
  #table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
#normal{
  border: 0 solid #dddddd;
  text-align: left;
  padding: 0;
}

#isi-table {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

/* tr:nth-child(even) {
  background-color: #dddddd;
} */
	</style>
  <link rel="stylesheet" href="">
	<title>Laporan Data Buku</title>
</head>
<body>
<table style="width: 100%">
  <tr>
    {{-- <td><img src=" {{ asset('images/logo-smk.png') }}" style="width: 150px"></td> --}}
    <td>
      <center>
        <font size="4">PERPUSTAKAAN</font><br>
        <font size="5"><b>SMK TAMAN SISWA MOJOAGUNNG </b></font><br>
        <font size="2"></font><br>
        <font size="2"><i>Jln Cut Nya'Dien No. 02 Kode Pos : 68173 Telp./Fax (0331)758005 Tempurejo Jember Jawa Timur</i></font>
      </center>
    </td>
  </tr>
  <tr>
    <td colspan="2"><hr></td>
  </tr>
</table>
 <table id="table">
    <thead>
      <tr>
        <th colspan="7">Laporan Data User Aktif</th>
        <th></th>
      </tr>
      <tr>
        <th id="isi-table"> Name </th>
        <th id="isi-table"> Username </th>
        <th id="isi-table"> Email </th>
        <th id="isi-table"> Level </th>
        <th id="isi-table"> Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($datas as $data)
      <tr>
        <td id="isi-table">
        @if($data->gambar)
          <img width="30" height="30" src="{{url('images/user', $data->gambar)}}" alt="image" />
        @else
          <img width="30" height="30" src="{{url('images/user/default.png')}}" alt="image" />
        @endif
          {{$data->name}}
        </td>
        <td id="isi-table">{{$data->username}}</td>
        <td id="isi-table">{{$data->email}}</td>
        <td id="isi-table">{{$data->level}}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
</body>
</html>
