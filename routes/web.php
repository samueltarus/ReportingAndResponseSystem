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

////////////////////SUPER ADMIN CONTROLLERS///////////////////////////////

    Route::get('superadmin','SuperAdminController@private_dashboard')->middleware('superadmin');
            //Employees
    Route::get('admin_employees','SuperAdminEmployeeController@all_employees');
    Route::get('admin_create_employee','SuperAdminEmployeeController@create_employee');
    Route::post('admin_save-employee','SuperAdminEmployeeController@save_employee');
    Route::get('admin_edit-employee/{employee_id}','SuperAdminEmployeeController@edit_employee');
    Route::get('admin_show-employee/{employee_id}','SuperAdminEmployeeController@show_employee');
    Route::post('admin_update-employee/{employee_id}','SuperAdminEmployeeController@update_employee');
    Route::get('admin_delete-employee/{employee_id}','SuperAdminEmployeeController@delete_employee');

    // roles and company allocated
    Route::get('/admin_admin/{id}','SuperAdminEmployeeController@admin');
      Route::get('/admin_guards/{id}','SuperAdminEmployeeController@guards' );
      Route::get('/admin_Operations/{id}','SuperAdminEmployeeController@Operations' );
      Route::get('admin_assign-employee-company/{id}','SuperAdminEmployeeController@assign_employee_company');
      Route::post('admin_save-employee-company/{id}','SuperAdminEmployeeController@update_employee_company');
      Route::get('admin_assign-employee-role/{id}','SuperAdminEmployeeController@assign_employee_role');
      Route::post('admin_save-employee-role/{id}','SuperAdminEmployeeController@update_employee_role');

    //companies
     Route::get('admin_all_companies','SuperAdminCompanyController@companies');
     Route::get('add-company','SuperAdminCompanyController@add_company');
     Route::post('save-company','SuperAdmiCompanyController@save_company');

    //assing Assingments Emplloyee
    Route::get('admin_all_assinged','SuperAdminEmployeeController@all_assinged_employees');
    Route::get('admin_create_assign','SuperAdminEmployeeController@create_assinged');
    Route::post('save-assing','SuperAdminEmployeeController@store_assigned');
        //client
    Route::get('admin_clients','SuperAdminClientController@all_clients');
    Route::get('admin_create_client','SuperAdminClientController@create_client');
    Route::post('admin_save-client','SuperAdminClientController@save_client');
    Route::get('admin_edit-client/{client_id}','SuperAdminClientController@edit_client');
    Route::get('admin_show-client/{client_id}','SuperAdminClientController@show_client');
    Route::post('admin_update-client/{client_id}','SuperAdminClientController@update_client');
    Route::get('admin_delete-client/{client_id}','SuperAdminClientController@delete_client');
    //assingmnets
    Route::get('admin_Assignments','SuperAdminAssignmentController@all_assingments');
    Route::get('admin_create_assignment','SuperAdminAssignmentController@create_assingment');
    Route::post('admin_save-assignment','SuperAdminAssignmentController@save_assignments');
    Route::get('admin_edit-assignment/{assignment_id}','SuperAdminAssignmentController@edit_assignment');
    Route::get('admin_show-assignment/{assignment_id}','SuperAdminAssignmentController@show_assignment');
    Route::post('admin_update-assignment/{assignment_id}','SuperAdminAssignmentController@update_assignment');
    Route::get('admin_delete-assignment/{assignment_id}','SuperAdminAssignmentController@delete_assignment');

    //incidence details
    Route::get('admin_load_incidences','SuperAdminIncidentController@load_incidents');
    Route::get('admin_add_incident','SuperAdminIncidentController@add_incident');
    Route::post('admin_save-incident','SuperAdminIncidentController@save_incident');
    Route::get('admin_edit-incident/{assignment_id}','SuperAdminIncidentController@edit_assignment');
    Route::get('admin_show-incident/{assignment_id}','SuperAdminIncidentController@show_assignment');

    //incidence investigations
    Route::get('admin_load_investigation','SuperAdminIncidentController@load_investigations');
    Route::get('admin_add_investigation','SuperAdminIncidentController@add_investigation');
    Route::post('admin_save-investigation-Report','SuperAdminIncidentController@save_investigation');
    Route::get('admin_edit-investigation/{assignment_id}','SuperAdminIncidentController@edit_investigation');
    Route::get('admin_show-investigation/{assignment_id}','SuperAdminIncidentController@show_investigation');



    //reports//////////////////////////
    Route::get('admin_incident-report/{incident_id}','SuperAdminReportsController@incident_report');

    // searc
    Route::get('search','SuperAdminEmployeeController@search');









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


    // Roles
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

       //location
       Route::get('location','LocationController@all_location');
       Route::get('add-location','LocationController@create_location');
       Route::post('save-location','LocationController@save_location');
       Route::get('edit-location/{location_id}','LocationController@edit_location');
       Route::get('show-location/{location_id}','LocationController@show_location');
       Route::get('delete-location/{location_id}','LocationController@delete_location');

    //reports//////////////////////////
    Route::get('incident-report/{incident_id}','ReportsController@incident_report');
    Route::get('complete-report-operations','ReportsController@operations_complete_reports');
    Route::get('summary-report/{incident_id}','ReportsController@summary_report');


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

