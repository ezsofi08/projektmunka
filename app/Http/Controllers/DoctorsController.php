<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Appointment;
use App\Models\Doctors;
use Illuminate\Support\Facades\DB;


class DoctorsController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user=Auth::user();
        $date = strtotime(DB::table('presence')->where('user_id', $user->id)->value('datum'));
        $actual_date=strtotime(date("Y-m-d h:i:sa"));
        $secs=$actual_date-$date;
        $days = $secs / 86400;


        if($days > 182){
            DB::table('presence')->where('user_id', $user->id)
            ->update(['not_appear' => 0, 'datum' => null]);
         }
        
        $not_appear = DB::table('presence')->where('user_id', $user->id)->value('not_appear');

        if($not_appear == 2){
            return view('not_appear');
        }
        else{

        $doctors=Doctors::all();
        return view('appointment',compact('doctors'));
        }
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
