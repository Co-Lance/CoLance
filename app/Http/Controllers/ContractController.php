<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contract;

class ContractController extends Controller
{
       public function index()
       {
           $contracts = Contract::all();
           return view ('contracts.index')->with('contracts', $contracts);
       }


       public function create()
       {
           return view('contracts.create');
       }


       public function store(Request $request)
       {
           $input = $request->all();
           Contract::create($input);
           return redirect('contract')->with('flash_message', 'Contract Addedd!');
       }


       public function show($id)
       {
           $contract = Contract::find($id);
           return view('contracts.show')->with('contracts', $contract);
       }


       public function edit($id)
       {
           $contract = Contract::find($id);
           return view('contracts.edit')->with('contracts', $contract);
       }


       public function update(Request $request, $id)
       {
           $contract = Contract::find($id);
           $input = $request->all();
           $contract->update($input);
           return redirect('contract')->with('flash_message', 'contract Updated!');
       }


       public function destroy($id)
       {
           Contract::destroy($id);
           return redirect('contract')->with('flash_message', 'contract deleted!');
       }
   }
