<?php

namespace App\Http\Controllers;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Document;
use PDF;




class AdminBookController  extends Controller
{
    public function booked()
    {

    $user=Auth::user();
    //$appointment = DB::table('appointments')->where('doctor_id', $user->id)->where('user_id','<>',null)->get();
    //$appointment = DB::table('appointments')->where('doctor_id', $user->id);//->where('user_id','<>',null)->orderBy('end_at','ASC');

    $appointment = DB::table('appointments')
             ->join('users', 'users.id', '=', 'appointments.user_id')
             ->select('appointments.*', 'users.firstname', 'users.secondname')
             ->where('user_id', '<>', null)
             ->where('appointments.doctor_id','=', $user->id)
             ->orderBy('end_at')
             ->get();

    return view('/admin_booked_appointment',compact('appointment'),['appointment'=>$appointment]);
}
}
