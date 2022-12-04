<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    public function createAppointment(Request $request)
    {
        $user = Auth::user(); //ez az admin
        $date = $request->input('newAppointment');
        $doctor = Doctors::all()->where('id', $user->id)->firstOrFail();
        /*
        $isDateExist = Appointment::all()
            ->where('end_at', '=', $date)
            ->where('doctor_id','=',$user->id)->first();

        */
        $newAppointment = new Appointment();
        $newAppointment['doctor_id'] = $doctor['id'];
        $newAppointment['end_at'] = $date;
        $newAppointment->save();
        return redirect('admin/new_appointment');

    }
}
