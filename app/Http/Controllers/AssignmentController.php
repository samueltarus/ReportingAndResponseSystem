<?php

namespace App\Http\Controllers;

use App\Assignment;
use App\Client;
use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class AssignmentController extends Controller
{

    public function all_assingments(){

        $assingments =Assignment::all();

        return view('admin.assingments.all_assingments',compact('assingments'));
    }

    public function create_assingment(){

        $clients =Client::all();
        $employees =Employee::all();

        //$clients =DB::table('clients')->get();
        //$employees =DB::table('employees')->get();

        return view('admin.assingments.create_assingment',compact('clients','employees'));
    }

    public function save_assignments(Request $request){
        $data = new Assignment();

        $data['assingment_name']=$request->assingment_name;
        $data['client_id']=$request->client_id;
        $data['number_of_employees']=$request->number_of_employees;
        $data['location']=$request->location;
        $data['is_active']=$request->is_active;

        $data->save();
        return Redirect::to("Assignments");



    }

    public function show_assingment(Request $request ,$assingment_id){

        $assingment=Assignment::FindOrFail($assingment_id);

        return view('admin.assingments.show_assingment',compact('assingment'));

    }
    public function edit_assingment(Request $request,$assingment_id){

        $assingment =Assignment::FindOrFail($assingment_id);

        return view('admin.assingments.edit_assingment',compact('assingment'));
    }
    public function update_assingment(Request $request,$assingment_id){



        $data =array();

        $data['assingment_name']=$request->assingment_name;
        $data['client_id']=$request->client_id;
        $data['employee_id']=$request->employee_id;
        $data['location']=$request->location;
        $data['is_active']=$request->is_active;
        dd($data);

        DB::table('assingments')
        ->where('assingment_id', $assingment_id)
        ->update($data);

        return Redirect::to('assingments');

    }
    public function delete_assingment(Request $request ,$assingment_id){

        $assingment=Assignment::findOrFail($assingment_id);
        $assingment->delete();
        return Redirect::to('assingments');

    }
}
