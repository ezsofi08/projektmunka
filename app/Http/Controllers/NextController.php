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
        DB::table('appointments')->where('end_at', '=', $date)->delete();
        return view("/admin/adminhome");
    }

    public function savedoc(Request $req){
        $user=Auth::user();
        $appointment = DB::table('appointments')->where('doctor_id', $user->id)->first();
        $patient = DB::table('users')->where('id', $appointment->user_id)->first();
        $user_id=$patient->id;
        $user_TAJ=$patient->TAJ;
        $user_first_name=$patient->firstname;
        $user_second_name=$patient->secondname;
        $doctor_id=$user->id;
        $doctor_first_name=$user->firstname;
        $doctor_second_name=$user->secondname;
        $date=$appointment->end_at;
        //$doctor_name=$user->firstname +$user->secondname;
        
        //DB::insert('INSERT INTO documents (user_id) VALUES '[$patient['id']]);
        $treatment=$req->input('treatment');
        $description=$req->input('description');


        DB::insert('insert into documents (user_id,doctor_id,date,treatment,description,TAJ,user_first_name,user_second_name,doctor_first_name,doctor_second_name) values (?,?,?,?,?,?,?,?,?,?)', [$user_id,$doctor_id,$date,$treatment,$description,$user_TAJ,$user_first_name,$user_second_name,$doctor_first_name,$doctor_second_name]);
       
        DB::table('appointments')->where('end_at', '=', $date)->delete();

        return view("/admin/adminhome");
    }
        
    

}