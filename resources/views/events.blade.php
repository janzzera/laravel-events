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

            <div class="container my-4">

                <div class="row g-4 col-xl">
                    @foreach ($events as $event)
                        <div class="col-7 col-sm-6">
                            <div class="card h-100 shadow-sm">
                                @if ($event->imageurl)
                                    <img src="{{ asset($event->imageurl) }}" class="card-img-top" style="height: 200px; width:300; object-fit: cover;" alt="Event Image">
                                @else
                                    <div class="bg-light d-flex align-items-center justify-content-center" style="height: 200px;">
                                        <span class="text-muted">No Image</span>
                                    </div>
                                @endif
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">{{ $event->title }}</h5>
                                    <p class="card-text text-muted">{{ $event->description }}</p>
                                    <p class="card-text mt-auto">
                                        <small class="text-muted">{{ \Carbon\Carbon::parse($event->date)->format('Y-m-d H:i') }}</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
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