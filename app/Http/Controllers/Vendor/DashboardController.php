<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Models\Listing;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $totalListings = Listing::where('user_id', Auth::id())->count();
        return view('screens.vendor.dashboard.index', get_defined_vars());
    }
}
