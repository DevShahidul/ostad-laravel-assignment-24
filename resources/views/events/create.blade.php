@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Event</h1>
        <form method="POST" action="{{ route('events.store') }}">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description">{{ old('description') }}</textarea>
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" class="form-control" id="date" name="date" value="{{ old('date') }}">
            </div>
            <div class="form-group">
                <label for="time">Time</label>
                <input type="time" class="form-control" id="time" name="time" value="{{ old('time') }}">
            </div>
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" class="form-control" id="location" name="location" value="{{ old('location') }}">
            </div>
            <button type="submit" class="btn btn-primary">Create Event</button>
        </form>
    </div>
@endsection
