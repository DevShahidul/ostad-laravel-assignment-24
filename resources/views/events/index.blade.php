@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Event List</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Location</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($events as $event)
                    <tr>
                        <td>{{ $event->title }}</td>
                        <td>{{ $event->date }}</td>
                        <td>{{ $event->time }}</td>
                        <td>{{ $event->location }}</td>
                        <td>
                            <a href="{{ route('events.show', $event->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('events.edit', $event->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('events.destroy', $event->id) }}" method="POST" style="display: inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this event?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('events.create') }}" class="btn btn-success">Create Event</a>
    </div>
@endsection
