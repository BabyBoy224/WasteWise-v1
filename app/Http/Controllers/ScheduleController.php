<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barangay;
use App\Models\Schedule;


class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $page = ['title' => 'Schedules', 'parent' => 'schedules'];

        $barangays = Barangay::with('schedule')->paginate(12);


        return view('schedules.index', compact('page', 'barangays'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $page = ['title' => 'Add Schedule', 'parent' => 'schedules'];

        // Get barangays without a schedule yet
        $barangays = Barangay::doesntHave('schedule')->get();

        return view('schedules.create', compact('page', 'barangays'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'dayOfWeek' => 'required|string',
            'barangay_ids' => 'required|array|min:1',
            'barangay_ids.*' => 'exists:barangays,id',
            'lastVisited' => 'nullable|in:Yes,No',
        ]);

        $schedule = Schedule::create([
            'dayOfWeek' => $validated['dayOfWeek'],
            'lastVisited' => $validated['lastVisited'] === 'Yes',
        ]);

        $schedule->barangays()->attach($validated['barangay_ids']);

        return redirect()->route('schedules.index')
            ->with('success', 'Schedule created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
