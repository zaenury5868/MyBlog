@extends('template_admin.home')
@section('sub-judul', 'User')
@section('content')
@if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{Session('success')}}
    </div>
@endif
<a href="{{route('user.create')}}" class="btn btn-info btn-sm mb-4">Tambah User</a>
<table class="table table-striped table-hover table-sm table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama User</th>
            <th>Email</th>
            <th>Type</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($user as $result => $hasil)
        <tr>
            <td>{{ $result + $user->firstitem() }}</td>
            <td>{{ $hasil->name }}</td>
            <td>{{ $hasil->email }}</td>
            <td>
                @if ($hasil->type)
                    <h6><span class="badge badge-info">Administrator</span></h6>
                @else
                    <h6><span class="badge badge-warning">Author</span></h6>
                @endif
            </td>
            <td>
                <form action="{{route('user.destroy', $hasil->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <a href="{{route('user.edit', $hasil->id)}}" class="btn btn-primary btn-sm">Edit</a>
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $user->links() }}
@endsection
