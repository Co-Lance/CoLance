<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\WalletRequest;
use App\Models\Wallet;



class WalletController extends Controller
{
    public function index()
    {
        $wallets = Wallet::all();
        return view('Wallet.index', compact('wallets'));
    }
    

public function create()
{
    return view('Wallet.create');
}

public function store(WalletRequest $request)
{  

    $wallet = wallet::create($request->all());
   
    return redirect('wallets');
}

public function show($id)
{
    $wallet = Wallet::find($id);
    return view('wallets.show', compact('wallet'));
}

public function edit($id)
{
    $wallet = Wallet::find($id);
    return view('wallets.edit', compact('wallet'));
}

public function update(WalletRequest $request, $id)
{
    $wallet = Wallet::find($id);
    $wallet->name = $request->input('name');
    $wallet->balance = $request->input('balance');
    $wallet->save();
    return redirect('wallets');
}

public function destroy(Request $request, $id)
{
    $wallet = Wallet::find($id);
    $wallet->delete();
    return redirect('wallets');
}

public function deposit(Request $request, $id)
{
    $wallet = Wallet::find($id);
    $wallet->balance += $request->input('amount');
    $wallet->save();
    return redirect('wallets');
}  

}           

