<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use Illuminate\Support\Facades\Auth;

class KelasController extends Controller
{
    // Metode index untuk menampilkan daftar kelas
    public function index()
    {
        $kelas = Kelas::where('user_id', Auth::id())->get();
        return view('kelas.index', ['title' => 'Kelas Saya', 'kelas' => $kelas]);
    }

    // Metode create untuk menampilkan form pembuatan kelas baru
    public function create()
    {
        return view('kelas.create', ['title' => 'Tambah Kelas']);
    }

    // Metode store untuk menyimpan kelas baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'tingkat' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'warna' => 'nullable|string|max:225',
        ]);

        $kelas = new Kelas();
        $kelas->nama = $request->nama;
        $kelas->user_id = Auth::id();
        $kelas->tingkat = $request->tingkat;
        $kelas->deskripsi = $request->deskripsi;

        if ($request->hasFile('gambar')) {
            $imageName = time().'.'.$request->gambar->extension();
            $request->gambar->move(public_path('images'), $imageName);
            $kelas->gambar = $imageName;
        }

        $kelas->warna = $request->warna;
        $kelas->save();

        return redirect()->route('kelas.index')->with('success', 'Kelas berhasil ditambahkan');
    }

    // Metode show untuk menampilkan detail kelas
    public function show($id)
    {
        $kelas = Kelas::findOrFail($id);
        return view('kelas.show', ['title' => $kelas->nama, 'kelas' => $kelas]);
    }

    // Metode destroy untuk menghapus kelas
    public function destroy($id)
    {
        $kelas = Kelas::findOrFail($id);
        $kelas->delete();

        return redirect()->route('kelas.index')->with('success', 'Kelas berhasil dihapus');
    }
}

