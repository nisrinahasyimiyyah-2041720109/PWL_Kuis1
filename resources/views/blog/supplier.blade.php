@extends('layout.master')

@section('content')
    <div class="table-responsive">
        <table class="table table-head-fixed table-hover">
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
    </div>
        <div class="d-flex" >
            {{ $blog->links() }}
        </div>
@endsection