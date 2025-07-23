@extends('layout.master')
@section('title', 'Edit Mahasiswa')
@section('content')

<h3>Edit Data Mahasiswa</h3>
<form action="{{ route('mhs.update', $data->id) }}" method="POST">
    @csrf
    <div class="form-group">
        <label>NIM</label>
        <input type="text" name="nim" value="{{ $data->nim }}" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" value="{{ $data->nama }}" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Kelas</label>
        <input type="text" name="kelas" value="{{ $data->kelas }}" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('mhs-baru') }}" class="btn btn-secondary">Kembali</a>
</form>

@endsection
