<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class ScreenController  extends Controller
{
   public function getdata(){
   $date = date('y-m-d 23:00:00');
    //$appointments = DB::table('appointments');
    //$appointments=DB::select('SELECT * FROM appointments WHERE end_at < ?', [$date])->orderBy('end_at','ASC');
    
    //$appointments = DB::table('appointments')->where('end_at', $date);
    //$appointments=DB::table('appointments')->where('end_at', '<>', 1)->orderBy('end_at','ASC');;
    /*foreach ($appointments as $ap){
        array_push($doctors, $ap->doctor_id);
    }

    foreach($doctors as $doc){
      foreach ($appointments as $ap){
         if ($ap->doctor_id =$doc){
            array_push($ap_doc, $ap->end_at);
         }
     }
    }*/


    $appointments = DB::table('appointments')
             ->join('users', 'users.id', '=', 'appointments.doctor_id')
             ->select('appointments.*', 'users.firstname', 'users.secondname')
             ->where('end_at', '<', $date)
             ->where('appointments.user_id', '!=', 0)
             ->orderBy('end_at')
             ->get();

    return view('screen',['appointments'=>$appointments]);
    
   }
    
}