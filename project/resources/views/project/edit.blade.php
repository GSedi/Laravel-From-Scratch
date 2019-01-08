@extends('layout')

@section('content')
    <h1>Edit Form</h1>

    <form action="/projects/{{$project->id}}" method="POST">

        {{  csrf_field() }}
        {{  method_field('PATCH') }}

        <div>
        <input type="text" name="title" id="" value="{{$project->title}}" required>
        </div>

        <div>
            <textarea name="description" id="" cols="30" rows="10" required>{{$project->description}}</textarea>
        </div>

        <div>
            <button type="submit">Update Project</button>
        </div>

    </form>

    <form action="/projects/{{$project->id}}" method="POST">
        
        @csrf
        @method('DELETE')
        
        <button type="submit" style="color:red">Delete</button>
    </form>

@endsection