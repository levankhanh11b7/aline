<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    
    public function blog()
    {
        $blogs=Blog::all();

        
        return view('client.blog', compact('blogs'));
    }
        
    public function blogdetail($id)
    {
        $blogdetails=Blog::findOrFail($id);

        
        return view('client.blogdetail', compact('blogdetails'));
    }

}
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          