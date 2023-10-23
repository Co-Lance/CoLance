<?php

namespace App\Http\Controllers;

use App\Http\Requests\OffreRequest;
use App\Models\Offre;
use App\Models\Product;
use Illuminate\Http\Request;

class OffreController extends Controller
{
    public function index(Request $request){

        $search = $request->input('search');

        if ($search) {
            // If a search term is provided, filter offers by offer name
            $listoffres = Offre::where('name', 'like', '%' . $search . '%')->get();


        } else {
            // If no search term is provided, retrieve all offers
            $listoffres = Offre::all();
        }


        return view('offre.index', compact('listoffres'));
    }
    public function create(){
        $cities = ['Tunis', 'Sousse', 'Sfax', 'Nabeul', 'Bizerte', 'Gabes', 'Ariana', 'Kairouan', 'Ben Arous', 'Monastir', 'Medenine', 'Manouba', 'Mahdia', 'Gafsa', 'Sidi Bouzid', 'Jendouba', 'Beja', 'Kebili', 'Kasserine', 'Tozeur', 'Siliana', 'Kef', 'Zaghouan', 'Tataouine'];
        $products = Product::all();
        return view('offre.create',['cities'=>$cities,'products'=>$products]);
    }
    public function store(OffreRequest $request){
        echo  $request;

       // return $request->all();
        $offer=Offre::create($request->validated());
        if ($request->has('product_id')) {
            $product = \App\Models\Product::find($request->input('product_id'));
            if ($product) {
                $product->offre()->associate($offer);
                $product->save();
            }
        }
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
