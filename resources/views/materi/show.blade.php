@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>{{ $materi->title }}</h1>
    <p>{{ $materi->description }}</p>
    <p>Pertemuan: {{ $materi->meeting_number }}</p>
    @if ($materi->file_path)
        <p><a href="{{ asset('storage/' . $materi->file_path) }}" class="btn btn-link">Download File</a></p>
    @endif
    <a href="{{ route('materi.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
