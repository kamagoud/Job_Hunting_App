<?php

namespace App\Http\Controllers\hr;

use App\Http\Controllers\Controller;
use App\Models\Designations;
use Illuminate\Http\Request;

class Designation extends Controller
{


    public function index(){
        $designation = Designations::all();
         return view('dashboard.hr.designation',['designations' =>$designation]);
    }
    public function storedesignations(Request $request)
    {
        $request->validate([
            'designation_name' => 'required',
        ]);

        Designations::create([
            'designation_name' => $request->designation_name,
        ]);

        return redirect()->back()->with('success', 'Designation added successfully.');
    }

    public function update(Request $request, $id)
    {
        //dd($request);
        // Validate the incoming request data
        $request->validate([
            'designation_name' => 'required|string|max:255',
        ]);

        try {
            // Find the designation by ID
            $designation = Designations::findOrFail($id);

            // Update the designation name
            $designation->designation_name = $request->designation_name;
            $designation->save();

            // Return a JSON response indicating success
            return response()->json(['message' => 'Designation updated successfully']);
        } catch (\Exception $e) {
            // Return a JSON response indicating failure
            return response()->json(['error' => 'Failed to update designation. ' . $e->getMessage()], 500);
        }
    }
    public function deletedesignation(Request $request)
    {
        $request->validate([
            'ids' => ['required', 'array'],
           
        ]);

        Designations::whereIn('id', $request->ids)->delete();
        return response()->json(['success' => 'designation_name deleted successfully.'], 200);
    }
}
