@extends('layout')

@section('content')
    <h1>Create a new Clients</h1>
    <form action="/clients" method="POST">
        {{ csrf_field() }}
        <div>
            <input type="text" name="name" placeholder="Name" />
        </div>
        <div>
            <button type="submit">Create Client</button>
        </div>
    </form>
@endsection