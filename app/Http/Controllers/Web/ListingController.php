<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index()
    {
        $listings = Listing::paginate(12);
        return view('screens.web.listings', compact('listings'));
    }

    public function show(Listing $listing)
    {
        return view('screens.web.listing-detail', compact('listing'));
    }
}
