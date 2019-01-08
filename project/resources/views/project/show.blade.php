@extends('layout')

@section('content')

    <h1>{{  $project->title}}</h1>

    <div class="content">
        {{  $project->description}}
    </div>

    <a href="/projects/{{$project->id}}/edit">Edit</a>

    @if ($project->tasks->count())

    <div>
        <ul>
        @foreach ($project->tasks as $task)

            <form action="/tasks/{{$task->id}}" method="POST">

                @method('PATCH')
                @csrf

                <input type="checkbox" name="completed" id="" onchange="this.form.submit()" {{$task->completed ? 'checked' : ''}}>
            </form>

            <li>{{$task}} </li>   

        @endforeach
    </ul>
    </div>
            
    @endif

    <form action="/projects/{{$project->id}}/tasks" method="post" class="form-control">

        @csrf

        <div>
            <textarea name="description" id="" cols="10" rows="3">{{old('description')}} </textarea>
        </div>
        <div>
            <button type="submit">Add Task</button>
        </div>

        @include('errors')

    </form>




    
@endsection