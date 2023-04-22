<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public static function index(){
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag','search']))->get()
        ]);
    }

    public static function show(Listing $listing){
        return view('listing.show', [
            'listing' => $listing
        ]);
    }
}
