@extends('template_admin.home')
@section('sub-judul', 'Kategori')
@section('content')
<a href="{{route('category.create')}}" class="btn btn-info btn-sm mb-4">Tambah Kategori</a>
<table class="table table-striped table-hover table-sm table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Kategori</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($category as $result => $hasil)
        <tr>
            <td>{{ $result + $category->firstitem() }}</td>
            <td>{{ $hasil->name }}</td>
            <td><a href="" class="btn btn-primary btn-sm">Edit</a>
                <a href="" class="btn btn-danger btn-sm">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $category->links() }}
@endsection
