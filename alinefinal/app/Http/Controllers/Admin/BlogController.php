<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    // Show the list of blogs
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blog.index', compact('blogs'));
    }

    // Show the form to create a new blog
    public function create()
    {
        return view('admin.blog.create');
    }

    // Store a new blog
    public function store(Request $request)
    {
         $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // Added size validation if needed
        ]);
        
        $blog = new Blog();
        $blog->title = $request->input('title');
        $blog->content = $request->input('content');
        $blog->author = $request->input('author');
        
        // Check if image is uploaded
        if ($request->hasFile('image')) {
            // Store image in 'public/img/products' directory
            $blog->image = $request->file('image')->store('img/blogs', 'public');
        }

        echo "<script>console.log(" . json_encode($blog->image) . ");</script>";
        
        $blog->save();
        
        // Redirect with success message
        return redirect()->route('admin.blogs.index')->with('success', 'Blog created successfully.');
    }
    // Show the form to edit a blog
    public function edit(Blog $blog)
    {
        return view('admin.blog.edit', compact('blog'));
    }

    // Update a blog
    public function update(Request $request, Blog $blog)
{
    // Validate the incoming request
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string',
        'author' => 'nullable|string|max:255',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // Added size validation
    ]);

    // Update existing Blog model instance
    $blog->title = $request->input('title');
    $blog->content = $request->input('content');
    $blog->author = $request->input('author');

    // Handle the image update if a new image is uploaded
    if ($request->hasFile('image')) {
        // Delete the old image file if it exists
        if ($blog->image && Storage::disk('public')->exists($blog->image)) {
            Storage::disk('public')->delete($blog->image);
        }

        // Store the new image file
        $blog->image = $request->file('image')->store('img/blogs', 'public');
    

        // Store the new image in 'public/img/blogs' directory
        
    }

    // Save the updated Blog
    $blog->save();

    // Redirect with success message
    return redirect()->route('admin.blogs.index')->with('success', 'Blog updated successfully.');
}



    // Delete a blog
    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()->route('admin.blogs.index')->with('success', 'Blog deleted successfully.');
    }

    // Show the details of a single blog
    public function show(Blog $blog)
    {
        return view('admin.blog.show', compact('blog'));
    }
}

