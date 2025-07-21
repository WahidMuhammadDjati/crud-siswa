@extends('components.layout')

@section('content')
<h3 style="margin-bottom: 10px;">Edit Siswa</h3>

<form action="{{ route('siswa.update', $siswa->id) }}" method="POST" style="max-width: 400px;">
    @csrf
    @method('PUT')

    <div style="margin-bottom: 10px;">
        <label style="display: block; margin-bottom: 5px;">NIS:</label>
        <input type="text" name="nis" value="{{ old('nis', $siswa->nis) }}" style="width: 100%;">
    </div>

    <div style="margin-bottom: 10px;">
        <label style="display: block; margin-bottom: 5px;">Nama:</label>
        <input type="text" name="nama" value="{{ old('nama', $siswa->nama) }}" style="width: 100%;">
    </div>

    <div style="margin-bottom: 10px;">
        <label style="display: block; margin-bottom: 5px;">Kelas:</label>
        <input type="text" name="kelas" value="{{ old('kelas', $siswa->kelas) }}" style="width: 100%;">
    </div>

    <div style="margin-bottom: 10px;">
        <label style="display: block; margin-bottom: 5px;">Jurusan:</label>
        <input type="text" name="jurusan" value="{{ old('jurusan', $siswa->jurusan) }}" style="width: 100%;">
    </div>

    <button type="submit" style="padding: 6px 12px;">Update</button>
</form>

<p style="margin-top: 10px;"><a href="{{ route('siswa.index') }}">&larr; Kembali</a></p>
@endsection
