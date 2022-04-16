@extends('layouts.app')

@section('title', 'friends')

@section('content')

@foreach ($friends  as $friend )
    <h1>Nama ke - {{ $friend['nama'] }}</h1>
    <h3>No tlp ke - {{ $friend['no_tlp'] }}</h3>
    <h3>Alamat - {{ $friend['alamat'] }}</h3>
@endforeach
    ({$friends->links() })
@endsection