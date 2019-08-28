@extends('layout')

@section('content')
    <h1>Edit a Client</h1>    
    <form action="/clients/{{$client->id}}}" method="POST">
        {{method_field('PATCH')}}
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Name" aria-describedby="helpId" value={{ $client->name }}>
            <small id="helpId" class="text-muted">Name of client</small>
        </div>
        <input name="" id="" class="btn btn-primary" type="submit" value="Edit">
    </form>
@endsection