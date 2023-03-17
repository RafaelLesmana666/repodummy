@extends('layout.admin.index')
@section('konten')
    <div>
        <form method="POST">
            @csrf
            <div class="tang">
                <label for="tanggapan">Tanggapan</label>
                    <textarea type="text" name="tanggapan"></textarea>
                <button type="submit" class="valid">Kirim</button>
        </div>
        </form>
    </div>
    
@endsection