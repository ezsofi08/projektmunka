<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class TesztController  extends Controller
{
   public function getapp(){
   
    $appointments=DB::table('appointments')
	->where('user_id','=',0)
	->get();

   // $appointments=DB::select('SELECT * FROM appointments');
    return view('teszt',['appointments'=>$appointments]);
   }


   public function book(Request $req){
      $user=Auth::user();
      $app=$req->input('book');
      echo"$app";
      DB::table('appointments')->where('id', $app)
                ->update(['user_id' => $user->id]);


   }
    
}