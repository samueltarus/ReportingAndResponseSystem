<?php

use App\Http\Controllers\Controller;
namespace App\Http\Controllers;
use App\Assignment;
use App\Assign;
use App\Company;
use App\Employee;
use App\PrivatePortal\Assingment;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class SuperAdminEmployeeController extends Controller
{
    public function all_employees(){
        // $id = Auth::user()->id;
        $employees= DB::table('users')->paginate(7);


        return view('superadmin.employees.all_employees',compact('employees'));


    }
    public function create_employee(){
        return view('superadmin.employees.create_employee');
    }

    public function save_employee(Request $request){
        $data =new User();

         $data['name']=$request->name;
        $data['email']=$request->email;
        $data['password']= Hash::make($request->password);
        $data->partner_id = Auth::user()->id;

         $data->save();

        return redirect::to('admin_employees');

    }
    public function show_employee(Request $request ,$employee_id){

        $employee=Employee::with('assingments')->FindOrFail($employee_id);
        $assingment = Assignment::with('employees')->where('employee_id','=',$employee_id)->get();


        return view('superadmin.employees.show_employee',compact('employee','assingment'));

    }
    public function edit_employee(Request $request,$employee_id){

        $employee =Employee::FindOrFail($employee_id);

        return view('superadmin.employees.edit_employee',compact('employee'));
    }
    public function update_employee(Request $request,$employee_id){



        $data =array();

        $data['first_name']=$request->first_name;
        $data['last_name']=$request->last_name;
        $data['username']= $data['first_name'].''.$data['last_name'];
        $data['email']=$request->email;
        $data['phone_number']=$request->phone_number;
        //$data['is_active']=$request->is_active;

        DB::table('employees')
        ->where('employee_id', $employee_id)
        ->update($data);

        return Redirect::to('admin_employees');

    }
    public function delete_employee(Request $request ,$employee_id){

        $employee=Employee::findOrFail($employee_id);
        $employee->delete();
        return Redirect::to('admin_employees');

    }

    public function all_assinged_employees(){

        $assing_employees= Assign::all();

        // dd($assing_employees);
        return view('superadmin.employees.all_assinged',compact('assing_employees'));
    }
    public function create_assinged(){

        // $employees = Employee::all();
        $assingments = Assignment::all();
        $employees = DB::table('users')
        ->select('users.*')
        ->where('role_id',2)
        ->get();

    return view('superadmin.employees.assing_assingment',compact('employees','assingments'));
    }

    public function store_assigned(Request $request){
        $data = new Assign();
        $data['employee_id']=$request->employee_id;
        $data['assignment_id']=$request->assignment_id ;

        $data->save();
        return redirect::to('admin_employees');
    }

    //Companies
       public function assign_employee_company(Request $request ,$id){


            $employees=DB::table('users')
            ->where('id',$id)
            ->first();
            $companies= DB::table('users')->whereNull('partner_id')->get();

         return view('superadmin.employees.assign_companies',compact('employees','companies'));

        }

        //roles

     public function assign_employee_role($id){

        $employees=DB::table('users')
        ->where('id',$id)
        ->first();
        $roles = DB::table('roles')->get();

     return view('superadmin.employees.assign_roles',compact('employees','roles'));

        }

        //companies ]


 public function update_employee_company(Request $request, $id){

    $data =array();

    $data['security_company']=$request->security_company;


    DB::table('users')
    ->where('id', $id)
    ->update($data);

    return Redirect::to('admin_employees');


}


//roles
public function update_employee_role(Request $request,$id){
    $data =array();
    $data['role_id']=$request->role_id;
    DB::table('users')
    ->where('id', $id)
    ->update($data);
    return Redirect::to('admin_employees');

}


//update roles

    public function admin($id){

        $users= DB::table('users')
                        ->where('id',$id)
                        ->update(['role_id'=>1]);
        return Redirect::to('admin_employees');

     }
     public function  guards($id){
        $users= DB::table('users')
                        ->where('id',$id)
                        ->update(['role_id'=>2]);

        return Redirect::to('admin_employees');

     }
     public function Operations($id){

        $users= DB::table('users')
                        ->where('id',$id)
                        ->update(['role_id'=>3]);

        return Redirect::to('admin_employees');
     }
}
