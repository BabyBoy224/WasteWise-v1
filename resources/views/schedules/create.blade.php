@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between mb-3">
        <h1>{{ $page['title'] }}</h1>
        <a href="{{ route('schedules.index') }}" class="btn btn-secondary">Back</a>
    </div>

    <form action="{{ route('schedules.store') }}" method="POST">
        @csrf

        <!-- Day of Week -->
        <div class="mb-3">
            <label for="dayOfWeek" class="form-label">Day of Week</label>
            <select name="dayOfWeek" id="dayOfWeek" class="form-control" required>
                <option value="">-- Select Day --</option>
                <option value="Monday">Monday</option>
                <option value="Tuesday">Tuesday</option>
                <option value="Wednesday">Wednesday</option>
                <option value="Thursday">Thursday</option>
                <option value="Friday">Friday</option>
                <option value="Saturday">Saturday</option>
                <option value="Sunday">Sunday</option>
            </select>
        </div>

        <!-- Barangay Checklist -->
        <div class="mb-3">
            <label class="form-label">Barangays</label>
            <div class="border rounded p-2" style="max-height: 250px; overflow-y: auto;">
                @foreach ($barangays as $barangay)
                    <div class="form-check">
                        <input 
                            class="form-check-input barangay-checkbox" 
                            type="checkbox" 
                            name="barangay_ids[]" 
                            value="{{ $barangay->id }}" 
                            data-name="{{ $barangay->name }}"
                            id="barangay_{{ $barangay->id }}">
                        <label class="form-check-label" for="barangay_{{ $barangay->id }}">
                            {{ $barangay->name }}
                        </label>
                    </div>
                @endforeach
            </div>
            <small class="text-muted">Select one or more barangays for this schedule.</small>
        </div>

        <!-- Selected Barangays Preview -->
        <div class="mb-3">
            <label class="form-label">Selected Barangays:</label>
            <ul id="selectedBarangays" class="list-group"></ul>
        </div>

        <!-- Visited Last Week -->
        <div class="mb-3">
            <label class="form-label">Visited Last Week?</label>
            <div>
                <div class="form-check form-check-inline">
                    <input 
                        class="form-check-input" 
                        type="radio" 
                        name="lastVisited" 
                        id="lastVisitedYes" 
                        value="Yes">
                    <label class="form-check-label" for="lastVisitedYes">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input 
                        class="form-check-input" 
                        type="radio" 
                        name="lastVisited" 
                        id="lastVisitedNo" 
                        value="No">
                    <label class="form-check-label" for="lastVisitedNo">No</label>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-success">Save Schedule</button>
    </form>
</div>

{{-- JavaScript to update selected barangays list --}}
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const checkboxes = document.querySelectorAll(".barangay-checkbox");
        const selectedList = document.getElementById("selectedBarangays");

        checkboxes.forEach(checkbox => {
            checkbox.addEventListener("change", function () {
                updateSelectedList();
            });
        });

        function updateSelectedList() {
            selectedList.innerHTML = "";
            checkboxes.forEach(cb => {
                if (cb.checked) {
                    const li = document.createElement("li");
                    li.classList.add("list-group-item");
                    li.textContent = cb.getAttribute("data-name");
                    selectedList.appendChild(li);
                }
            });

            if (selectedList.innerHTML === "") {
                const li = document.createElement("li");
                li.classList.add("list-group-item", "text-muted");
                li.textContent = "No barangays selected.";
                selectedList.appendChild(li);
            }
        }

        // initialize with empty state
        updateSelectedList();
    });
</script>
@endsection
