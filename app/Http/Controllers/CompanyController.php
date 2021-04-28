<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;

class CompanyController extends Controller
{
    public function companies(){

        $companies = Company::get();

        return view('admin.companies',compact('companies'));

    }
    public function add_company(){

        return view('admin.add_company');
    }
    public function save_company(Request $request){
        $data = new Company();
        $data['company_name']=$request->company_name;
        $data['location']=$request->location;

        $data['status']=$request->status;

        $data->save();

        return redirect::to('Companies');

    }
}
