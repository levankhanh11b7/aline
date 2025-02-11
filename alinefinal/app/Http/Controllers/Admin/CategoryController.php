<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories|max:255',
        ]);

        Category::create([
            'name' => $request->name,
           
        ]);

        return redirect()->route('admin.category.index')->with('success', 'Category added successfully!');
    }

    public function edit($id)
{
    $category = Category::findOrFail($id); // Tìm category theo ID
    return view('admin.category.edit', compact('category')); // Truyền category vào view
}


public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|unique:categories,name,' . $id . '|max:255', // Kiểm tra unique bỏ qua ID hiện tại
    ]);

    $category = Category::findOrFail($id); // Tìm category theo ID
    $category->update([
        'name' => $request->name,
    ]);

    return redirect()->route('admin.category.index')->with('success', 'Category updated successfully!');
}

public function destroy($id)
{
    $category = Category::findOrFail($id); // Tìm category theo ID
    $category->delete(); // Xóa category

    return redirect()->route('admin.category.index')->with('success', 'Category deleted successfully!');
}


}
