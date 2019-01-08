@extends('layout')

@section('content')
    <h1>Create Project</h1>

    <form action="/projects" method="POST">

        {{ csrf_field()}}

        <div>
            <input type="text" name="title" id="" class="input {{ $errors->has('title') ? 'danger' : ''}}" 
            value="{{old('title')}}">
        </div>
        <div>
            <textarea name="description" id="" cols="10" rows="3">{{old('description')}}</textarea>
        </div>
        <button type="submit">Submit</button>

        @include('errors')

    </form>

@endsection