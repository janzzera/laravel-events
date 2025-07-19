@extends('layouts.app')

@section('content')
<div>
    <!-- The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk -->

    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <!-- <div class="panel panel-default">
                <div class="panel-heading">Search Events</div>

                <div class="panel-body">
                    <form method="GET" class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Search</label>
                            <div class="col-sm-6">
                                <input type="text" name="query" class="form-control" placeholder="Search by title..." value="<?= htmlspecialchars($_GET['query'] ?? '') ?>">
                            </div>
                            <div class="col-sm-3">
                                <button type="submit" class="btn btn-default">
                                    <i class="glyphicon glyphicon-search"></i> Search
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div> -->

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
                            <?php
                            // $start = microtime(true);

                            // $query = $_GET['query'] ?? '';

                            // if (!empty($query)) {
                            //     $search = "%" . $query . "%";
                            //     $stmt = $pdo->prepare("SELECT * FROM events WHERE title LIKE ? ORDER BY date DESC");
                            //     $stmt->execute([$search]);
                            // } else {
                            //     $stmt = $pdo->query("SELECT * FROM events ORDER BY date DESC");
                            // }

                            // $events = $stmt->fetchAll();

                            // if ($events) {
                            //     foreach ($events as $event) {
                            //         echo "<tr><td>" . htmlspecialchars($event['title']) . "</td><td>" . htmlspecialchars($event['date']) . "</td></tr>";
                            //     }
                            // } else {
                            //     echo "<tr><td colspan='2'>No events found.</td></tr>";
                            // }

                            // $elapsed = microtime(true) - $start;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Response Time -->
            <div class="panel panel-default">
                <div class="panel-body">
                    Response time: <?= number_format($elapsed * 1000, 2) ?> milliseconds.
                </div>
            </div>
        </div>
    </div>
</div>
