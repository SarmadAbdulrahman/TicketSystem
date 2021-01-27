<?php

namespace App\Http\Controllers\Admin;
use App\Department;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Spatie\Permission\Models\Role;
use Validator;
use App\Manager;
use App\Ticket;
use App\Company;
//Company

class AdminController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        app()->setLocale(Session::get('locale'));
        $this->middleware('auth');
    }


    public function index()
    {



        return view("Admin.Index");



    }

    public function create()
    {

        $Roles=Role::all();
        $Companies=Company::all();

        $departments=Department::all();
        app()->setLocale(Session::get('locale'));
        $InformationArray=Array(
            "Roles"=>$Roles,
            "Companies"=>$Companies,
            "departments"=>$departments
        );
        return view('Admin.CreateUser',$InformationArray);

    }

    public  function StoreUser(Request $request)
    {



        $validator = Validator::make($request->all(), [
            'emailInput' => 'required|email|unique:users,email',
            'userameInput' => 'required|string|max:50',
            'passwordInput' => 'required'
        ]);

        if ($validator->fails()) {

            return response()->json(['status'=>'fail','reasons'=>$validator->messages()],400);
        }

        // this is new way of beer  Role
       $user= User::create([
             'name'=>$request['userameInput']
            , 'email'=>$request['emailInput']
            , 'password'=>Hash::make($request['passwordInput'])
            ,'comp_id'=>$request['Companies']!=null?$request['Companies']:"1"
        ]);



        $user->assignRole(Role::find($request["Role"]));

        if($request["Role"]==3){
            $d=Department::find($request["Department"]);
            $d->user_id=$user->id;
            $d->save();

        }


        if($request["Role"]==5){

            Manager::Create([
                "emp_id"=>$user->id,
                "manager_id"=>$request["Department"]
            ]);

        }






        return response()->json(['status'=>'success'],200);

    }


    public function ChangeUserRole(){


        app()->setLocale(Session::get('locale'));


        $users=User::all();
        $Roles=Role::all();


        $informationArray=Array(
            'users'=>$users,
            'Roles'=>$Roles
        );



        return view('Admin.ChangeUserRole',$informationArray);
    }



    public function CreateDepartment()
    {


        $informationArray=Array(

        );

        return view('Admin.CreateDepartment',$informationArray);
    }



    public function StoreUserRole(Request $request)
    {



        $user=User::find($request->id);
        $user->syncRoles(Role::find($request["Role"]));

        return redirect()->back();


    }


    public function StoreUserPassword(Request $request)
    {


        $user=User::find($request->id);
        $user->password=Hash::make($request['password']);
        $user->save();
        return redirect()->back();


    }


    public  function AssignDepartmentAdmin(Request $request)
    {



        app()->setLocale(Session::get('locale'));
        //$users=User::with('roles')->where("name","=","IwDepartmentAdmin")->get();
        $users = User::role('IwDepartmentAdmin')->get();

        //dd($users);
        $Departments=Department::all();


        $informationArray=Array(
            'users'=>$users,
            'Departments'=>$Departments
        );


        return view('Admin.AssignDepartmentAdmin',$informationArray);
    }


    public function StoreUserDepartment(Request $request)

    {

        $Department=Department::find($request->Department);
        $Department->user_id=$request->id;
        $Department->save();
        return redirect()->back();



    }


    public function rTasks(Request $request)
    {




        return view('Admin.ReportTask');
    }


    public function rTasksReport (Request $request)

    {


        $tickets=Ticket::leftjoin('departments','tickets.department_id','departments.id')
        ->join('ticket_types','tickets.ticket_type_id','ticket_types.id')
        ->join('users','tickets.user_id','users.id')
        ->leftjoin('users as agent','tickets.agent_id','agent.id')
        ->select('tickets.id','tickets.created_at','tickets.issue_name'
        ,'tickets.progress','tickets.agent_comment','users.name as Client_name'
        ,'departments.name as department','ticket_types.ar_name','agent.name as agent_name')->get();


       return response()->json(['tickets'=>$tickets],200);

    }






public function StoreDepartment(Request $request){



    $validator = Validator::make($request->all(), [

        'Departments' => 'required|string|max:50',

    ]);

    if ($validator->fails()) {

        return response()->json(['status'=>'fail','reasons'=>$validator->messages()],400);
    }

    // this is new way of beer  Role
   $user= Department::create([
         'name'=>$request['Departments'],
         'descrption'=>'',

    ]);


    return response()->json(['status'=>'success'],200);

}


public function CreateCompany()
{






    return view('Admin.CreateCompany');

}




public function StoreCompany(Request $request){



    $validator = Validator::make($request->all(), [

        'Company' => 'required|string|max:50',

    ]);

    if ($validator->fails()) {

        return response()->json(['status'=>'fail','reasons'=>$validator->messages()],400);
    }

    // this is new way of beer  Role
   $user= Company::create([
         'company_name'=>$request['Company'],


    ]);


    return response()->json(['status'=>'success'],200);



   }






















}
