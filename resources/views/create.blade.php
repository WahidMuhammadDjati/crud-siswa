@extends('components.layout')

@section('content')
<h3>{{ isset($siswa) ? 'Edit Siswa' : 'Tambah Siswa' }}</h3>

<form action="{{ isset($siswa) ? route('siswa.update', $siswa->id) : route('siswa.store') }}" method="POST" style="max-width: 400px;">
    @csrf
    @if(isset($siswa)) @method('PUT') @endif

    <div style="margin-bottom: 10px;">
        <label for="nis">NIS:</label><br>
        <input type="text" name="nis" id="nis" value="{{ old('nis', $siswa->nis ?? '') }}" style="width: 100%; padding: 5px;">
    </div>

    <div style="margin-bottom: 10px;">
        <label for="nama">Nama:</label><br>
        <input type="text" name="nama" id="nama" value="{{ old('nama', $siswa->nama ?? '') }}" style="width: 100%; padding: 5px;">
    </div>

    <div style="margin-bottom: 10px;">
        <label for="kelas">Kelas:</label><br>
        <input type="text" name="kelas" id="kelas" value="{{ old('kelas', $siswa->kelas ?? '') }}" style="width: 100%; padding: 5px;">
    </div>

    <div style="margin-bottom: 10px;">
        <label for="jurusan">Jurusan:</label><br>
        <input type="text" name="jurusan" id="jurusan" value="{{ old('jurusan', $siswa->jurusan ?? '') }}" style="width: 100%; padding: 5px;">
    </div>

    <button type="submit" style="padding: 5px 10px;">{{ isset($siswa) ? 'Update' : 'Simpan' }}</button>
</form>

<p style="margin-top: 10px;"><a href="{{ route('siswa.index') }}">&larr; Kembali</a></p>
@endsection
