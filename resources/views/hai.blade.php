@extends('layout')

@section('title', 'Data Siswa')

@section('content')
<h1>Data Siswa</h1>
<a href="{{ route('siswa.create') }}">Tambah Siswa</a>
@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<table border="1">
    <tr>
        <th>ID</th><th>NIS</th><th>Nama</th><th>Kelas</th><th>Jurusan</th><th>Aksi</th>
    </tr>
    @foreach($siswa as $s)
    <tr>
        <td>{{ $s->id }}</td>
        <td>{{ $s->nis }}</td>
        <td>{{ $s->nama }}</td>
        <td>{{ $s->kelas }}</td>
        <td>{{ $s->jurusan }}</td>
        <td><a href="{{ route('siswa.edit', $s->id) }}">Edit</a></td>
    </tr>
    @endforeach
</table>
@endsection
