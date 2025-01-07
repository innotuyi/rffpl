<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\Request;

class AdminProgramController extends Controller
{
    // Display the list of programs
    public function index()
    {
        $programs = Program::latest()->paginate(10);
        return view('admin.programs.index', compact('programs'));
    }

    // Display the list of programs
    public function programs()
    {
        $programs = Program::latest()->paginate(10);
        return view('programs', compact('programs'));
    }




    // Show the form to create a new program
    public function create()
    {
        return view('admin.programs.create');
    }

    // Store a newly created program in the database
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $iconPath = null;
        if ($request->hasFile('icon')) {
            $iconPath = $request->file('icon')->store('programs', 'public');
        }

        Program::create([
            'title' => $request->title,
            'description' => $request->description,
            'icon' => $iconPath,
        ]);

        return redirect()->route('admin.programs.index')->with('success', 'Program created successfully.');
    }

    // Show the form to edit a program
    public function edit(Program $program)
    {
        return view('admin.programs.edit', compact('program'));
    }

    // Update the program in the database
    public function update(Request $request, Program $program)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('icon')) {
            $iconPath = $request->file('icon')->store('programs', 'public');
            $program->icon = $iconPath;
        }

        $program->title = $request->title;
        $program->description = $request->description;
        $program->save();

        return redirect()->route('admin.programs.index')->with('success', 'Program updated successfully.');
    }

    // Delete a program
    public function destroy(Program $program)
    {
        $program->delete();
        return redirect()->route('admin.programs.index')->with('success', 'Program deleted successfully.');
    }
}
