<?php

use App\Http\Controllers\Controller;
namespace App\Http\Controllers;
use App\Assign;
use App\Assignment;
use App\Incident;
use App\Mail\GuardAlarmEmail;
use App\Response;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Stevebauman\Location\Facades\Location;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Mail;

class SuperAdminGuardsController extends Controller
{

    public function guards_clients_dashboard(){

        return view('guards.guard_dashboard');
    }


    public function profile(){


        return view('guards.guard_profile');

    }


    public function report_incident(){

        return view('guards.report_incident');

    }


    public function send_report_incident(Request $request){

        $data =new Incident();

        $data->user_id = Auth::user()->id;
        $data['incident_type']=$request->incident_type;
        $data['incident_date']=$request->incident_date;
        $data['incident_description']=$request->incident_description;
        $data['name_of_parties_involved']=$request->name_of_parties_involved;
        $data['name_of_witness']=$request->name_of_witness;

        $data->save();
       return redirect::to('admin_load_incidences');


    }



    public function raise_alarm (Request $request ){

           $data =new Response();
             $data= Auth::user();
            $guards = DB::table('users')
            ->select('users.*')
            ->where('role_id',2)
            ->get();

            foreach($guards as $guard)
            {
                $email = $guard->email;
                Mail::to($email)->send(new GuardAlarmEmail($data));
            }


        return redirect::to('guards');

    }
}
