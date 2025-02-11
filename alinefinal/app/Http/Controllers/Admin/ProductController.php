<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Order_detail;
use App\Models\Order;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }

    public function show(Product $product)
    {
        return view('admin.product.show', compact('product'));
    }

    public function create()
    {  
        $categories = Category::all();
        $brands = Brand::all();
        return view('admin.product.create',compact('brands','categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'brand_id' => 'required|max:255',
            'category_id' => 'required|max:255',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpg,jpeg,png',
        ]);

        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->brand_id = $request->input('brand_id');
        $product->category_id = $request->input('category_id');
        $product->price = $request->input('price');

        if ($request->hasFile('image')) {
            $product->image = $request->file('image')->store('img/products', 'public');
        }

        $product->save();

        return redirect()->route('admin.product.index')->with('success', 'Product created successfully.');
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('admin.product.edit', compact('product','categories','brands'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'brand_id' => 'required|max:255',
            'category_id' => 'required|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png',
        ]);

        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->brand_id = $request->input('brand_id');
        $product->category_id = $request->input('category_id');

        if ($request->hasFile('image')) {
            // Delete the old image file if it exists
            if ($product->image && Storage::disk('public')->exists($product->image)) {
                Storage::disk('public')->delete($product->image);
            }

            // Store the new image file
            $product->image = $request->file('image')->store('img/products', 'public');
        }

        $product->save();

        return redirect()->route('admin.product.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        if ($product->orderDetails()->exists()) {
            return redirect()->route('admin.product.index')->with('error', 'Product cannot be deleted because it is associated with an order.');
        }
        
     

        // Delete the image file if it exists
        if ($product->image && Storage::disk('public')->exists($product->image)) {
            Storage::disk('public')->delete($product->image);
        }
 
        $product->delete();
        return redirect()->route('admin.product.index')->with('success', 'Product deleted successfully.');
    }
}
