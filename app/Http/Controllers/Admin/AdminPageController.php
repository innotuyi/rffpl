<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminPageController extends Controller
{
    // List all pages
    public function index()
    {
        $pages = Page::all();
        return view('admin.pages.index', compact('pages'));
    }

    // Show form to create a new page
    public function create()
    {
        return view('admin.pages.create');
    }

    // Store a new page
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // Automatically generate slug from the title
        $slug = Str::slug($request->title, '-');

        // Create a new page
        Page::create([
            'title' => $request->title,
            'content' => $request->content,
            'slug' => $slug,  // store generated slug
        ]);

        return redirect()->route('admin.pages.index')->with('success', 'Page created successfully.');
    }

    // Show form to edit a page
    public function edit(Page $page)
    {
        return view('admin.pages.edit', compact('page'));
    }

    // Update a page
    public function update(Request $request, Page $page)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // Automatically update slug if title changes
        $slug = Str::slug($request->title, '-');

        $page->update([
            'title' => $request->title,
            'content' => $request->content,
            'slug' => $slug,  // update slug
        ]);

        return redirect()->route('admin.pages.index')->with('success', 'Page updated successfully.');
    }

    // Delete a page
    public function destroy(Page $page)
    {
        $page->delete();
        return redirect()->route('admin.pages.index')->with('success', 'Page deleted successfully.');
    }
}
