<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends AdminController
{
    /**
     * Display the experience view.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $jobs = experience::all();
        return view('profile.experience', compact('jobs'));
    }

    /**
     * Store a newly created experience in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createExperience(Request $request)
    {

        // Create a new instance of the Experience model
        $job = new Experience();
        
        // Validate the request data
        $request->validate([
            'position' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'initialdate' => 'required|date',
            'finaldate' => 'nullable|date|after_or_equal:start_date',
            'description' => 'nullable|string',
            'status' => 'boolean',
        ]);

        // Create a new experience record
        $job->fill([
            'company' => $request->company,
            'job_title' => $request->position,
            'description' => $request->description,
            'start_date' => $request->initialdate,
            'end_date' => $request->finaldate,
            'location' => $request->location,
            'current_job' => $request->has('status') ? true : false, // Assuming this is a current job
        ])->save();

        // Redirect back to the experience page with a success message
        return redirect()->route('experience')->with('success', 'Experience added successfully.');
    }

    public function editExperience($id, Request $request)
    {
        // Find the experience by ID
        $job = Experience::find($id);
        
        if (!$job) {
            return redirect()->back()->with('error', 'Experience not found.');
        }

        // Validate the request data
        $request->validate([
            'position' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'initialdate' => 'required|date',
            'finaldate' => 'nullable|date|after_or_equal:start_date',
            'description' => 'nullable|string',
            'status' => 'boolean',
        ]);

        // Update the experience record
        $job->fill([
            'company' => $request->company,
            'job_title' => $request->position,
            'description' => $request->description,
            'start_date' => $request->initialdate,
            'end_date' => $request->finaldate,
            'location' => $request->location,
            'current_job' => $request->has('startus') ? true : false,
        ])->save();
        
        // Redirect back to the experience page with a success message
        return redirect()->route('experience')->with('success', 'Experience updated successfully.');
    }

    public function destroyExperience($id)
    {
        // Find the experience by ID
        $job = Experience::find($id);
        
        if (!$job) {
            return redirect()->back()->with('error', 'Experience not found.');
        }

        // Delete the experience record
        $job->delete();

        // Redirect back to the experience page with a success message
        return redirect()->route('experience')->with('success', 'Experience deleted successfully.');
    }
}
