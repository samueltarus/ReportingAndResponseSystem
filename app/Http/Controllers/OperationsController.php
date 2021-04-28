<?php

namespace App\Http\Controllers;

use App\Incident;
use App\Investigation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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

        $id = Auth::user()->partner_id;

        $incidents = Incident::all()->where('partner_id','=', $id );

        return view('operations.Investigation_report',compact('incidents'));

    }
    public function investigations_report(Request $request){
        $data =new Investigation();

        $data['incident_id']=$request->incident_id;
        $data->user_id = Auth::user()->id;
        $data->partner_id  = Auth::user()->partner_id;
        $data['investiagtion_statement']=$request->investiagtion_statement;
        $data['investigation_status']=$request->investigation_status;
        $data['investigation_status']=$request->investigation_status;
        $data['investiagtion_recomendation']=$request->investiagtion_recomendation;

        $data->save();
        return redirect::to('Operations');


    }
    public function incidents_status(){

        $investigations = Investigation::all();

        return view('operations.incidents_status',compact('investigations'));

    }

    public function getincidents(){

        $id = Auth::user()->partner_id;

        $incidences= DB::table('incidents')->where('partner_id','=', $id )->paginate(7);


        return view('operations.operations_incidents',compact('incidences'));
    }

}
