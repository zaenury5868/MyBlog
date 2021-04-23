@extends('template_admin.home')
@section('sub-judul', 'Edit User')
@section('content')
@if(count($errors)>0)
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{$error}}
        </div>
    @endforeach
@endif
@if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{Session('success')}}
    </div>
@endif
<form action="{{route('user.update', $user->id)}}" method="POST">
    @csrf
    @method('patch')
    <div class="form-group">
        <label>Nama User</label>
        <input type="text" class="form-control" name="name" value="{{$user->name}}">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" name="email" value="{{$user->email}}" readonly>
    </div>
    <div class="form-group">
        <label>Type User</label>
        <select name="type" id="" class="form-control">
            <option value="" holder>--Pilih Type User--</option>
            <option value="1" holder
            @if ($user->type == 1)
                selected
            @endif
            >Administrator</option>
            <option value="0" holder
            @if ($user->type == 0)
                selected
            @endif
            >Penulis</option>
        </select>
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="password">
    </div>
    <div class="form-group">
        <button class="btn btn-primary btn-block">Update User</button>
    </div>
</form>
@endsection
