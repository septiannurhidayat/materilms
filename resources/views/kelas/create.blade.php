@extends('layouts.admin')

@section('main-content')
<div class="container">
    <h1 class="h3 mb-4 text-gray-800">{{ __('Tambah Kelas') }}</h1>

    <form action="{{ route('kelas.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nama">Nama Kelas</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="form-group">
            <label for="tingkat">Tingkat</label>
            <input type="text" class="form-control" id="tingkat" name="tingkat" required>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="file" class="form-control-file" id="gambar" name="gambar">
        </div>
        <div class="form-group">
            <label for="warna">Warna</label>
            <select class="form-control" id="warna" name="warna">
                <option value="#FF0000">Merah</option>
                <option value="#00FF00">Hijau</option>
                <option value="#0000FF">Biru</option>
                <option value="#FFFFFF">Putih</option>
                <!-- Tambahkan warna lainnya sesuai kebutuhan -->
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Tambah Kelas</button>
    </form>
</div>
@endsection
