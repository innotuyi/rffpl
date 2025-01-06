<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

    class AdminBlogController extends Controller
{
    /**
     * Display a listing of the blogs.
     */
    public function index()
    {
        // Raw SQL query with JOIN to get the blogs and user names
        $blogs = DB::table('blogs')
            ->join('users', 'blogs.user_id', '=', 'users.id')
            ->select('blogs.id', 'blogs.title','blogs.content', 'blogs.created_at', 'users.name as user_name') // Selecting the necessary fields
            ->orderBy('blogs.created_at', 'desc') // Order by created_at or any other desired field
            ->paginate(10); // Paginate the results
    
        return view('admin.blogs.index', compact('blogs'));
    }
    
    /**
     * Show the form for creating a new blog.
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created blog in storage.
     */
    public function store(Request $request)
    {
        // if (!auth()->check()) {
        //     return redirect()->route('login')->with('error', 'You must be logged in to create a blog.');
        // }
    
        // Validate the form input
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Handle image upload if provided
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blogs', 'public');
        }
    
        // Create a new blog
        Blog::create([
            'title' => $validated['title'],
            'content' => $validated['content'],
            'image' => $imagePath,
            'user_id' => 1, // Ensure the user is authenticated
        ]);
    
        return redirect()->route('admin.blogs.index')->with('success', 'Blog created successfully.');
    }
    
    /**
     * Show the form for editing the specified blog.
     */
    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified blog in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        // Validate the form data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Update blog fields
        $blog->title = $validated['title'];
        $blog->content = $validated['content'];

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            if ($blog->image && Storage::exists('public/' . $blog->image)) {
                Storage::delete('public/' . $blog->image); // Delete the old image
            }
            $blog->image = $request->file('image')->store('blogs', 'public');
        }

        $blog->save(); // Save changes

        return redirect()->route('admin.blogs.index')->with('success', 'Blog updated successfully.');
    }

    /**
     * Remove the specified blog from storage.
     */
    public function destroy(Blog $blog)
    {
        // Delete the blog's image if it exists
        if ($blog->image && Storage::exists('public/' . $blog->image)) {
            Storage::delete('public/' . $blog->image);
        }

        // Delete the blog
        $blog->delete();

        return redirect()->route('admin.blogs.index')->with('success', 'Blog deleted successfully.');
    }
}

