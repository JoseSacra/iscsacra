<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;

class EducationController extends Controller
{
    public function index()
    {
        // Fetch all education records
        $educations = Education::all();
        // This method should return the education view
        return view('profile.education', compact('educations'));
    }

    public function createEducation(Request $request)
    {
        // This method should handle the creation of a new education record
        // Validate and save the education data here
        // Redirect back with a success message
        $school = new Education();

        $request->validate([
            'institution' => 'required|string|max:255',
            'degree' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'location' => 'required|string|max:255',
            'description' => 'nullable|string',
            'type'=>'nullable|string|max:255',
            'current_study' => 'boolean',
        ]);
        $school->fill([
            'institution' => $request->institution,
            'degree' => $request->degree,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'location' => $request->location,
            'description' => $request->description,
            'type' => $request->type,
            'current_study' => $request->has('current_study'), // Assuming this is a current study
        ])->save();

        return redirect()->route('education')->with('success', 'Education added successfully.');

    }

    public function editEducation($id, Request $request)
    {
        // This method should handle editing an existing education record
        // Validate and update the education data here
        // Redirect back with a success message
        $school2 = Education::find($id);
        if (!$school2) {
            return redirect()->route('education')->with('error', 'Education record not found.');
        }

        $request->validate([
            'institution' => 'required|string|max:255',
            'degree' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'location' => 'required|string|max:255',
            'description' => 'nullable|string',
            'type'=>'nullable|string|max:255',
            'current_study' => 'boolean',
        ]);

        $school2->fill([
            'institution' => $request->institution,
            'degree' => $request->degree,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'location' => $request->location,
            'description' => $request->description,
            'type' => $request->type,
            'current_study' => $request->has('current_study'), // Assuming this is a current study
        ])->save();

        // Redirect back to the education page with a success message
        return redirect()->route('education')->with('success', 'Education updated successfully.');
    }
}
