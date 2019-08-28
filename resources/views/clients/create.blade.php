@extends('layout')

@section('content')
    <h1>Create a new Clients</h1>
    <form action="/clients" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Name" aria-describedby="helpId">
            <small id="helpId" class="text-muted">Name of client</small>
        </div>
        <input name="" id="" class="btn btn-primary" type="submit" value="Create Client">        
    </form>
@endsection