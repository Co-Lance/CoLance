<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreateCategoryRequest;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories =  \App\Models\Category::all();
        return view('categories.index', compact('categories'));
    }
    
    public function create()
{
    return view('categories.create');
}

public function storeCategory(CreateCategoryRequest $request)
{
    // Validation passed, create and store the product
    $category = Category::create($request->validated());
    return redirect()->route('categories.index')->with('success', 'Category added successfully!');
}

public function delete($id)
{
    $category = Category::find($id);

    if (!$category) {
        return response()->json(['message' => 'Category not found'], 404);
    }

    $category->delete();

    // Redirect back or to a desired page after deletion
    return redirect()->back()->with('success', 'Category deleted successfully');
}

public function edit($id)
{
    $category = Category::find($id);

    if (!$category) {
        return response()->json(['message' => 'Category not found'], 404);
    }

    // You can load a view to edit the product and pass the product data to the view
    return view('categories.edit')->with('category', $category);
}
public function update(Request $request, $id)
{
    // Find the product by its ID
    $category = Category::findOrFail($id);

    // Update the product with the new data
    $category->update([
        'name' => $request->input('name'),
        'description' => $request->input('description'),
        'color' => $request->input('color'),
    ]);

    // Redirect to the product details page or any other appropriate route
    return redirect()->route('categories.index')->with('success', 'category added successfully!');
}
}
