@extends('layout.admin.index')
@section('konten')

<table class="table" border="1">
    <tr>
        <th>Tanggal Pengaduan</th>
        <td>{{ $detail->tgl_pengaduan }}</td>
    </tr>
    <tr>
        <th>NIK</th>
        <td>{{ $detail->nik }}</td>
    </tr>
    <tr>
        <th>Laporan</th>
        <td style="width: 24rem;height: 4rem;">{{ $detail->isi_laporan }}</td>
    </tr>
    <tr>
        <th>Foto</th>
        <td>{{ $detail->foto }}</td>
    </tr>
    <tr>
        <th>Status</th>
        <td>
            @if ($detail->status == "0")
                <h4 href="#" class="">Pending</h4>
            @elseif ($detail->status == "proses")
                <h4 href="#">proses</h4>
            @else 
                <h4 href="#">sukses</h4>
            @endif
        </td>
    </tr>
</table>
<form method="POST" action="/detail/{{ $detail->id}}">
    @csrf
    <button class="valid">Valid</button>
</form>
@endsection