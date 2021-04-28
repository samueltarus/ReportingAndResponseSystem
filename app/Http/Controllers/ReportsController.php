<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Auth;



class ReportsController extends Controller
{
    public function incident_report(Request $request ,$incident_id){

        $incidence =DB::table('incidents')
        ->join('users','incidents.user_id', '=', 'users.id')
        ->select('incidents.*', 'users.name')
        ->where('incident_id',$incident_id)
        ->get();

        view()->share('admin.report.incident_report',$incidence);
        $pdf = PDF::loadView('admin.report.incident_report', compact('incidence'));

        return $pdf->download('incident.pdf');
    }

    //complete report lists

    public function operations_complete_reports(){

        // $incidence =DB::table('incidents')
        // ->join('users','incidents.user_id', '=', 'users.id')
        // ->select('incidents.*', 'users.name')
        // ->where('incident_id',$incident_id)
        // ->get();
        //incidents items Ob reference number
        //list all incidents associated to the parner
        $partner_id  = Auth::user()->partner_id;
        $incidences= DB::table('incidents')->where('partner_id','=', $partner_id )->paginate(7);
        $investigations= DB::table('investigations')->where('partner_id','=', $partner_id )->paginate(7);


        $complete_report = DB::table('users')
            ->join('investigations', 'users.partner_id', '=', 'investigations.partner_id')
            ->join('incidents', 'users.partner_id', '=', 'incidents.partner_id')
            ->select('users.*', 'investigations.*', 'incidents.*')
            ->get();

        //  dd($results);

        return view('operations.complete_reports_operations',compact('incidences','investigations','complete_report'));

    }

    //  complete report
    public function summary_report(Request $request ,$incident_id){

        $incidences= DB::table('incidents')->where('incident_id','=', $incident_id )->paginate(7);
        $investigations= DB::table('investigations')->where('incident_id','=', $incident_id )->paginate();


        view()->share('admin.report.summary_report',$incidences,$investigations);
        $pdf = PDF::loadView('admin.report.summary_report', compact('incidences','investigations'));

        return $pdf->download('summary_report.pdf');
    }
}
