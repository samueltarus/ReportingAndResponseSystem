<?php

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

class GuardsController extends Controller
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
        $data->partner_id  = Auth::user()->partner_id;
        $data['incident_type']=$request->incident_type;
        $data['incident_date']=$request->incident_date;
        $data['incident_description']=$request->incident_description;
        $data['name_of_parties_involved']=$request->name_of_parties_involved;
        $data['name_of_witness']=$request->name_of_witness;

        $data->save();
       return redirect::to('guards');


    }



    public function raise_alarm (Request $request ){

        $data =new Response();

        $partner_id= Auth::user()->id;

        // $guards = DB::table('users')
        //         ->join('assigns','users.id' ,'=','assigns.employee_id')
        //         ->join('assignments','assignments.assignment_id', '=', 'assigns.assignment_id')
        //         ->join('locations','assignments.location_id' ,'=','locations.location_id')
        //         ->where('employee_id' ,'=',$partner_id)
        //         ->where('role_id',2)
        //         ->get();


        //          dd($guards);


        $guards = DB::table('users')
            ->join('locations','users.partner_id', '=','locations.partner_id')
            ->join('assignments','assignments.location_id', '=', 'locations.location_id')
            ->select('users.email','locations.location','assignments.location_id')
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
