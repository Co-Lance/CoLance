<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ReclamationRequest;
use App\Models\Reclamation;
use App\Models\Product;

class ReclamationController extends Controller
{
    public function index()
    {
        $listReclamation = \App\Models\Reclamation::all();
        return view('reclamation.index',compact('listReclamation'));
    }
    public function addReclamation()
    {
        $products = Product::all();

        return view('reclamation.addReclamation', ['products' => $products]);
    }
    public function storeReclamation(ReclamationRequest $request)
    {
        Reclamation::create($request->validated());
        return redirect()->route('reclamation.index')->with('success', 'Reclamation added successfully!');
    }

    public function delete($id)
{
    $reclamation = Reclamation::find($id);

    if (!$reclamation) {
        return response()->json(['message' => 'Reclamation not found'], 404);
    }

    $reclamation->delete();

    return redirect()->back()->with('success', 'Reclamation deleted successfully');
}
    public function edit($id)
{
    $reclamation = Reclamation::find($id);

    if (!$reclamation) {
        return response()->json(['message' => 'Reclamation not found'], 404);
    }

    return view('reclamation.edit')->with('reclamation', $reclamation);
}
public function update(Request $request, $id)
{
    $reclamation = Reclamation::findOrFail($id);

    $reclamation->update([
        'title' => $request->input('title'),
        'description' => $request->input('description'),
        'user' => $request->input('user'),
        'type' => $request->input('type'),
        'contact' => $request->input('contact'),
    ]);

    return redirect()->route('reclamation.index')->with('success', 'reclamtion updated successfully!');
}
}
