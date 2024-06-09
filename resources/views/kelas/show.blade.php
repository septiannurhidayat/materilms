@extends('layouts.admin')

@section('main-content')
<div class="container">
    <article class="card mb-3">
        @if ($kelas->gambar)
        <img src="{{ asset('images/' . $kelas->gambar) }}" class="card-img" alt="{{ $kelas->nama }}">
        @endif
        <div class="card-img-overlay d-flex flex-column">
            <h2 class="card-title font-weight-bold text-white">{{ $kelas->nama }}</h2>
            <div class="card-text text-white">
                <span>Dibuat oleh {{ $kelas->user->name ?? 'Tidak diketahui' }}</span> | {{ $kelas->created_at->format('j F Y') }}
            </div>
        </div> 
        <div class="card-body">  
            <h5 class="font-weight-bold mt-3 mb-2">Tentang Kuliah Ini</h5>
            <p class="card-text text-justify">{{ $kelas->deskripsi }}</p>
            <a href="{{ route('kelas.index') }}" class="btn btn-danger mt-3"> &laquo; Kembali ke Kelas Saya</a>
        </div>
    </article>

    <!-- Tabs -->
    <ul class="nav nav-tabs mt-4" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="absensi-tab" data-toggle="tab" href="#absensi" role="tab" aria-controls="absensi" aria-selected="true">Absensi</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="materi-tab" data-toggle="tab" href="#materi" role="tab" aria-controls="materi" aria-selected="false">Materi</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="tugas-tab" data-toggle="tab" href="#tugas" role="tab" aria-controls="tugas" aria-selected="false">Tugas</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="absensi" role="tabpanel" aria-labelledby="absensi-tab">
            <p class="mt-3">Konten absensi...</p>
        </div>
        <div class="tab-pane fade" id="materi" role="tabpanel" aria-labelledby="materi-tab">
            <p class="mt-3">Konten materi...</p>
        </div>
        <div class="tab-pane fade" id="tugas" role="tabpanel" aria-labelledby="tugas-tab">
            <p class="mt-3">Konten tugas...</p>
        </div>
    </div>
</div>
@endsection
