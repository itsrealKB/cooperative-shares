<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::with('lead')->paginate(5);
        return view('screens.vendor.appointments.index', get_defined_vars());
    }

    public function show(Appointment $appointment)
    {

    }

    public function destroy(Appointment $appointment)
    {
        dd($appointment);
    }
}
