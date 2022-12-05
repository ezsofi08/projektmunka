<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Document;
use PDF;



class NextController  extends Controller
{


    public function getdata()
    {
        $user=Auth::user();
       // $doctor = DB::table('doctors')->where('user_id', $user->id)->first();
        //$doctor=DB::select('SELECT  * FROM doctors WHERE user_id = ?', [$user['id']] );
       // $doc=$doctor['id'];
       // $appointment=DB::select('SELECT * FROM appointments WHERE doctor_id = ?', [$user['id']]);
       $appointment = DB::table('appointments')->where('doctor_id', $user->id)->where('user_id','<>',null)->orderBy('end_at','ASC')->first();
       if ($appointment == null)
           return view('admin/adminhome');
       $patient = DB::table('users')->where('id', $appointment->user_id)->first();

        //return view('/valami',compact('doctor'),['doctor'=>$doctor]);
       return view('/valami',compact('appointment'),['appointment'=>$appointment, 'patient'=>$patient]);



       // return view('profil',compact('user'),['documents'=>$documents, 'appointments' => $appointments]);
    }


    public function appear(){
        //Ide kell a kitiltás
        //DB::table('appointments')->where('end_at', '=', $date)->delete();
        $user = Auth::user(); //ez az admin
        $appointment = DB::table('appointments')->where('doctor_id', $user->id)->where('user_id','<>',null)->orderBy('end_at','ASC')->first();
        $not_appear = DB::table('presence')->where('user_id', $appointment->user_id)->value('not_appear');
        $patient_is_in = NULL;
        $patient_is_in = DB::table('presence')->where('user_id', $appointment->user_id)->value('user_id');

        if($patient_is_in == NULL){
            DB::table('presence')->insertGetId(
                ['user_id' => $appointment->user_id, 'datum' => $appointment->end_at, 'not_appear' => 1]
            );
        }
        else{
            DB::table('presence')->where('id', $appointment->user_id)
                ->increment('not_appear', 1, ['datum' => $appointment->end_at]);
        }
        DB::table('appointments')->where('end_at', '=', $appointment->end_at)->delete();
        return view("/admin/adminhome");
    }

    public function savedoc(Request $req){
        $user=Auth::user();
        $appointment = DB::table('appointments')->where('doctor_id', $user->id)->where('user_id','<>',null)->orderBy('end_at','ASC')->first();
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

        DB::connection('eeszt')->insert('insert into documents (user_id,doctor_id,date,treatment,description,TAJ,user_first_name,user_second_name,doctor_first_name,doctor_second_name) values (?,?,?,?,?,?,?,?,?,?)', [$user_id,$doctor_id,$date,$treatment,$description,$user_TAJ,$user_first_name,$user_second_name,$doctor_first_name,$doctor_second_name]);

        //DB::insert('insert into documents (user_id,doctor_id,date,treatment,description,TAJ,user_first_name,user_second_name,doctor_first_name,doctor_second_name) values (?,?,?,?,?,?,?,?,?,?)', [$user_id,$doctor_id,$date,$treatment,$description,$user_TAJ,$user_first_name,$user_second_name,$doctor_first_name,$doctor_second_name]);

        DB::table('appointments')->where('end_at', '=', $date)->delete();

        return view("/admin/adminhome");
    }

    public function getdoc(){

        $user=Auth::user();
        $appointment = DB::table('appointments')->where('doctor_id', $user->id)->where('user_id','<>',null)->orderBy('end_at','ASC')->first();
        $patient = DB::table('users')->where('id', $appointment->user_id)->first();
        $user_id=$patient->id;

        $documents=DB::connection('eeszt')->select('SELECT * FROM documents WHERE user_id = ?', [$user_id]);
        $pdf=PDF::loadView('pdf.treatment',['documents'=>$documents]);
        return $pdf->download('treatment.pdf');
    }

    public function medicine(Request $req){

        $user=Auth::user();
        $appointment = DB::table('appointments')->where('doctor_id', $user->id)->where('user_id','<>',null)->orderBy('end_at','ASC')->first();
        $patient = DB::table('users')->where('id', $appointment->user_id)->first();
        $user_TAJ=$patient->TAJ;
        $user_first_name=$patient->firstname;
        $user_second_name=$patient->secondname;
        $doctor_first_name=$user->firstname;
        $doctor_second_name=$user->secondname;
        $medicine=$req->input('medicine');
        $packaging=$req->input('packaging');

        DB::connection('eeszt')->insert('insert into medicine (doctor_first_name,doctor_second_name,user_first_name,user_second_name,TAJ,medicine,packaging) values (?,?,?,?,?,?,?)', [$doctor_first_name,$doctor_second_name,$user_first_name,$user_second_name,$user_TAJ,$medicine,$packaging]);
    }


    public function getquestions(){

        $user=Auth::user();
        $appointment = DB::table('appointments')->where('doctor_id', $user->id)->where('user_id','<>',null)->first();
        $patient = DB::table('users')->where('id', $appointment->user_id)->first();
        $user_id=$patient->id;

        $questions=DB::select('SELECT * FROM questions WHERE appointment_id = ?', [$appointment->id]);
        $pdf=PDF::loadView('pdf.questions',['questions'=>$questions]);
        return $pdf->download('questions.pdf');
    }

}
