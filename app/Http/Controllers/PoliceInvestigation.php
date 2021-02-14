<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoliceInvestigation extends Controller
{
           public function all_investigations(){
                return view('police_portal.police_Investigations');
            }

        public function investigation_report(){
            return view('police_portal.police_investigation_report');

        }

        public function police_reponse(){

            return view('police_portal.police_reponses');

        }

}
