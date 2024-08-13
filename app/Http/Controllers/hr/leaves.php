<?php

namespace App\Http\Controllers\hr;

use App\Http\Controllers\Controller;
use App\Models\Leaves as ModelsLeaves;
use App\Models\LeavesType;
use App\Models\User;
use Illuminate\Http\Request;
use Livewire\Attributes\Validate;

class leaves extends Controller
{
    public function leaves(){
        // $type =ModelsLeaves::with('type');
        $types = LeavesType::select('id', 'leaves')->get();
        // $Leave = LeavesType::select('id', 'duration')->get();
        $users = User::select('id', 'name')->get(); // Retrieves a collection of users
        $user = $users->first(); // Get the first user from the collection

        // foreach ($types as $value) {
        //     $value['leaves'] = optional($value->type)->leaves;
        //     $value['duration'] = optional($value->type)->duration;
        // }
        return view('dashboard.hr.leaves',['types'=>$types , 'user'=>$user]);


    }

  public function appliedLeaves(){
        $leaves =ModelsLeaves::all();


        return view('dashboard.work.applied-leaves'
           ,['leaves' =>$leaves]);
    }



    public function dispaly(){
        $leaves =ModelsLeaves::all();



        return view('dashboard.hr.leave-table'
           ,['leaves' =>$leaves]);
    }
    public function storeLeaves(Request $request)
    {
        // $request->validate([
        //     'name' => 'required|string',
        //     'leave_type' => 'required|string',
        //     'duration' => 'required|string',
        //     'reason' => 'required|string|max:4500',
        //     'date' => 'required|date_format:Y-m-d',
        //     'file' => 'nullable|file|max:10240', // Example validation for file upload (max 10MB)
        // ]);
        if ($request->hasFile('file')) {
            $file = $request->file('file')->store('files'); // Adjust path as per your needs
        } else {
            $file = null;
        }

        $date = [
            'name' => $request->name,
            'leave_type' => $request->leave_type,
            'date' => date('Y-m-d', strtotime($request->date)), // Format date to YYYY-MM-DD
            // 'duration' => $request->duration,
            'reason' => $request->reason,
            'file' => $file,
        ];

        // Example: Saving to database using Eloquent
        ModelsLeaves::create($date);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Leave application submitted successfully.');
    }

    public function updateStatus(Request $request, $id)
    {
        $leave = ModelsLeaves::findOrFail($id);

        if ($request->action === 'Approved') {
            $leave->status = 2; // Approved status
        } elseif ($request->action === 'Rejected') {
            $leave->status = 1; // Rejected status
        }

        $leave->save();

        return response()->json(['message' => 'Leave status updated successfully', 'status' => $leave->status]);
    }
}
