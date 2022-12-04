<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class TesztController  extends Controller
{

   public function doc(Request $req){
      $doc=$req->input('doctor');
      $app= $this->getapp($doc);
      return view('teszt',['appointments'=>$app]);
      //echo "$doc";
   }


   public function getapp($doc){
   $appointments=DB::table('appointments')
	    ->where('user_id','=',null )
        ->where('doctor_id','=',$doc)
	    ->get();
   return $appointments;
   // $appointments=DB::select('SELECT * FROM appointments');
    //return view('teszt',['appointments'=>$appointments]);
   }


   /*public function book(Request $req){
      $user=Auth::user();
      $app=$req->input('book');
      DB::table('appointments')->where('id', $app)
                ->update(['user_id' => $user->id]);


   }*/

   public function question(Request $req){
      $user=Auth::user();
      $app=$req->input('question');
      

      $reason=$req->input('reason');
      $complain=$req->input('complain');
      $time=$req->input('time'); 
      $braces=$req->input('braces');
      $medicine=$req->input('medicine');      



      DB::insert('insert into questions (reason,complain,time,braces,medicine,appointment_id) values (?,?,?,?,?,?)', [$reason,$complain,$time,$braces,$medicine,$app]);
         
      DB::table('appointments')->where('id', $app)
                ->update(['user_id' => $user->id]);

      return view('home');
      

   }

}


