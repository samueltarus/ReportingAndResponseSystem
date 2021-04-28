<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class LocationController extends Controller
{

    public function all_location(){

        $id = Auth::user()->id;
        $locations = DB::table('locations')->where('partner_id','=', $id )->get();
        return view('admin.location.all-location',compact('locations'));


    }
    public function create_location(){

        return view('admin.location.add-location');
    }

    public function save_location(Request $request){

        $data =new Location();

        $data->partner_id = Auth::user()->id;
        $data->user_id = Auth::user()->id;
        $data['country']=$request->country;
        $data['county']=$request->county;
        $data['location']=$request->location;
        $data['status']=$request->status;

         $data->save();

        return redirect::to('location');

    }
    public function show_location(Request $request ,$location_id){

        // $employee=Employee::with('assingments')->FindOrFail($employee_id);
        // $assingment = Assignment::with('employees')->where('employee_id','=',$employee_id)->get();


        return view('admin.location.show-location',compact('employee','assingment'));

    }
    public function edit_location(Request $request,$location_id){

        $location =Location::FindOrFail($location_id);

        return view('admin.location.edit-location',compact('location'));
    }
    public function update_location(Request $request,$location_id){

        $data =new Location();

        $data['country']=$request->country;
        $data->partner_id = Auth::user()->id;
        $data->user_id = Auth::user()->id;
        $data['county']=$request->county;
        $data['status']=$request->status;
        //$data['is_active']=$request->is_active;

        DB::table('locations')
        ->where('location_id', $location_id)
        ->update($data);

        return Redirect::to('location');

    }
    public function delete_location(Request $request ,$location_id){

        $location=Location::findOrFail($location_id);
        $location->delete();
        return Redirect::to('locations');

    }


}
