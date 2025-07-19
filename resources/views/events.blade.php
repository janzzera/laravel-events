@extends('layouts.app')

@section('content')
<div>
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">

            <!-- Search Bar -->
            <div class="panel panel-default">
                <div class="panel-heading">Search Events</div>

                <div class="panel-body">
                    <form method="GET" action="/" class="form-inline">
                        <div class="form-group">
                            <input type="text" name="query" class="form-control" placeholder="Search events..." value="{{ old('query', $query) }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Search</button>
                        <a href="/" class="btn btn-default">Reset</a>
                    </form>
                </div>
            </div>

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
                            @foreach ($events as $event)
                                <tr>
                                    <td>{{ $event->title }}</td>
                                    <td>{{ $event->description }} {{$event->imageurl}}</td>
                                    <td>{{ \Carbon\Carbon::parse($event->date)->format('Y-m-d H:i') }}</td>
                                    <td>
                                        @if ($event->imageurl)
                                            <img src="{{ asset($event->imageurl) }}" alt="Event Image" style="max-width: 100px; max-height: 100px;">
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

            <!-- Response Time -->
            <div class="panel panel-default">
                <div class="panel-body">
                    Response time: {{ number_format($elapsed * 1000, 2) }} ms
                </div>
            </div>
        </div>
    </div>
</div>
@endsection