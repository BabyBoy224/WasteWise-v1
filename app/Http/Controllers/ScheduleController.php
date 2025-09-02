<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barangay;
use App\Models\Schedule;
use Carbon\Carbon;


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

        // If lastVisited is Yes, compute the date of the last occurrence of the given dayOfWeek
        $lastVisitedDate = null;
        if ($validated['lastVisited'] === 'Yes') {
            $dayOfWeek = ucfirst(strtolower($validated['dayOfWeek'])); // Normalize (e.g. Monday)
            $lastVisitedDate = Carbon::now()->previous($dayOfWeek)->toDateString();
        }

        foreach ($validated['barangay_ids'] as $barangayId) {
            Schedule::create([
                'barangayId' => $barangayId,
                'dayOfWeek' => $validated['dayOfWeek'],
                'lastVisited' => $lastVisitedDate,
            ]);
        }

        return redirect()->route('schedules.index')
            ->with('success', 'Schedules created successfully!');
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
    public function edit($id)
    {
        $schedule = Schedule::findOrFail($id);
        $barangays = Barangay::all();

        return view('schedules.edit', compact('schedule', 'barangays'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'dayOfWeek' => 'required|string',
            'lastVisited' => 'nullable|in:Yes,No',
        ]);

        $schedule = Schedule::findOrFail($id);

        // Handle lastVisited as date
        $lastVisited = null;
        if ($validated['lastVisited'] === 'Yes') {
            $lastVisited = \Carbon\Carbon::parse('last ' . $validated['dayOfWeek'])->toDateString();
        }

        $schedule->update([
            'dayOfWeek' => $validated['dayOfWeek'],
            'lastVisited' => $lastVisited,
        ]);

        return redirect()->route('schedules.index')
            ->with('success', 'Schedule updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $schedule = Schedule::findOrFail($id);
        $schedule->delete();

        return redirect()->route('schedules.index')
            ->with('success', 'Schedule deleted successfully.');
    }

}
