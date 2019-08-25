@extends('layout')

@section('content')
    <h1>Hello</h1>
    <ul>
        @foreach ($tasks as $task)
            <li>{{$task}}</li>
        @endforeach
    </ul>
    
@endsection