@extends('layout.master')
@section('title', 'Halaman Mahasiswa')
@section('content')
<!-- body -->
 <table class="table table-striped">
    <h3>Data Mahasiswa</h3>
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">NIM</th>
            <th scope="col">Nama</th>
            <th scope="col">Kelas</th>
            <th scope="col">Gambar</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
       <?php
       $no = 1;
       foreach($semuaData as $urut => $ambilDatanya){
        ?>
        <tr>
            <td>{{$urut + 1}}</td>
            <td>{{$ambilDatanya['nim']}}</td>
            <td><?=$ambilDatanya['nama']?></td>
            <td>{{$ambilDatanya['kelas']}}</td>
            <td><img src="{{ asset('foto/'.$ambilDatanya['foto']) }}" width="10%"></td>
            <td> 
                <a onclick="return confirm('Hapus Data?')" 
                href="{{ route('mhs-baru.delete', $ambilDatanya->id) }}" 
                class="btn btn-sm btn-danger">delete</a>
                 <a href="{{ route('mhs.edit', $ambilDatanya->id) }}" 
                    class="btn btn-sm btn-warning">Edit</a>
            </td>
        </tr>
        <?php $no++; } ?>
    </tbody>
</table>

@endsection