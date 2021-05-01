
<!DOCTYPE html>
<html>
<head>
	<title>contoh surat pengunguman</title>
	<style type="text/css">
		table {
			border-style: double;
			border-width: 3px;
			border-color: white;
		}
		table tr .text2 {
			text-align: right;
			font-size: 13px;
		}
		table tr .text {
			text-align: center;
			font-size: 13px;
		}
		table tr td {
			font-size: 13px;
		}

	</style>
</head>
<body>
	<center>
		<table>
			<tr>

				<td><img src=" {{ asset('img/logo-smk.png') }}" width="90" height="90"></td>
				<td>
				<center>
					<font size="4">PERPUSTAKAAN</font><br>
					<font size="5"><b>SMK NEGERI 2 SUKOREJO </b></font><br>
					<font size="2"></font><br>
					<font size="2"><i>Jln Cut Nya'Dien No. 02 Kode Pos : 68173 Telp./Fax (0331)758005 Tempurejo Jember Jawa Timur</i></font>
				</center>
				</td>
			</tr>
			<tr>
				<td colspan="2"><hr></td>
			</tr>

		</table>
    </center>
		<table style="width: 100%; text-align:center" border="2">
            <thead>
				<tr>

					<th>Nis</th>
					<th>Nama</th>
					<th>Tempat Lahir</th>
					<th>Tanggal Lahir</th>
					<th>Jenis Kelamin</th>
					<th>Jurusan</th>

				</tr>
			</thead>
			<tbody>
				@foreach ($posts as $index => $murid)

				<tr>
					
					<td>{{ $murid->nis }}</td>
					<td>{{ $murid->nama }}</td>
					<td>{{ $murid->tempat_lahir }}</td>
					<td>{{ $murid->tanggal_lahir }}</td>
					<td>{{ $murid->jk }}</td>
					<td>{{ $murid->jurusan }}</td>

				</tr>
				@endforeach
			</tbody>
        </table>
		<br>
		<table>
			<tr>
				<td width="430"><br><br><br><br></td>
				<td class="text" align="center">Kepala Perpustakaan<br><br><br><br>Siapa Hayo</td>
			</tr>
	     </table>

</body>
</html>

</body>
</html>