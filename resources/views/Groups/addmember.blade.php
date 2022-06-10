@extends('layouts\app')

@section('title','Groups')

@section('content')
<h3>Input Data Anggota</h3>
<hr>
<form action="/groups/addmember/{{ $group->id }}" method="POST">
  @csrf
  @method('PUT')
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Teman</label>
    <select class="form-select" aria-label="Default select example" name="friend_id">
  <option selected>Pilih Teman </option>
  @foreach($friends as $friend)
  <option value="{{ $friend->id }}">{{ $friend -> nama}}</option>
  @endforeach
</select>
  </div>
  <button type="submit" class="btn btn-primary">Tambah ke group</button>
</form>

@endsection