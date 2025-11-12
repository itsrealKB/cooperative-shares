<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Lead;
use App\Models\Listing;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $totalListings = Listing::where('user_id', Auth::id())->count();

        $totalLeads = Lead::whereHas('listing', function ($query) {
            $query->where('user_id', Auth::id());
        })->count();

        $totalAppointments = Appointment::whereHas('lead.listing', function ($query) {
            $query->where('user_id', Auth::id());
        })->count();

        return view('screens.vendor.dashboard.index', get_defined_vars());
    }
}
