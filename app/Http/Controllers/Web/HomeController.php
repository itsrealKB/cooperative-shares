<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Listing;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $allListings = Listing::all();
        $apartmentListings = Listing::where('category','apartment')->get();
        $commercialListings = Listing::where('category','commercial')->get();
        $landOrPlotListings = Listing::where('category','land-or-plot')->get();
        return view('screens.web.index', get_defined_vars());
    }
}
