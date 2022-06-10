@extends('layouts\app')
@section('title','Groups')
@section('content')
<HR></HR>
<a href="/groups/create" class="btn btn-primary mb-2">Tambah Group</a>

@foreach($groups as $group)
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5><a href="/groups/{{ $group['id'] }}" class="card-title">{{ $group['name'] }}</a></h5>
    <hr>
    <h6 class="card-text text-muted">{{ $group['description'] }}</h6>
    <h6 class="card-text">Jumlah Anggota : {{ $group -> friends -> count() }}</h6>
    <hr>
    <a href="/groups/addmember/{{ $group['id'] }}" class="btn btn-primary mb-2">Tambah Anggota</a>

@foreach ($group->friends as $friend)
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">{{$friend->nama}}</div>
    </div>
    <form action="/groups/deleteaddmember/{{ $friend->id }}" method="POST">
    @csrf
    @method('PUT')
    <button type="submit" class="btn btn-danger">X</button>
    </form>
  </li>
@endforeach
    <hr>

    <a href="/groups/{{ $group['id'] }}/edit" class="btn btn-warning mb-2">Edit Groups</a>
    <form action="/groups/{{ $group['id'] }}" method="POST">
    @csrf
   @method('DELETE')
    <button class="btn btn-danger">Delete Groups</button>
</form>
  </div>
</div>
@endforeach
<div>
</div>
{{ $groups->links() }}
@endsection