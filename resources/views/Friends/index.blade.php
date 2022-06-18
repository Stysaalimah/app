@extends('layouts\app')

@section('title','Friends')

@section('content')
<a href="/friends/create" class="btn btn-primary mb-2">Tambah Teman</a>
@foreach($friends as $friend)
<div class="card mb-2" style="width: 18rem;">
  <div class="card-body p-3 mb-3">
    <h6><a href="/friends/{{ $friend['id'] }}" class="card-title">{{ $friend['nama'] }}</a></h6>
    <h6 class="card-subtitle mb-2 text-muted">{{ $friend['no_tlp'] }}</h6>
    <h6 class="card-text">Alamat : {{ $friend['alamat'] }}</h6>
    <h6 class="card-text">Groups : {{ $friend['groups_id'] }}</h6>
    <a href="/friends/{{ $friend['id'] }}/edit" class="btn btn-warning mb-2">Edit Teman</a>
    <form action="/friends/{{ $friend['id'] }}" method="POST">
    @csrf
   @method('DELETE')
    <button class="btn btn-danger">Delete Teman</button>
    </form>
  </div>
</div>
  @endforeach
</div>    

<div>
  {{ $friends->links() }}
</div>
@endsection