<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Blog;

class IndexController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->take(3)->get();
        $products = Product::orderBy('created_at', 'desc')->take(4)->get();
        
//         $new_arrivals_pr = Product::take(8)->get(); // Lấy 4 sản phẩm q
//         // Hoặc
    
// // Lấy sản phẩm từ 7 đến 12 (Hot New)
//          $hot_salle_pr = Product::skip(8)->take(4)->get();
        
        return view('client.index', compact('products','blogs'));
    }
}
