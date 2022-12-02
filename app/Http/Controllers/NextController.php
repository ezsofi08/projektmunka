<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Document;



class NextController  extends Controller
{
   
 
    public function getdata()
    {
        $user=Auth::user();
       // $doctor = DB::table('doctors')->where('user_id', $user->id)->first();
        //$doctor=DB::select('SELECT  * FROM doctors WHERE user_id = ?', [$user['id']] );
       // $doc=$doctor['id'];
       // $appointment=DB::select('SELECT * FROM appointments WHERE doctor_id = ?', [$user['id']]);
       $appointment = DB::table('appointments')->where('doctor_id', $user->id)->first();
       $patient = DB::table('users')->where('id', $appointment->user_id)->first();

        //return view('/valami',compact('doctor'),['doctor'=>$doctor]);
       return view('/valami',compact('appointment'),['appointment'=>$appointment, 'patient'=>$patient]);

       
        
       // return view('profil',compact('user'),['documents'=>$documents, 'appointments' => $appointments]);
    }


    public function appear(){
        //Ide kell a kitiltás
        return view("/admin/adminhome");
    }

    public function savedoc(Request $req){
        
        $treatment=request->input('treatment');
        $treatment=request->input('description');
        
    }

}