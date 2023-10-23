<?php

namespace App\Http\Controllers;

use App\Models\Offre;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    //
    public function createRequestForOffer($id)
    {
        // Retrieve the offer object by its ID
        $offer = Offre::find($id);

//        if (!$offer) {
//            return redirect()->route('offers.index')->with('error', 'Offer not found.');
//        }

        // Create a new Request object

        $request = new \App\Models\Request();
        ;
        // Associate the offer with the request
        $request->offre()->associate($offer);

        // Save the request to the database
        $request->save();

   return redirect()->route('offres')->with('success', 'Request created for the offer.');
    }
    public function index()
    {
        $listrequests = \App\Models\Request::where('status', 'pending')->get();
        return view('request.index',compact('listrequests','listrequests'));
    }
    public function acceptRequest($id)
    {
        $request = \App\Models\Request::find($id);
        $request->status = 'accepted';
        $request->save();
        return redirect()->route('requests.index')->with('success', 'Request accepted successfully!');
    }
    public function deleteRequest($id)
    {
        $request = \App\Models\Request::find($id);
        $request->status = 'refused';
        $request->save();
        return redirect()->route('requests.index')->with('success', 'Request rejected successfully!');
    }
}
