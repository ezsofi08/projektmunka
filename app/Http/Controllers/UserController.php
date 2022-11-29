<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PDF;

class UserController extends Controller
{

  /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $user=Auth::user();
        $documents=DB::select('SELECT * FROM documents WHERE user_id = ?', [$user['id']]);
        $appointments = User::all()->find($user['id'])->appointments;
        //$documents = DB::select('select * from documents');
        return view('profil',compact('user'),['documents'=>$documents, 'appointments' => $appointments]);
    }

    public function profil_pdf(){

        $user=Auth::user();
        $documents=DB::select('SELECT * FROM documents WHERE user_id = ?', [$user['id']]);
        $pdf=PDF::loadView('pdf.treatment',['documents'=>$documents]);


        return $pdf->download('treatment.pdf');
    }

}
