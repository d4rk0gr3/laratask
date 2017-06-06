@extends('layouts.app')

@section('content')

    <div class="container">
        <h3>Edit task with id {{$task->id}}</h3>

        <form action="/tasks/{{$task->id}}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            {{ method_field('PUT') }}

            <div class="input-group col-lg-10 col-lg-offset-1">
                <input type="text" name="name" id="task-name" class="form-control" value="{{$task->name}}">
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-default">
                        <span class="glyphicon glyphicon-tasks" aria-hidden="true"></span> Edit Task</button>
                </span>
            </div>
        </form>
    </div>
@endsection