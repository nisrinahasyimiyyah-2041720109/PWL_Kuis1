@extends('layout.master')

@section('content')
    <h1>Ini halaman pegawai</h1>
    
    <table class="table table-head-fixed">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Nomor Telepon</th>
                <th>Jabatan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($blog as $b)
            <tr>
                <td>{{ $b->id }}</td>
                <td>{{ $b->nama }}</td>
                <td>{{ $b->alamat }}</td>
                <td>{{ $b->jenis_kelamin }}</td>
                <td>{{ $b->nomor_telepon }}</td>
                <td>{{ $b->jabatan }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
        <div class="d-flex" >
            {{ $blog->links() }}
        </div>

    @endsection