<?php

namespace App\Http\Controllers;

use App\Http\Requests\InventoryRequest;
use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index()
    {
        $listinventories = Inventory::all();
        return view('inventory.index', compact('listinventories'));
    }

    public function create()
    {
        return view('inventory.create');
    }

    public function store(InventoryRequest $request)
    {
        $data = $request->validated();

        // Create an Inventory model using the validated data
        Inventory::create($data);

        return redirect()->route('inventory.index')->with('success', 'Inventory item added successfully!');
    }

    public function destroy($id)
    {
        $inventory = Inventory::findOrFail($id);
        if ($inventory->delete()) {
            return redirect()->route('inventory.index')->with('success', 'Inventory item deleted successfully!');
        }
        return redirect()->route('inventory.index')->with('fail', 'Inventory item failed to delete!');
    }

    public function edit($id)
    {
        $inventory = Inventory::findOrFail($id);
        return view('inventory.edit', compact('inventory'));
    }

    public function show($id)
    {
        $inventory = Inventory::findOrFail($id);
        return view('inventory.showinventory', compact('inventory'));
    }

    public function update(Request $request, $id)
    {
        $inventory = Inventory::findOrFail($id);

        $validatedData = $request->validate([
            'InventoryName' => 'required',
            'InventoryDescription' => 'required',
            'InventoryLocation' => 'required',
            'InventoryArchiveDate' => 'required',
            'InventoryCategory' => 'required',
            'InventorySupplier' => 'required',
        ]);

        // Update the inventory item with the new data
        $inventory->update($validatedData);

        // Redirect to the inventory item details page or any other appropriate route
        return redirect()->route('inventory.index')->with('success', 'Inventory item updated successfully!');
    }

}