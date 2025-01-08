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
        // Fetch blogs with their authors' names using a JOIN
        $blogs = DB::table('blogs')
            ->join('users', 'blogs.user_id', '=', 'users.id')
            ->select('blogs.id', 'blogs.title', 'blogs.image', 'blogs.content', 'blogs.created_at', 'users.name as user_name')
            ->orderBy('blogs.created_at', 'desc')
            ->paginate(10);

        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Display blogs on the public blog page.
     */
    public function blog()
    {
        $blogs = DB::table('blogs')
            ->join('users', 'blogs.user_id', '=', 'users.id')
            ->select('blogs.id', 'blogs.title', 'blogs.image', 'blogs.content', 'blogs.created_at', 'users.name as user_name')
            ->orderBy('blogs.created_at', 'desc')
            ->paginate(10);

        return view('blog', compact('blogs'));
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
        // Validate the form input
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle image upload if provided
        $imagePath = $request->hasFile('image') 
            ? $request->file('image')->store('blogs', 'public') 
            : null;

        // Create a new blog
        Blog::create([
            'title' => $validated['title'],
            'content' => $validated['content'],
            'image' => $imagePath,
            'user_id' => auth()->id(), // Use the authenticated user's ID
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog created successfully.');
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
        $blog->update([
            'title' => $validated['title'],
            'content' => $validated['content'],
        ]);

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            if (optional($blog)->image && Storage::exists('public/' . $blog->image)) {
                Storage::delete('public/' . $blog->image); // Delete the old image
            }
            $blog->update([
                'image' => $request->file('image')->store('blogs', 'public'),
            ]);
        }

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully.');
    }

    /**
     * Remove the specified blog from storage.
     */
    public function destroy(Blog $blog)
    {
        // Delete the blog's image if it exists
        if (optional($blog)->image && Storage::exists('public/' . $blog->image)) {
            Storage::delete('public/' . $blog->image);
        }

        // Delete the blog
        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully.');
    }
}
