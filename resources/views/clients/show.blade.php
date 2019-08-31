@extends('layout')

@section('content')
<h1>Show a Client</h1>
<div class="card">
    <div class="card-body">
        <h4 class="card-title">{{ $client->name }}</h4>
        <p class="card-text">{{ $client->expire_license }}</p>
    </div>
</div> 

<a name="" id="" class="btn btn-primary" href="/clients/{{$client->id}}/edit" role="button">Edit</a>
@endsection