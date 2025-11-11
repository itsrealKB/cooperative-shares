<?php

namespace App\Http\Controllers;

use App\Http\Requests\LeadFormRequest;
use App\Models\Appointment;
use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LeadController extends Controller
{

    public function index()
    {
        $leads = Lead::whereHas('listing', function ($query) {
            $query->where('user_id', Auth::id());
        })->with('appointment')->paginate(5);

        return view('screens.vendor.leads.index', compact('leads'));
    }

    public function store(LeadFormRequest $request)
    {
        try {

            $lead = Lead::create([
                'user_id' => Auth::id(),
                'listing_id' => $request->listing_id,
                'name' => Auth::user()->full_name,
                'phone_number' => Auth::user()->phone_number,
                'email' => Auth::user()->email,
                'message' => $request->message,
                'status' => 'Pending',
            ]);

            return redirect()->back();

        } catch (\Exception $e) {

            return redirect()->back()->withErrors(['Error' => "Error Message : $e"]);
        }
    }

    public function show(Lead $lead)
    {
        dd($lead);
    }

    public function edit(Lead $lead)
    {
        if($lead->appointment)
        {
            return redirect()->back();
        }

        $lead->update([
            'status' => 'Viewed'
        ]);

        return view('screens.vendor.leads.edit', compact('lead'));
    }

    public function update(Request $request, Lead $lead)
    {
        try {

            $lead->update([
                'status' => 'Viewed'
            ]);

            $appointment = Appointment::create([
                'lead_id' => $lead->id,
                'appointment_date' => $request->appointment_date,
                'status' => 'Pending'
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Your Appointment Has Been Made!',
                'url' => route('vendor.leads')
            ], 200);

        } catch (\Exception $e) {

            return response()->json([
                'status' => false,
                'message' => "Error Message : $e!"
            ], 200);
        }
    }

    public function destroy(Lead $lead)
    {

        try {

            $lead->delete();

            return response()->json([
                'status' => true,
                'message' => 'The Lead Has Been Deleted Successfully!'
            ],200);

        } catch (\Exception $e) {

            return response()->json([
                'status' => false,
                'message' => "Error Message : $e"
            ],200);
        }
    }

}
