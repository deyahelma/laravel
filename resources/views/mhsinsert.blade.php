@extends('layout.master')
@section('title', 'Halaman Mahasiswa')
@section('content')
<!-- body -->
    <h3>Form Input Mahasiswa</h3>
    @if  ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif  
    <form action="{{ route('mhsinsert.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="form-group">
        <label for="nim">NIM MAHASISWA</label>
        <input type="number" value="{{ old('nim') }}" min="5" class="form-control" id="NIM" name="nim">
    </div>
    <div class="form-group">
        <label for="nama">NAMA MAHASISWA</label>
        <input type="text" value="{{ old('nama') }}" class="form-control" id="NamaMahasiswa" name="nama">
    </div>
    <div class="mb-3">
        <label for="foto" class="form-label">Foto</label>
        <input name="foto" type="file" id="foto" accept=".jpg,.png">
    </div>
    <div class="mb-3">
        <label for="SelectKelas" class="form-label">KELAS MAHASISWA</label>
        <select id="SelectKelas" class="form-select" name="kelas">
            <option>6A</option>
            <option>6B</option>
            <option>6C</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection