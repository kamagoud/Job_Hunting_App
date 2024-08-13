<?php

namespace App\Http\Controllers\hr;

use App\Http\Controllers\Controller;
use App\Models\Attendances;
use App\Models\User;
use Attribute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Attendance extends Controller
{
    public function index()
    {
        $currentMonth = now()->format('Y-m'); // Current month in 'YYYY-MM' format

        // Get the start and end dates for the current month
        $startOfMonth = now()->startOfMonth();
        $endOfMonth = now()->endOfMonth();

        // Fetch all attendances within the current month with related user data
        $attendances = Attendances::with('user')
            ->whereBetween('created_at', [$startOfMonth, $endOfMonth])
            ->get()
            ->groupBy('user_id'); // Group by user ID for easier access

        // Generate all dates for the current month
        $dates = [];
        $date = $startOfMonth;
        while ($date->format('Y-m') === $currentMonth) {
            $dates[] = $date->format('Y-m-d');
            $date->addDay();
        }

        // Pass both the attendances and dates to the view
        return view('dashboard.hr.attendance', [
            'attendances' => $attendances,
            'dates' => $dates,
        ]);
    }

    // routes/web.php


// app/Http/Controllers/AttendanceController.php
public function getAttendanceInfo(Request $request)
{
    // Validate input
    $request->validate([
        'user_id' => 'required|integer|exists:users,id',
        'date' => 'required|date'
    ]);

    $userId = $request->input('user_id');
    $date = $request->input('date');

    // Fetch attendance data for the given user and date
    $attendances = Attendances::where('user_id', $userId)
                             ->whereDate('time', $date)
                             ->orderBy('time') // Ensure the order of activities is correct
                             ->get();

    if ($attendances->isEmpty()) {
        return response()->json(['error' => 'No data found'], 404);
    }

    // Initialize punch in and punch out times
    $punchIn = $attendances->where('attendances_type', 0)->first();
    $punchOut = $attendances->where('attendances_type', 1)->last();

    // Map the attendances to a format suitable for the activity list
    $activityList = $attendances->map(function ($attendance) {
        return [
            'type' => $attendance->attendances_type == 0 ? 'Punch In' : 'Punch Out',
            'time' => $attendance->created_at->format('h:i A')
        ];
    });

    return response()->json([
        'date' => $date,
        'punch_in' => $punchIn ? $punchIn->created_at->format('D, dS M Y h:i A') : 'Punch-in time not recorded',
        'punch_out' => $punchOut ? $punchOut->created_at->format('D, dS M Y h:i A') : 'Punch-out time not recorded',
        'activities' => $activityList
    ]);
}



}
