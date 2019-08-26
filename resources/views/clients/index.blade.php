@extends('layout')

@section('content')
    <h1>Clients</h1>
    <ul>
        @foreach ($clients as $item)
            <li>{{$item->name}}</li>
            <li>{{$item->expire_license}}</li>
        @endforeach
    </ul>
  
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
         Alias iste quidem voluptatem non eaque, ut quas aliquam nisi aperiam
         repudiandae odit, modi quaerat error, eum reprehenderit maiores. Recusandae, impedit veritatis?</p>
@endsection