<?php

namespace App\Http\Controllers;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Appointment;
use App\Models\Doctors;


class DoctorsController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $doctors=Doctors::all();
        return view('appointment',compact('doctors'));
    }

    /* Get all available appointments belonging to the given doctor*/
    public function showAppointments($id)
    {
        $doctor = Doctors::all()->where('id', $id)->firstOrFail();
        $appointments = Appointment::all()
            ->where('doctor_id','=',$doctor->id)
            ->where('user_id','=','Available');
        return response()->json(
            $appointments,
            Response::HTTP_OK
        );
    }
}
