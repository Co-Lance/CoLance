<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contract;

class ContractController extends Controller
{
    public function index()
    {
        $contracts = Contract::all();
        return view('contracts.index', compact('contracts'));
    }

    public function create()
    {
        return view('contracts.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'contract_name' => 'required',
            'contract_type' => 'required',
            'contract_status' => 'required',
            'contract_description' => 'required',
            'contract_date' => 'required',
            // You may add other validation rules as needed
        ]);

        $data['user_id'] = 1; // You may change this to match the authenticated user's ID

        Contract::create($data);

        return redirect()->route('contracts.index')->with('flash_message', 'Contract Added!');
    }

    public function show($id)
    {
        $contract = Contract::findOrFail($id);
        return view('contracts.show', compact('contract'));
    }

    public function edit($id)
    {
        $contract = Contract::find($id);
        return view('your_view_name', compact('contract'));
    }


    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'contract_name' => 'required',
            'contract_type' => 'required',
            'contract_status' => 'required',
            'contract_description' => 'required',
            'contract_date' => 'required',
            // You may add other validation rules as needed
        ]);

        $contract = Contract::findOrFail($id);
        $contract->update($data);

        return redirect()->route('contracts.index')->with('flash_message', 'Contract Updated!');
    }

    public function destroy($id)
    {
        Contract::destroy($id);
        return redirect()->route('contracts.index')->with('flash_message', 'Contract deleted!');
    }
}