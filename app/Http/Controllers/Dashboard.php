<?php

namespace App\Http\Controllers;

use App\Models\Attendances;
use App\Models\Leaves;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Controller
{
   // Controller
   public function index() {
    $user = Auth::user();

    // Fetch the clock status
    $clockStatus = User::select('attendances')
        ->where('id', $user->id)
        ->value('attendances');

    // Fetch the latest clock-in record
   // Fetch all leaves with status equal to 2
   $count = Leaves::where('status', 2)->count();
   $counts = Leaves::where('status', 0)->count();

    $clockTime = Attendances::where('user_id', $user->id)
        ->latest()
        ->first();
//dd($leaves);
    // Determine if the user is clocked in or not
    $isClockedIn = $clockStatus == 1;

    // Define the total required time
    $totalHours = 9; // Total time in hours
    $totalMinutes = 0; // Total time in minutes

    // Initialize variables for time calculations
    $remainingHours = 0;
    $remainingMinutes = 0;

    if ($isClockedIn && $clockTime) {
        // If clocked in, display the total time
        $remainingHours = $totalHours;
        $remainingMinutes = $totalMinutes;
    } else {
        // If not clocked in, calculate the remaining time
        if ($clockTime) {
            $currentTime = Carbon::now();
            $clockInTime = Carbon::parse($clockTime->created_at);

            // Calculate the elapsed time
            $elapsedTime = $currentTime->diff($clockInTime);
            $elapsedHours = $elapsedTime->h;
            $elapsedMinutes = $elapsedTime->i;

            // Calculate the remaining time
            $totalMinutes = $totalHours * 60;
            $elapsedMinutesTotal = ($elapsedHours * 60) + $elapsedMinutes;
            $remainingMinutes = $totalMinutes - $elapsedMinutesTotal;
            $remainingHours = intdiv($remainingMinutes, 60);
            $remainingMinutes = $remainingMinutes % 60;
        } else {
            // Handle the case where there's no clock-in record
            $remainingHours = $totalHours;
            $remainingMinutes = $totalMinutes;
        }
     }

     // Define current time for display purposes
    $currentTime = Carbon::now();
    $currentHours = $currentTime->format('H');
    $currentMinutes = $currentTime->format('i');

    return view('admin-dashboard', [
        'user' => $user,
        'isClockedIn' => $isClockedIn,
        'clockTime' => $clockTime,
        'remainingHours' => $remainingHours,
        'remainingMinutes' => $remainingMinutes,
        'currentHours' => $currentHours,
        'currentMinutes' => $currentMinutes,
        'leaves' => $count,
        'counts' => $counts,
    ]);
}



   public function storeAttendance(Request $request)
   {
        $user = Auth::user();

        $user->attendances = !$user->attendances;

        $user->save();

       // Create or update the attendance record
       Attendances::create([
           'user_id' => Auth::id(),
           'time' => now(), // or $request->time if you're passing a specific time
           'attendances_type' => $user->attendances,
       ]);

       return redirect()->back()->with('success', 'Attendance recorded successfully.');
   }
}
