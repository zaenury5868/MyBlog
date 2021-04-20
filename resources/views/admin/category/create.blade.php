@extends('template_admin.home')
@section('sub-judul', 'Tambah Kategori')
@section('content')
<form action="{{route('category.store')}}" method="POST">
    @csrf
    <div class="form-group">
        <label>Kategori</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
        <button class="btn btn-primary btn-block">Simpan Kategori</button>
    </div>
</form>
@endsection
