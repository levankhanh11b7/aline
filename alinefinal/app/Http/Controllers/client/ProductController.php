<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;

class ProductController extends Controller
{
    public function shop()
    {
        $products=Product::all();
        $brands = Brand::all();
        $categories = Category::all();
       
        return view('client.shop',compact('products','brands','categories'));
    }
    public function shopbr($id)
    { $categories = Category::all();
        $products = Product::where('brand_id', $id)->get();
        $brands = Brand::all();
       
        return view('client.shop',compact('products','brands','categories'));
    }

    public function shopdetail($id)
    {
        // Fetch the shop or product details from the database using the provided ID
        $shopDetail =  Product::find($id);


        $brand = Brand::find($shopDetail->brand_id);
        $brandName = $brand ? $brand->name : 'Unknown Brand';
    
        // Check if the shop or product exists
        if (!$shopDetail) {
            return redirect()->back()->with('error', 'Shop or product not found.');
        }
    
        // Return the view with the shop or product details using compact    
        return view('client.shopdetail', compact('shopDetail','brandName'));
    }
    

}