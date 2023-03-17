@extends('layout.admin.index')
@section('konten')
<table class="table" border="1">
    <thead>
        <th>No</th>
        <th>Tanggal Tanggapan</th>
        <th>Tanggapan</th>
        <th>Id Petugas</th>
        <th>Status</th>
        <th>Action</th>
    </thead>
    @foreach ($tanggapan as $p)
    <tr>
        <td>{{ $p->id }}</td>
        <td>{{ $p->tgl_pengaduan }}</td>
        <td>{{ $p->tanggapan }}</td>
        <td>{{ $p->id_petugas}}</td>
        <td>{{ $p->status }}</td>
        <td>
             <a href="/tanggapan/{{ $p->id }}">tanggapi</a>
        </td>
    </tr> 
    @endforeach
</table>
@endsection