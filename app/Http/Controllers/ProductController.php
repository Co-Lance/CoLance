<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $listproducts = \App\Models\Product::all();
        return view('product.index',compact('listproducts'));
    }
    public function addProduct()
    {
        $offers = \App\Models\Offre::all(); // Retrieve all available offers
        return view('product.addProduct', ['offers' => $offers]);
    }
    public function storeProduct(ProductRequest $request)
    {
        // Validation passed, create and store the product
        $product = Product::create($request->validated());
        if ($request->has('offer_id')) {
            $offer = \App\Models\Offre::find($request->input('offer_id'));
            if ($offer) {
                $product->offre()->associate($offer);
                $product->save();
            }
        }
        
        return redirect()->route('products.index')->with('success', 'Product added successfully!');
    }

    public function delete($id)
{
    $product = Product::find($id);

    if (!$product) {
        return response()->json(['message' => 'Product not found'], 404);
    }

    $product->delete();

    // Redirect back or to a desired page after deletion
    return redirect()->back()->with('success', 'Product deleted successfully');
}
    public function edit($id)
{
    $product = Product::find($id);

    if (!$product) {
        return response()->json(['message' => 'Product not found'], 404);
    }

    // You can load a view to edit the product and pass the product data to the view
    return view('product.edit')->with('product', $product);
}
public function update(Request $request, $id)
{
    // Find the product by its ID
    $product = Product::findOrFail($id);

    // Update the product with the new data
    $product->update([
        'name' => $request->input('name'),
        'image' => $request->input('image'),
        'user_full_name' => $request->input('user_full_name'),
        'quantity' => $request->input('quantity'),
        'description' => $request->input('description'),
    ]);

    // Redirect to the product details page or any other appropriate route
    return redirect()->route('products.index')->with('success', 'Product added successfully!');
}
}
