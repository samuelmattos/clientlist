@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create a new Clients</h1>
    <form action="/clients" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" required
                  placeholder="Name" aria-describedby="helpId" >
        </div>
        <div class="form-group">
            <label for="expire_license">Date</label>
            <input type="date" name="expire_license" id="expire_license" class="form-control" required
                  aria-describedby="helpId" >
        </div>
        <input name="" id="" class="btn btn-primary" type="submit" value="Create Client">        
    </form>
    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $item)
                    <li>
                        {{ $item }}
                    </li>
                @endforeach            
            </ul>
        </div>
    @endif
</div>
@endsection