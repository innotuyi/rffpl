<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class AdminTeamController extends Controller
{
    // List all team members
    public function index()
    {
        $team = Team::all();
        return view('admin.team.index', compact('team'));
    }

    // Display team page
    public function team()
    {
        $team = Team::all();
        return view('team', compact('team'));
    }

    // Display about page with team data
    public function about()
    {
        $team = Team::all();
        return view('about', compact('team'));
    }

    // Show the form to add a new team member
    public function create()
    {
        return view('admin.team.create');
    }

    // Store a new team member
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'bio' => 'nullable|string',
            'photo' => 'nullable|image|max:2048',
            'contact_link' => 'nullable|url', // Improved validation for URLs
        ]);

        $data = $request->only(['name', 'role', 'bio', 'contact_link']);
        
        // Handle photo upload
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('uploads/team', 'public');
        }

        Team::create($data);
        return redirect()->route('admin.team.index')->with('success', 'Team member added successfully.');
    }

    // Show the form to edit a team member
    public function edit(Team $team)
    {
        return view('admin.team.edit', compact('team'));
    }

    // Update a team member
    public function update(Request $request, Team $team)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'bio' => 'nullable|string',
            'contact_link' => 'nullable|url', // Improved validation for URLs
            'photo' => 'nullable|image|max:2048',
        ]);

        $data = $request->only(['name', 'role', 'bio', 'contact_link']);
        
        // Handle photo upload
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('uploads/team', 'public');
        }

        $team->update($data);
        return redirect()->route('admin.team.index')->with('success', 'Team member updated successfully.');
    }

    // Delete a team member
    public function destroy(Team $team)
    {
        $team->delete();
        return redirect()->route('admin.team.index')->with('success', 'Team member deleted successfully.');
    }
}
