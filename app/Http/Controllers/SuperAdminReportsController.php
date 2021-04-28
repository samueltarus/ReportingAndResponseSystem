<?php


use App\Http\Controllers\Controller;
namespace App\Http\Controllers;

use App\Incident;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;

class SuperAdminReportsController extends Controller
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
    public function weeklyreport(){

        $incidentsLastWeek = Incident::select('created_at')
                        ->where('created_at', '>', now()->subWeek()->startOfWeek())
                        ->where('created_at', '<', now()->subWeek()->endOfWeek())
                        ->count();
    }
}
