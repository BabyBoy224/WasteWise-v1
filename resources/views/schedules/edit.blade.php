@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Edit Schedule</h1>

    <form action="{{ route('schedules.update', $schedule->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="barangay" class="form-label">Barangay</label>
            <input type="text" class="form-control" value="{{ $schedule->barangay->name }}" disabled>
        </div>

        <div class="mb-3">
            <label for="dayOfWeek" class="form-label">Day of Week</label>
            <select name="dayOfWeek" class="form-control" required>
                @foreach (['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'] as $day)
                    <option value="{{ $day }}" {{ $schedule->dayOfWeek === $day ? 'selected' : '' }}>
                        {{ $day }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="lastVisited" class="form-label">Last Visited</label>
            <select name="lastVisited" class="form-control">
                <option value="No" {{ !$schedule->lastVisited ? 'selected' : '' }}>No</option>
                <option value="Yes" {{ $schedule->lastVisited ? 'selected' : '' }}>Yes</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Save Changes</button>
        <a href="{{ route('schedules.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
