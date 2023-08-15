@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Event</h1>
        <form method="POST" action="{{ route('events.update', $event->id) }}">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $event->title) }}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description">{{ old('description', $event->description) }}</textarea>
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" class="form-control" id="date" name="date" value="{{ old('date', $event->date) }}">
            </div>
            <div class="form-group">
                <label for="time">Time</label>
                <input type="time" class="form-control" id="time" name="time" value="{{ old('time', $event->time) }}">
            </div>
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" class="form-control" id="location" name="location" value="{{ old('location', $event->location) }}">
            </div>
            <button type="submit" class="btn btn-primary">Update Event</button>
        </form>
    </div>
@endsection
