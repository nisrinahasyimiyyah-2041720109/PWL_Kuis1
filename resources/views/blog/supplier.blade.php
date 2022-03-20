@extends('layout.master')

@section('content')
    <h1>Ini halaman supplier</h1>

    <table class="table table-head-fixed">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Supplier</th>
                <th>Alamat</th>
                <th>Nomor Telepon</th>
            </tr>
        </thead>
        <tbody>
            @foreach($blog as $b)
            <tr>
                <td>{{ $b->id }}</td>
                <td>{{ $b->nama }}</td>
                <td>{{ $b->alamat }}</td>
                <td>{{ $b->nomor_telepon }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
        <div class="d-flex" >
            {{ $blog->links() }}
        </div>
@endsection