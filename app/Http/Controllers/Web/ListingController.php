<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Lead;
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
        $listing->load('user');
        $existingLead = null;

        if (auth()->check()) {
            $existingLead = Lead::where('listing_id', $listing->id)
                ->where('user_id', auth()->user()->id)
                ->exists();
        }
        return view('screens.web.listing-detail', get_defined_vars());
    }
}
