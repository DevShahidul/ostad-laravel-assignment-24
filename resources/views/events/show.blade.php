@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $event->title }}</h1>
        <p><strong>Date:</strong> {{ $event->date }}</p>
        <p><strong>Time:</strong> {{ $event->time }}</p>
        <p><strong>Location:</strong> {{ $event->location }}</p>
        <p><strong>Description:</strong> {{ $event->description }}</p>
        <a href="{{ route('events.edit', $event->id) }}" class="btn btn-primary">Edit Event</a>
        <form action="{{ route('events.destroy', $event->id) }}" method="POST" style="display: inline-block">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this event?')">Delete Event</button>
        </form>
        <a href="{{ route('events.index') }}" class="btn btn-secondary">Back to Event List</a>
    </div>
@endsection
