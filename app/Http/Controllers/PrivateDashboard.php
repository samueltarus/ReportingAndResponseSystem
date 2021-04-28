<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Incident;
use App\Investigation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;




class PrivateDashboard extends Controller
{
    public function private_dashboard() {

        //$incidence = Incident::all();

        //dd($incidence);
        $id = Auth::user()->id;
        $employees= DB::table('users')->where('partner_id','=', $id )->get();

        $investigations = Investigation::all();

        $incidence= DB::table('incidents')->where('partner_id','=', $id )->paginate(3);
        // $incidence = Incident::with('assingments')
        // ->orderBy('incident_id', 'DESC')
        // ->paginate(7);

        return view('admin.private_dashboard',compact('incidence','employees','users','investigations'));
    }
}
