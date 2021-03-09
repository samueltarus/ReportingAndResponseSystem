<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Incident;
use Illuminate\Http\Request;


class SuperAdminController extends Controller
{
    public function private_dashboard() {

        //$incidence = Incident::all();

        //dd($incidence);
        $incidence = Incident::with('assingments')
        ->orderBy('incident_id', 'DESC')
        ->paginate(7);
        return view('superadmin.superadmin_dashboard',compact('incidence'));
    }
}
