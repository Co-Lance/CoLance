<?php

namespace App\Http\Controllers;

use App\Http\Requests\OffreRequest;
use App\Models\Offre;
use Illuminate\Http\Request;

class OffreController extends Controller
{
    public function index(){
        $listoffres = Offre::all();
        return view('offre.index',compact('listoffres'));
    }
    public function create(){
        return view('offre.create');
    }
    public function store(OffreRequest $request){
        echo  $request->name;
        Offre::create($request->validated());
        return redirect()->route('offres')->with('success', 'Offer added successfully!');

    }
    public function destroy($id){
        $offre = Offre::findOrFail($id);
        if($offre->delete()){
            return redirect()->route('offres')->with('success', 'Offer deleted successfully!');
        }
        return redirect()->route('offres')->with('fail', 'Offer has been failed to delete!');
    }
    public function edit($id){
        $offre = Offre::findOrFail($id);
        return view('offre.editoffer',compact('offre'));
    }
    public function  put(Request $request,$id){
        $offre = Offre::findOrFail($id);

        // Update the product with the new data
        $offre->update([
            'name' => $request->input('name'),
            'image' => $request->input('image'),
            'description' => $request->input('description'),

        ]);

        // Redirect to the product details page or any other appropriate route
        return redirect()->route('offres')->with('success', 'Product updated successfully!');
    }

}
