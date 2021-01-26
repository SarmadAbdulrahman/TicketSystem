<?php

namespace App\Http\Controllers\TaskManager;

use App\Department;
use App\Http\Controllers\Controller;
use App\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class TaskManagerController extends Controller
{
    //

    public function __construct()
    {

        app()->setLocale(Session::get('locale'));

        $this->middleware('auth');
    }


    public function  index(){
        app()->setLocale(Session::get('locale'));
        $Tikcets=Ticket::orderBy('id', 'DESC')->get();
        $Departments=Department::all();

        $informationArray=Array(
          "tickets"=>$Tikcets,
          "Departments"=>$Departments
        );

        return view('TaskManager.index',$informationArray);
    }


    public function AssingDepartment(Request $request)

    {

        $Ticket=Ticket::find($request->id);

         $Ticket->department_id=$request->Department;
        $Ticket->save();

        return redirect()->back();





    }
}
