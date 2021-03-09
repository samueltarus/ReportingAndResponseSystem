<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Incident;
use Illuminate\Http\Request;


class PrivateDashboard extends Controller
{
    public function private_dashboard() {

        //$incidence = Incident::all();

        //dd($incidence);
        $incidence = Incident::with('assingments')
        ->orderBy('incident_id', 'DESC')
        ->paginate(7);
        return view('admin.private_dashboard',compact('incidence'));
    }
}
