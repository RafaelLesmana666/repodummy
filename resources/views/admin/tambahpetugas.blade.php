@extends('layout.admin.index')
@section('konten')
<div>
    <div class="buttonT">
        <a href="/tambah">Tambah +</a>
    </div>
</div>
<table class="table" border="1">
    <thead>
        <th>ID Petugas</th>
        <th>Nama Petugas</th>
        <th>Username</th>
        <th>Telpon</th>
        <th>Level</th>
        <th>Action</th>
    </thead>
    @foreach ($petugas as $p)
    <tr>
        <td>{{ $p->id }}</td>
        <td>{{ $p->nama_petugas }}</td>
        <td>{{ $p->username }}</td>
        <td>{{ $p->telp }}</td>
        <td>{{ $p->level}}</td>
        <td>
            <a href="">edit</a>
            <a href="">hapus</a>
        </td>
    </tr> 
    @endforeach
</table>
@endsection