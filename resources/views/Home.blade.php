@extends('Master')
@section('title','Home Page')
@section('content')
<h1>Home Page</h1>
<ul>
    @if(count($post))
    @foreach ($post as $p )
             <li>{{$p->title}} <br> {{$p->description}}</li>
         @endforeach
    @else
        <p>there is no post</p>

    @endif

</ul>
@endsection
