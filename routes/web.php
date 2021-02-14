<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {

    return view('auth.login');
});


///////////////////////////////////////ADMIN FUNCTIONALITIES//////////////////////////////////////////////////////////////////////

//Private Dasboard
    Route::get('admin','PrivateDashboard@private_dashboard')->name('Private Dashboard')->middleware('admin');
            //Employees
    Route::get('Employees','EmployeeController@all_employees')->name('Employees');
    Route::get('create-employee','EmployeeController@create_employee');
    Route::post('save-employee','EmployeeController@save_employee');
    Route::get('edit-employee/{employee_id}','EmployeeController@edit_employee');
    Route::get('show-employee/{employee_id}','EmployeeController@show_employee');
    Route::post('update-employee/{employee_id}','EmployeeController@update_employee');
    Route::get('delete-employee/{employee_id}','EmployeeController@delete_employee');



    Route::get('/admin/{id}','EmployeeController@admin');
      Route::get('/guards/{id}','EmployeeController@guards' );
      Route::get('/Operations/{id}','EmployeeController@Operations' );
      Route::get('assign-employee-company/{id}','EmployeeController@assign_employee_company');
      Route::post('save-employee-company/{id}','EmployeeController@update_employee_company');
      Route::get('assign-employee-role/{id}','EmployeeController@assign_employee_role');
      Route::post('save-employee-role/{id}','EmployeeController@update_employee_role');



    //companies

     Route::get('Companies','CompanyController@companies');
     Route::get('add-company','CompanyController@add_company');
     Route::post('save-company','CompanyController@save_company');

    //assing Assingments Emplloyee

    Route::get('All-assinged','EmployeeController@all_assinged_employees');
    Route::get('create-assign','EmployeeController@create_assinged');
    Route::post('save-assing','EmployeeController@store_assigned');
        //client
    Route::get('Clients','ClientController@all_clients')->name('Clients');
    Route::get('create-client','ClientController@create_client');
    Route::post('save-client','ClientController@save_client');
    Route::get('edit-client/{client_id}','ClientController@edit_client');
    Route::get('show-client/{client_id}','ClientController@show_client');
    Route::post('update-client/{client_id}','ClientController@update_client');
    Route::get('delete-client/{client_id}','ClientController@delete_client');
    //assingmnets
    Route::get('Assignments','AssignmentController@all_assingments')->name('Assignments');
    Route::get('create-assignment','AssignmentController@create_assingment');
    Route::post('save-assignment','AssignmentController@save_assignments');
    Route::get('edit-assignment/{assignment_id}','AssignmentController@edit_assignment');
    Route::get('show-assignment/{assignment_id}','AssignmentController@show_assignment');
    Route::post('update-assignment/{assignment_id}','AssignmentController@update_assignment');
    Route::get('delete-assignment/{assignment_id}','AssignmentController@delete_assignment');

    //incidence details
    Route::get('load-incidences','IncidentController@load_incidents');
    Route::get('add-incident','IncidentController@add_incident');
    Route::post('save-incident','IncidentController@save_incident');
    Route::get('edit-incident/{assignment_id}','IncidentController@edit_assignment');
    Route::get('show-incident/{assignment_id}','IncidentController@show_assignment');

    //incidence investigations
    Route::get('load-investigation','IncidentController@load_investigations');
    Route::get('add-investigation','IncidentController@add_investigation');
    Route::post('save-investigation-Report','IncidentController@save_investigation');
    Route::get('edit-investigation/{assignment_id}','IncidentController@edit_investigation');
    Route::get('show-investigation/{assignment_id}','IncidentController@show_investigation');

    //reports//////////////////////////
    Route::get('incident-report/{incident_id}','ReportsController@incident_report');


    ///////////////////////////////////////////////////// GUARDS FUNCTIONALITIES///////////////////////////////////////////////////////////////////////////////////

    //guards reporting
    Route::get('guards','GuardsController@guards_clients_dashboard')->name('guards')->middleware('guards');
    Route::get('profile','GuardsController@profile');
    Route::get('report-incident','GuardsController@report_incident');
    Route::post('send-report-incident','GuardsController@send_report_incident');
    Route::post('raise_alarm','GuardsController@raise_alarm');
    //Route::post('/raise-alarm', [GuardsController::class, "raise_alarm"]);

    /////////////////////////////OPERATIONS FUNCTIONALITIES /////////////////////////////////////////////////////////////

    //operations
    Route::get('Operations','OperationsController@operations')->middleware('Operations');
    Route::get('Incidents_Status','OperationsController@incidents_status');
    Route::get('Investigation','OperationsController@investigations');
    Route::post('Investigation_Report','OperationsController@investigations_report');
    Route::get('Operation_Profile','OperationsController@operation_profile');
    Route::get('Incidents-Investigations','OperationsController@getincidents');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

