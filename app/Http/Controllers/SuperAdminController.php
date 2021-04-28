<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Incident;
use App\Investigation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;




class SuperAdminController extends Controller
{
    public function private_dashboard() {

        //$incidence = Incident::all();

        //dd($incidence);


        $companies= DB::table('users')->whereNull('partner_id')->get();
        $users= DB::table('users')->get();
        $investigations = Investigation::all();

        $incidences = Incident::with('assingments')
        ->orderBy('incident_id', 'DESC')
        ->paginate(2);

        return view('superadmin.superadmin_dashboard',compact('incidences','companies','users','investigations'));

    }
    public function crimes_report(){

        $partne_1 = Incident::where('partner_id','1')->get();
    	$partne_2 = Incident::where('partner_id','2')->get();
    	$partner1 = count($partne_1);
    	$partner2 = count($partne_2);
        dd($partner1);

    	return view('superadmin.superadmin_dashboard',compact('partner1','partner2'));
    }
}
