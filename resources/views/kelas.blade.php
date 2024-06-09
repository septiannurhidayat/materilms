@extends('layouts.admin')

@section('main-content')
<div class="container">
    @foreach ($kelas as $kelasku)
    <article class=" rounded-xl bg-white border-2 border-red-700 px-10 py-10 max-w-screen mb-5 flex justify-between items-start">
        <div>
            <a href="/kelas/{{ $kelasku['id'] }}" class="hover:underline">
                <h2 class="mb-1 text-3xl text-red-700 font-bold">{{ $kelasku['judul'] }}</h2>
            </a>
            <div class="text-base text-gray-500">
                <a href="#">{{ $kelasku['dosen'] }}</a> | {{ $kelasku->created_at->format('j F Y') }}
            </div>
            <p class="my-4 font-light">{{ Str::limit($kelasku['deskripsi'], 150) }}</p>
            <a href="/kelas/{{ $kelasku['id'] }}" class="font-medium text-red-700 hover:underline">Detail Kelas &raquo;</a>
        </div>
        
        <form id="delete-form-{{ $kelasku->id }}" action="{{ route('kelas.destroy', $kelasku->id) }}" method="POST" class="ml-4">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-700 text-white font-medium px-2 py-2 rounded hover:bg-red-600" onclick="return confirm('Apakah Anda yakin ingin menghapus kelas ini?')"><img class="h-5 w-5" src="deleteIcon.png"></button>
        </form>
    </article>
    @endforeach
    <div class=" flex justify-center">
        <a href="/create" class="mt-5 mb-5 bg-red-700 text-white font-medium px-4 py-2 rounded hover:bg-red-600">
            Tambah Kelas
        </a>
    </div>
</div>
@endsection
