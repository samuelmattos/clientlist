@extends('layout')

@section('content')
    <h1>Clients</h1>
    <a name="" id="" class="btn btn-primary" href="/clients/create" role="button">Create</a>
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
                    <td>{{$item->name}}</td>
                    <td>{{$item->expire_license}}</td>
                    <td><a name="" id="" class="btn btn-primary" href="clients/{{$item->id}}/edit" role="button">Editar</a></td>
                </tr>                  
            @endforeach            
        </tbody>
    </table>
@endsection