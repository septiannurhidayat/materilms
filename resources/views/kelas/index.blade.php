@extends('layouts.admin')

@section('main-content')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('kelas.index') }}">Detail Kelas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Absensi</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('materi.index') }}">Daftar Materi</a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{#  #}>Daftar Mahasiswa</a>
                </li>
            </ul>
        </div>
    </nav>

    @foreach ($kelas as $kelasku)
    <article class="card mb-3" style="background-color: {{ $kelasku->warna }};">
        <div class="card-body p-0 position-relative">
            @if ($kelasku->gambar)
            <img src="{{ asset('images/' . $kelasku->gambar) }}" class="card-img" alt="{{ $kelasku->nama }}">
            @endif
            <div class="card-img-overlay d-flex flex-column justify-content-center">
                <a href="{{ route('kelas.show', ['id' => $kelasku->id]) }}" class="text-decoration-none">
                    <h1 class="card-title font-weight-bold text-white">{{ $kelasku->nama }}</h1>
                </a>
                <div class="card-text text-white">
                    <span>{{ $kelasku->user->name ?? 'Tidak diketahui' }}</span> | {{ $kelasku->created_at->format('j F Y') }}
                </div>
                <p class="card-text mt-3 text-white">{{ Str::limit($kelasku->deskripsi, 80) }}</p>
                <div class="d-flex">
                    <a href="{{ route('kelas.show', ['id' => $kelasku->id]) }}" class="btn btn-danger mr-2">Detail Kelas &raquo;</a>
                    <form action="{{ route('kelas.destroy', ['id' => $kelasku->id]) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin mengarsipkan kelas ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-warning">Arsipkan Kelas</button>
                    </form>
                </div>
            </div>
        </div>
    </article>
    @endforeach

    <!-- Tombol Tambah Kelas -->
    <div class="row justify-content-center mb-5">
        <a href="{{ route('kelas.create') }}" class="btn btn-primary">Tambah Kelas</a>
    </div>
@endsection