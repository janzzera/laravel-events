@extends('layouts.app')

@section('content')
<div>
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <!-- Display Events -->
            <div class="panel panel-default">
                <div class="panel-heading">Events List</div>

                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <th>Event Title</th>
                            <th>Event Description</th>
                            <th>Event Date</th>
                            <th>Event Image</th>
                        </thead>
                        <tbody>
                            @foreach ($tasks as $task)
                                <tr>
                                    <td>{{ $task->title }}</td>
                                    <td>{{ $task->description }}</td>
                                    <td>{{ $task->date ? $task->date->format('Y-m-d H:i') : 'N/A' }}</td>
                                    <td>
                                        @if ($task->imageurl)
                                            <img src="{{ asset($task->imageurl) }}" alt="Event Image" style="max-width: 100px; max-height: 100px;">
                                        @else
                                            No Image
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
