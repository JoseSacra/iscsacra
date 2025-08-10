<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skills;

class SkillsController extends Controller
{
    /**
     * Display the skills view.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $skills = Skills::all();
        return view('profile.skills', compact('skills'));
    }
    /**
     * Store a newly created skill in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createSkill(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'percentage' => 'required|integer|min:0|max:100',
            'icon' => 'nullable|string|max:255',
            'category' => 'nullable|string|max:255',
        ]);

        Skills::create($request->all());

        return redirect()->route('skills')->with('success', 'Skill added successfully.');
    }

    /**
     * Update the specified skill in storage.
     *
     * @param  int  $id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function editSkill($id, Request $request)
    {
        $skill = Skills::find($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'percentage' => 'required|integer|min:0|max:100',
            'icon' => 'nullable|string|max:255',
            'category' => 'nullable|string|max:255',
        ]);
        $skill->update($request->all());

        return redirect()->route('skills')->with('success', 'Skill updated successfully.');
    }

    /**
     * Remove the specified skill from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroySkill($id)
    {
        $skill = Skills::find($id);
        $skill->delete();

        return redirect()->route('skills')->with('success', 'Skill deleted successfully.');
    }   
}
