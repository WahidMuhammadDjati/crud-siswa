<?php
namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all();
        return view('siswa.index', compact('siswa'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required|size:4|unique:siswa',
            'nama' => 'required|max:30',
            'kelas' => 'required|max:3',
            'jurusan' => 'required|max:30',
        ]);

        Siswa::create($request->all());

        return redirect()->route('siswa.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function show(Siswa $siswa)
    {
        return view('siswa.show', compact('siswa'));
    }

    public function edit(Siswa $siswa)
    {
        return view('edit', compact('siswa'));
    }

    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([
            'nis' => 'required|size:4|unique:siswa,nis,' . $siswa->id,
            'nama' => 'required|max:30',
            'kelas' => 'required|max:3',
            'jurusan' => 'required|max:30',
        ]);

        $siswa->update($request->all());

        return redirect()->route('siswa.index')->with('success', 'Data berhasil diubah.');
    }

    public function destroy(Siswa $siswa)
    {
        $siswa->delete();

        return redirect()->route('siswa.index')->with('success', 'Data berhasil dihapus.');
    }
}