<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Company;
use App\Incident;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use Illuminate\Support\Facades\Redirect;

class SuperAdminCompanyController extends Controller
{
    public function companies(){

        //$companies = Company::get();
        $companies= DB::table('users')->whereNull('partner_id')->get();


        return view('superadmin.companies',compact('companies'));

    }
    public function add_company(){

        return view('superadmin.add_company');
    }
    public function save_company(Request $request){
        $data = new Company();
        $data['company_name']=$request->company_name;
        $data['location']=$request->location;

        $data['status']=$request->status;

        $data->save();

        return redirect::to('admin_all_companies');

    }


   
}
