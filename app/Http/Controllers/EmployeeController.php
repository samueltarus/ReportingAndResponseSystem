<?php

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

class EmployeeController extends Controller
{
    public function all_employees(){
        $id = Auth::user()->id;
        $employees= DB::table('users')->where('partner_id','=', $id )->get();


    if(count ($employees)>0){

        return view('admin.employees.all_employees',compact('employees' ));
    }
    else
    {
        return view('admin.employees.all_employees',compact('employees'));
    }

    }
    public function create_employee(){
        return view('admin.employees.create_employee');
    }

    public function save_employee(Request $request){

        $data =new User();

        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['password']= Hash::make($request->password);
        $data->partner_id = Auth::user()->id;

         $data->save();

        return redirect::to('Employees');

    }
    public function show_employee(Request $request ,$employee_id){

        $employee=Employee::with('assingments')->FindOrFail($employee_id);
        $assingment = Assignment::with('employees')->where('employee_id','=',$employee_id)->get();


        return view('admin.employees.show_employee',compact('employee','assingment'));

    }
    public function edit_employee(Request $request,$employee_id){

        $employee =Employee::FindOrFail($employee_id);

        return view('admin.employees.edit_employee',compact('employee'));
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

        return Redirect::to('Employees');

    }
    public function delete_employee(Request $request ,$employee_id){

        $employee=Employee::findOrFail($employee_id);
        $employee->delete();
        return Redirect::to('Employees');

    }

    public function all_assinged_employees(){

        $partner_id = Auth::user()->id;

        $assing_employees= DB::table('assigns')->where('partner_id' ,'=',$partner_id)->get();

       // $assing_employees= Assign::all();
        //  dd($assing_employees);

        // dd($assing_employees);
        return view('admin.employees.all_assinged',compact('assing_employees'));
    }

    public function create_assinged(){

        // $employees = Employee::all();
        $partner_id = Auth::user()->id;
        $employees= DB::table('users')->where('partner_id' ,'=',$partner_id)->where('role_id' ,'=','2')->get();
        $assingments= DB::table('assignments')->where('partner_id' ,'=',$partner_id)->get();

       // $assingments = Assignment::all();
        // $employees = DB::table('users')
        // ->select('users.*')
        // ->where('role_id',2)
        // ->get();

    return view('admin.employees.assing_assingment',compact('employees','assingments'));
    }

    public function store_assigned(Request $request){
        $data = new Assign();
        $data->partner_id = Auth::user()->id;
        $data['employee_id']=$request->employee_id;
        $data['assignment_id']=$request->assignment_id ;

        $data->save();
        return redirect::to('Employees');
    }

    //Companies
       public function assign_employee_company(Request $request ,$id){


            $employees=DB::table('users')
            ->where('id',$id)
            ->first();

            $companies =Company::all();

     return view('admin.employees.assign_companies',compact('employees','companies'));

        }

        //roles

     public function assign_employee_role($id){

        $employees=DB::table('users')
        ->where('id',$id)
        ->first();
        //$roles = Role::exclude('superadmin')->get();
        $roles = DB::table('roles')
                    ->whereBetween('id', [1, 3])->get();
        //             dd($roles);

        // $roles = DB::table('roles')->get();

     return view('admin.employees.assign_roles',compact('employees','roles'));

        }

        //companies ]


 public function update_employee_company(Request $request, $id){

    $data =array();

    $data['security_company']=$request->security_company;


    DB::table('users')
    ->where('id', $id)
    ->update($data);

    return Redirect::to('Employees');


}


//roles
public function update_employee_role(Request $request,$id){
    $data =array();
    $data['role_id']=$request->role_id;
    DB::table('users')
    ->where('id', $id)
    ->update($data);
    return Redirect::to('Employees');

}


//update roles

    public function admin($id){

        $users= DB::table('users')
                        ->where('id',$id)
                        ->update(['role_id'=>1]);
        return Redirect::to('Employee');

     }
     public function  guards($id){
        $users= DB::table('users')
                        ->where('id',$id)
                        ->update(['role_id'=>2]);

        return Redirect::to('all-houses');

     }
     public function Operations($id){

        $users= DB::table('users')
                        ->where('id',$id)
                        ->update(['role_id'=>3]);

        return Redirect::to('all-houses');
     }

     public function search(){

        $user = User::where('name','LIKE','%','%')->orWhere('email','LIKE','%','%')->get();


     }
}
