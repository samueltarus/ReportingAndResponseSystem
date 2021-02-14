<?php

namespace App\Http\Controllers;

use App\Incident;

use App\Assignment;
use App\Investigation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class IncidentController extends Controller
{
    public function all_incidents(){

        $incidences = Incident::with('assingments')->get();

        return view('admin.incident.all_incidences',compact('incidences'));
    }

///load incidences

    public function load_incidents(){


        $incidences = Incident::with('assingments')
        ->orderBy('incident_id', 'DESC')
        ->paginate(7);

        return view('admin.incident.load_incidence',compact('incidences'));
    }
    public function load_investigations(){

        $incidences = Investigation::with('incident')->get();

        return view('admin.incident.load_investigation',compact('incidences'));
    }


    public function add_incident(){

        return view('admin.incident.add_incidence');
    }
    public function add_investigation(){
        $incidents = Incident::all();

        return view('admin.incident.add_investigation',compact('incidents'));
    }



    public function save_incident(Request $request){

        $data =new Incident();
        $data->user_id = Auth::user()->id;
        $data['incident_type']=$request->incident_type;
        $data['incident_date']=$request->incident_date;
        $data['incident_description']=$request->incident_description;
        $data['name_of_parties_involved']=$request->name_of_parties_involved;
        $data['name_of_witness']=$request->name_of_witness;

        $data->save();

        return redirect::to('load-incidences');

    }

    public function  save_investigation(Request $request){

        $data =new Investigation();

        $data['incident_id']=$request->incident_id;
        $data->user_id = Auth::user()->id;
        $data['investiagtion_statement']=$request->investiagtion_statement;
        $data['investiagtion_recomendation']=$request->investiagtion_recomendation;
        $data['investigation_status']=$request->investigation_status;
    //   dd($data);

        $data->save();

        return redirect::to('load-investigation');

    }

    public function show_employee(Request $request ,$employee_id){

        $employee=Incident::with('assingments')->FindOrFail($employee_id);
        $assingment = Assignment::with('Incidents')->where('Incident_id','=',$employee_id)->get();


        return view('admin.Incidents.show_Incident',compact('Incident','assingment'));

    }
    public function edit_Incident(Request $request,$Incident_id){

        $Incident =Incident::FindOrFail($Incident_id);

        return view('admin.Incidents.edit_Incident',compact('Incident'));
    }
    public function update_Incident(Request $request,$Incident_id){



        $data =array();

        $data['first_name']=$request->first_name;
        $data['last_name']=$request->last_name;
        $data['username']= $data['first_name'].''.$data['last_name'];
        $data['email']=$request->email;
        $data['phone_number']=$request->phone_number;
        //$data['is_active']=$request->is_active;

        DB::table('Incidents')
        ->where('Incident_id', $Incident_id)
        ->update($data);

        return Redirect::to('Incidents');

    }
    public function delete_Incident(Request $request ,$Incident_id){

        $Incident=Incident::findOrFail($Incident_id);
        $Incident->delete();
        return Redirect::to('Incidents');

    }

    public function all_assinged_Incidents(){

        return Redirect::to('All-assinged');
    }
    public function create_assinged(){

        $Incidents = Incident::all();
        $assingments = Assignment::all();

    return view('admin.Incidents.assing_assingment',compact('Incidents','assingments'));
    }

    public function store_assigned(Request $request){
        // $data = new Assign();
        // $data['Incident_id']=$request->Incident_id;
        // $data['assignment_id ']=$request->assignment_id ;

        // $data->save();
        // return redirect::to('Incidents');
    }
}
