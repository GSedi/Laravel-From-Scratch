@extends('layout')

@section('title')
    My First Site
@endsection

@section('content')
    <h1>Here we GO!</h1>

    <ul>
        @foreach ($tasks as $task)
            
            <li>{{$task}}</li> 

        @endforeach

    </ul>

@endsection
