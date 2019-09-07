@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Clients</h1>
    <a name="" id="" class="btn btn-success" href="/clients/create" role="button">Create</a>
    <div class="row justify-content-center">    
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Expire License</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td><a href="clients/{{$item->id}}"> {{$item->name}}</a></td>
                    <td>{{$item->expire_license}}</td>
                    <td><a name="" id="" class="btn btn-primary" href="clients/{{$item->id}}/edit" role="button">Editar</a></td>
                </tr>                  
            @endforeach            
        </tbody>
    </table>
    </div>
</div>
@endsection