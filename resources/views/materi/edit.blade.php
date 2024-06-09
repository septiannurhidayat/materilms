@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Edit Materi</h1>
            <form method="POST" action="{{ route('materi.update', $materi->id) }}" enctype="multipart/form-data">
                <input type="text" name="id" value="{{ $materi->id }}" readonly>
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title">Nama Materi</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ $materi->title }}" required>
                </div>

                <div class="form-group">
                    <label for="description">Deskripsi Materi</label>
                    <textarea name="description" id="description" class="form-control" required>{{ $materi->description }}</textarea>
                </div>

                <div class="form-group">
                    <label for="meeting_number">Pertemuan</label>
                    <select name="meeting_number" id="meeting_number" class="form-control" required>
                        <option value="1" {{ $materi->meeting_number == 1 ? 'selected' : '' }}>Pertemuan 1</option>
                        <option value="2" {{ $materi->meeting_number == 2 ? 'selected' : '' }}>Pertemuan 2</option>
                        <option value="3" {{ $materi->meeting_number == 3 ? 'selected' : '' }}>Pertemuan 3</option>
                        <option value="3" {{ $materi->meeting_number == 3 ? 'selected' : '' }}>Pertemuan 4</option>
                        <option value="3" {{ $materi->meeting_number == 3 ? 'selected' : '' }}>Pertemuan 5</option>
                        <option value="3" {{ $materi->meeting_number == 3 ? 'selected' : '' }}>Pertemuan 6</option>
                        <option value="3" {{ $materi->meeting_number == 3 ? 'selected' : '' }}>Pertemuan 7</option>
                        <option value="3" {{ $materi->meeting_number == 3 ? 'selected' : '' }}>Pertemuan 8</option>
                        <option value="3" {{ $materi->meeting_number == 3 ? 'selected' : '' }}>Pertemuan 9</option>
                        <option value="3" {{ $materi->meeting_number == 3 ? 'selected' : '' }}>Pertemuan 10</option>
                        <option value="3" {{ $materi->meeting_number == 3 ? 'selected' : '' }}>Pertemuan 11</option>
                        <option value="3" {{ $materi->meeting_number == 3 ? 'selected' : '' }}>Pertemuan 12</option>
                        <option value="3" {{ $materi->meeting_number == 3 ? 'selected' : '' }}>Pertemuan 13</option>
                        <option value="3" {{ $materi->meeting_number == 3 ? 'selected' : '' }}>Pertemuan 14</option>
                        <option value="3" {{ $materi->meeting_number == 3 ? 'selected' : '' }}>Pertemuan 15</option>
                        <option value="3" {{ $materi->meeting_number == 3 ? 'selected' : '' }}>Pertemuan 16</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="file">Upload File</label>
                    <input type="file" name="file" id="file" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
