@extends('layouts.app')

@section('content')

    <div class="container">

        @include('common.errors')

        <form action="/tasks" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <div class="input-group col-lg-10 col-lg-offset-1">
                <input type="text" name="name" id="task-name" class="form-control" placeholder="New Task">
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-default">
                        <span class="glyphicon glyphicon-tasks" aria-hidden="true"></span> Add Task
                    </button>
                </span>
            </div>
        </form>

        @if (count($tasks) > 0)

            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-xs-10 col-xs-offset-1">
                    <h3>Current Tasks</h3>
                    <table class="table table-striped">

                        <thead>
                        <th>Task</th>
                        <th class="pull-right">Actions</th>
                        </thead>

                        <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <td class="table-text">
                                    <div>{{ $task->name }}</div>
                                </td>

                                <td>
                                    <div class="pull-right">
                                        <div class="btn-group">
                                            <a class="btn btn-info btn-block" role="button"
                                               href="/tasks/{{ $task->id }}/edit">
                                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit
                                                Task
                                            </a>
                                        </div>

                                        <div class="btn-group">
                                            <form action="/tasks/{{ $task->id }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button type="button" class="btn btn-danger btn-block">
                                                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                                    Delete Task
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
    </div>


@endsection