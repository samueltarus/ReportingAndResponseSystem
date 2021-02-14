<?php

namespace App\Http\Controllers;

use App\Assign;
use App\Assignment;
use App\Incident;
use App\Response;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Stevebauman\Location\Facades\Location;



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
            $data= Auth::user()->id;

            $location = Assignment::select('location')->get();
            //dd($location);
            $data =DB::table('users')
            ->join('assigns','users.id', '=', 'assigns.employee_id')
            ->join('assignments', 'assigns.assignment_id', '=', 'assignments.assignment_id')
            ->select('users.email','assigns.assign_id','assigns.assignment_id','assignments.location')
            ->where('location',$location)
            ->get();
            
            // get all user where location is same as login user

            dd($data);

           // $data->user_id = Auth::user()->id;
           // $data = User::with('assign')->get(); //Retrieving all subscribers
            // dd($data);

            // foreach($data as $data){
            //     Notification::route('mail' , $subscriber->email) //Sending mail to subscriber
            //                   ->notify(new NewPostNotify($posts)); //With new post
            //                       }


        return redirect::to('guards');

    }
}
