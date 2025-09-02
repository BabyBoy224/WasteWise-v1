@extends('layouts.master')

<style>
    .sticky-pagination {
        position: fixed;
        bottom: 6%;
        left: 0;
        width: 100%;
        background: #fff;
        padding: 10px 0;
        box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
        display: flex;
        justify-content: center;
        z-index: 1030;
    }
</style>

@section('content')
    <div class="container-fluid">

        {{-- Success Message --}}
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="d-flex justify-content-between mb-3 align-items-center">
            <h1>{{ $page['title'] }}</h1>
            <a href="{{ route('schedules.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Add Schedule
            </a>
        </div>

        {{-- Search Form --}}
        <form method="GET" action="#" class="mb-3">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search Barangays..."
                    value="{{ request('search') }}">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="submit">Search</button>
                </span>
            </div>
        </form>

        @if ($barangays->count() > 0)
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Barangay</th>
                            <th>Day of Week</th>
                            <th>Last Visited</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($barangays as $barangay)
                            <tr>
                                <td>{{ $barangay->name }}</td>
                                @if ($barangay->schedule)
                                    <td>{{ $barangay->schedule->dayOfWeek }}</td>
                                    <td>{{ $barangay->schedule->lastVisited ? \Carbon\Carbon::parse($barangay->schedule->lastVisited)->format('Y-m-d') : '—' }}
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('schedules.edit', $barangay->schedule->id) }}"
                                            class="btn btn-sm btn-warning">Edit</a>
                                        <form action="{{ route('schedules.destroy', $barangay->schedule->id) }}" method="POST"
                                            class="d-inline"
                                            onsubmit="return confirm('Are you sure you want to delete this schedule?');">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                @else
                                    <td colspan="3" class="text-center text-muted">No Schedules Set</td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            {{-- Sticky Pagination --}}
            <div class="sticky-pagination">
                {{ $barangays->links('pagination::bootstrap-4') }}
            </div>
        @else
            <div class="alert alert-warning">No barangays found.</div>
        @endif

    </div>
@endsection
