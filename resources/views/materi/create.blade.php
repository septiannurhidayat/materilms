@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Tambah Materi</h1>
            <form method="POST" action="{{ route('materi.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="title">Nama Materi</label>
                    <input type="text" name="title" id="title" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="description">Deskripsi Materi</label>
                    <textarea name="description" id="description" class="form-control" required></textarea>
                </div>

                <div class="form-group">
                    <label for="meeting_number">Pertemuan</label>
                    <select name="meeting_number" id="meeting_number" class="form-control" required>
                        <option value="1">Pertemuan 1</option>
                        <option value="2">Pertemuan 2</option>
                        <option value="3">Pertemuan 4</option>
                        <option value="4">Pertemuan 5</option>
                        <option value="5">Pertemuan 6</option>
                        <option value="6">Pertemuan 7</option>
                        <option value="7">Pertemuan 8</option>
                        <option value="8">Pertemuan 9</option>
                        <option value="9">Pertemuan 10</option>
                        <option value="10">Pertemuan 11</option>
                        <option value="11">Pertemuan 12</option>

                        <!-- Tambahkan opsi lainnya sesuai kebutuhan -->
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
