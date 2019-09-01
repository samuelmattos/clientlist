@extends('layout')

@section('content')
<h1>Show a Client</h1>
<div class="card">
    <div class="card-body">
        <h4 class="card-title">{{ $client->name }}</h4>
        <p class="card-text">{{ $client->expire_license }}</p>
    </div>
</div> 
<h2>Server</h2>
<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Host</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($client->serves as $serve)
        <tr>
            <td>{{$serve->name}}</td>
            <td>{{$serve->host}}</td>
        </tr>
        @endforeach
        
    </tbody>
</table>
<a name="" id="" class="btn btn-primary" href="/clients/{{$client->id}}/edit" role="button">Edit</a>
@endsection