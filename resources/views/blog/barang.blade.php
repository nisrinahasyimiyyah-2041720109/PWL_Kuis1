@extends('layout.master')

@section('content')
    <div class="table-responsive">
        <table class="table table-head-fixed table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Gambar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($blog as $b)
                    <tr>
                        <td>{{ $b->id }}</td>
                        <td>{{ $b->nama }}</td>
                        <td>{{ $b->kategori }}</td>
                        <td>{{ $b->harga }}</td>
                        <td><img src="{{ $b->gambar }}" alt="Image" class="img-fluid"></td>
                    </tr>
                @endforeach
            </tbody>           
        </table>
    </div>
    <div class="d-flex">
        {{ $blog->links() }}
    </div>
@endsection