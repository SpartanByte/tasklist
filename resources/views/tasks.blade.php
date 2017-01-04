{{-- /views/tasks.blade.php
    Basic Task List - Tutorial
    https://laravel.com/docs/5.1/quickstart
    --}}


    @extends('layouts.app')


    @section('content')

        {{-- Create task form  --}}
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">

                    New Task
                </div>

            <div class="panel-body">
            {{-- Display validation errors  --}}
            @include('common.errors')

            {{-- New Task form  --}}
            <form action="/task" method="POST" class="form-horizontal">
                {{ csrf_field() }}

                {{-- Task Name  --}}
                <div class="form-group">
                    <label for="task" class="col-sm-3 control-label">Task</label>

                    <div class="col-sm-6">
                        <input type="text" name="name" id="task-name" class="form-control">
                    </div>
                </div>

                {{-- Add task button  --}}
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6">
                        <button type="submit" class="btn btn-default">
                            <i class="fa fa-btn fa-plus"></i>Add Task
                        </button>
                    </div>
                </div>
            </form>
        </div>

        {{-- Current tasks  --}}
        @if(count($tasks) > 0)

            <div class="panel panel-default">
                <div class="panel-heading">
                    Current Tasks
                </div>

                <div class="panel-body">
                    <table class="table table-striped task-table">

                        <!-- Table Headings -->
                        <thead>
                            <th>Task</th>
                            <th>&nbsp;</th>
                        </thead>

                        {{-- Table Body  --}}
                        <tbody>
                            @foreach($tasks as $task)
                                <tr>

                                    {{-- Task Name  --}}
                                    <td class="table-text">
                                        <div> {{ $task->name }} </div>
                                    </td>
                                            {{ method_field('DELETE') }}
                                    <td>
                                        <form action="/task/{{ $task->id }}" method="POST">

                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <button class="dltBtn">Delete Task</button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        @endif
    </div>
</div>
@endsection

