<?php

namespace App\Http\Controllers;

use App\Incident;
use App\Investigation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;




class OperationsController extends Controller
{
    public function operations(){
        return view('operations.operations_dashboard');
    }
    public function operation_profile(){
        return view('operations.operation_profile');
    }

    public function investigations(){

        $incidents = Incident::all();
        return view('operations.Investigation_report',compact('incidents'));
    }
    public function investigations_report(Request $request){
        $data =new Investigation();

        $data['incident_id']=$request->incident_id;
        //$data->user_id = Auth::user()->id;
        $data['investiagtion_statement']=$request->investiagtion_statement;
        $data['investigation_status']=$request->investigation_status;

        $data->save();
        return redirect::to('Operations');


    }
    public function incidents_status(){

        $investigations = Investigation::all();

        return view('operations.incidents_status',compact('investigations'));

    }

    public function getincidents(){
        return "incidents table";
    }

}
