<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}