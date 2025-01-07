<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Resource;
use Illuminate\Http\Request;

class AdminResourceController extends Controller
{
      // Display all resources
      public function index()
      {
          $resources = Resource::all();
          return view('admin.resources.index', compact('resources'));
      }
  
      // Show form to create a new resource
      public function create()
      {
          return view('admin.resources.create');
      }
  
      // Store a new resource
      public function store(Request $request)
      {
          $validated = $request->validate([
              'type' => 'required|in:download,video,link',
              'title' => 'required|string|max:255',
              'description' => 'nullable|string',
              'file_path' => 'nullable|file|mimes:pdf,mp4|max:20480', // PDF for downloads, MP4 for videos
              'url' => 'nullable|url',
          ]);
  
          // Handle file upload
          if ($request->hasFile('file_path')) {
              $validated['file_path'] = $request->file('file_path')->store('resources');
          }
  
          Resource::create($validated);
  
          return redirect()->route('admin.resources.index')->with('success', 'Resource added successfully!');
      }
  
      // Show form to edit a resource
      public function edit(Resource $resource)
      {
          return view('admin.resources.edit', compact('resource'));
      }
  
      // Update a resource
      public function update(Request $request, Resource $resource)
      {
          $validated = $request->validate([
              'type' => 'required|in:download,video,link',
              'title' => 'required|string|max:255',
              'description' => 'nullable|string',
              'file_path' => 'nullable|file|mimes:pdf,mp4|max:20480',
              'url' => 'nullable|url',
          ]);
  
          if ($request->hasFile('file_path')) {
              $validated['file_path'] = $request->file('file_path')->store('resources');
          }
  
          $resource->update($validated);
  
          return redirect()->route('admin.resources.index')->with('success', 'Resource updated successfully!');
      }
  
      // Delete a resource
      public function destroy(Resource $resource)
      {
          $resource->delete();
          return redirect()->route('admin.resources.index')->with('success', 'Resource deleted successfully!');
      }
}
