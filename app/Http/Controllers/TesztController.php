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


   public function book(Request $req){
      $user=Auth::user();
      $app=$req->input('book');
      echo"$app";
      DB::table('appointments')->where('id', $app)
                ->update(['user_id' => $user->id]);


   }

}


