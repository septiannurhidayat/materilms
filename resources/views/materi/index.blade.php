@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Materi</h1>
            <a href="{{ route('materi.create') }}" class="btn btn-primary mb-3">Tambah Materi</a>

            @if ($materi->count())
                <ul class="list-group">
                    @foreach ($materi as $item)
                        <li class="list-group-item">
                            <h2>{{ $item->title }}</h2>
                            <p>{{ $item->description }}</p>
                            <p>Pertemuan: {{ $item->meeting_number }}</p>
                            @if ($item->file_path)
                                <p><a href="{{ asset('storage/' . $item->file_path) }}" class="btn btn-link">Download File</a></p>
                            @endif
                            <a href="{{ route('materi.show', $item->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('materi.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('materi.destroy', $item->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </li>
                    @endforeach
                    @extends('layouts.admin')

                    @section('content')
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Materi</h1>
                                <a href="{{ route('materi.create') }}" class="btn btn-primary mb-3">Tambah Materi</a>
                    
                                @if ($materi->count())
                                    <ul class="list-group">
                                        @foreach ($materi as $item)
                                            <li class="list-group-item">
                                                <h2>{{ $item->title }}</h2>
                                                <p>{{ $item->description }}</p>
                                                <p>Pertemuan: {{ $item->meeting_number }}</p>
                                                @if ($item->file_path)
                                                    <p><a href="{{ asset('storage/' . $item->file_path) }}" class="btn btn-link">Download File</a></p>
                                                @endif
                                                <a href="{{ route('materi.show', $item->id) }}" class="btn btn-info">View</a>
                                                <a href="{{ route('materi.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                                                <form action="{{ route('materi.destroy', $item->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </li>
                                        @endforeach
                                    </ul>
                                @else
                                    <p>No materi available.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endsection
                         </ul>
            @else
                <p>No materi available.</p>
            @endif
        </div>
    </div>
</div>
@endsection
