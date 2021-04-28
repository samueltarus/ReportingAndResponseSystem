<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;


class SuperAdminClientController extends Controller
{
    public function all_clients(){

        $clients =Client::all();

        return view('superadmin.clients.all_clients',compact('clients'));
    }
    public function create_client(){


        return view('superadmin.clients.create_client');
    }
    public function save_client(Request $request){
        $data =new Client();

        $data->partner_id = Auth::user()->id;

        $data['first_name']=$request->first_name;
        $data['last_name']=$request->last_name;
        $data['username']= $data['first_name'].''.$data['last_name'];
        $data['email']=$request->email;
        $data['phone_number']=$request->phone_number;
        $data['is_active']=$request->is_active;

        $data->save();

        return redirect::to('admin_clients');

    }
    public function show_client(Request $request ,$client_id){

        $client=Client::FindOrFail($client_id);

        return view('superadmin.clients.show_client',compact('client'));

    }
    public function edit_client(Request $request,$client_id){

        $client =Client::FindOrFail($client_id);

        return view('superadmin.clients.edit_client',compact('client'));
    }
    public function update_client(Request $request,$client_id){



        $data =array();

        $data['first_name']=$request->first_name;
        $data['last_name']=$request->last_name;
        $data['username']= $data['first_name'].''.$data['last_name'];
        $data['email']=$request->email;
        $data['phone_number']=$request->phone_number;
        //$data['is_active']=$request->is_active;

        DB::table('clients')
        ->where('client_id', $client_id)
        ->update($data);

        return Redirect::to('admin_clients');

    }
    public function delete_client(Request $request ,$client_id){

        $client=Client::findOrFail($client_id);
        $client->delete();
        return Redirect::to('admin_clients');

    }
}
