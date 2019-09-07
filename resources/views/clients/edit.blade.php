@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit a Client</h1>    
    <form action="/clients/{{$client->id}}}" method="POST">
        @method('PATCH')
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" required
                    placeholder="Name" aria-describedby="helpId" value={{ $client->name }}>
            <small id="helpId" class="text-muted">Name of client</small>
        </div>
        <input name="" id="" class="btn btn-primary" type="submit" value="Edit">        
    </form>
    <form action="/clients/{{$client->id}}}" method="POST">
        @method('DELETE')
        @csrf
        {{ csrf_field() }}
        <input name="" id="" class="btn btn-danger" type="submit" value="Delete">
    </form>
</div>
@endsection