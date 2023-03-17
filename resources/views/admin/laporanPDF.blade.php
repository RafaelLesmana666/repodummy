<!DOCTYPE html>
<html>
<head>
	<title>Laporan Pengaduan Masyarakat Desa Cigombong</title>
    <style>
        body {
            text-align: center;
        }
        table {
            text-align: center;
        }
        th {
            padding: 1rem 2rem;
            border-bottom: 1px solid grey;
        }
        td {
            padding: 1rem 0.5rem;
        }
    </style>
</head>
<body>
    <h2>Laporan Pengaduan Masyarakat Desa Cigombong</h2>
	<table>
		<thead>
			<tr>
				<th>No</th>
				<th>Tanggal Pengaduan</th>
				<th>Laporan</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>
			@foreach($pengaduan as $p)
			<tr>
				<td>{{$p->id}}</td>
				<td>{{$p->tgl_pengaduan}}</td>
				<td style="width: 18rem;">{{$p->isi_laporan}}</td>
				<td>{{$p->status}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>