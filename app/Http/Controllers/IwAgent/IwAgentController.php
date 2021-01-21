<?php

namespace App\Http\Controllers\IwAgent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Ticket;
use App\TicketDetail;
use App\User;
use App\Department;
use App\Manager;
use Validator;
use App\News;


class IwAgentController extends Controller
{

    public function index()
    {


        // this for get all in one

        app()->setLocale(Session::get('locale'));
        $userId=auth()->user()->id;

            $DepartmentId=Manager::where('emp_id',"=",$userId)->get()[0]["manager_id"];
            $tickets=Ticket::where('department_id',"=",$DepartmentId)->where('progress',"=",'open')->get();
        //  $tickets=Ticket::all();
            $Users=User::all();
            $InformationArray=Array(
                'tickets'=>$tickets,
                'Users'=>$Users
            );


        return view('IwAgent.index',$InformationArray);

    }





    public function GetDetails(Request $request)
    {

        $TicketDetails=TicketDetail::where('ticket_id','=',$request->id)->orderBy('created_at', 'desc')->get();


        $informationArray=array(
            'TicketDetails'=>$TicketDetails,
            'id'=>$request->id
        );
        return view('IwAgent.timeline',$informationArray);


    }



    public function Rejcted(Request $request)
    {



     //   dd($request);

        $tickets=Ticket::find($request->id);
        $tickets->department_id=0;
        $tickets->agent_comment=$request->resaon;
        $tickets->progress='Rejectd';
        $tickets->save();//='Rejectd';


        return redirect()->back();


    }





    // Rejcted




    public function StoreReply(Request $request)

    {


        $validator = Validator::make($request->all(), [
            'reply' => 'required',
            'id' => 'required',
        ]);

        if ($validator->fails()) {

            return redirect()->back();
        }


        TicketDetail::create([
             'agent_id'=>auth()->user()->id,
             'agent_comment'=>$request["reply"]
            , 'ticket_id'=>$request["id"]
        ]);



        return redirect()->back();


    }


     public function profile()
    {
        # code...
        app()->setLocale(Session::get('locale'));

        // profile

       // $TicketDetails=TicketDetail::where('ticket_id','=',$request->id)->orderBy('created_at', 'desc')->get();
       $tickets=Ticket::where('agent_id',"=",auth()->user()->id)->get();
      //dd($tickets);
      $CountOfOpenTicket=Ticket::where('agent_id',"=",auth()->user()->id)->where('progress',"=","open")->count();
      $CountOfTicket=Ticket::where('agent_id',"=",auth()->user()->id)->count();



        $InfromationArray=Array(
            'tickets'=>$tickets,
            'openticket'=>$CountOfOpenTicket,
            'countticket'=>$CountOfTicket
        );
        return view('IwAgent.profile',$InfromationArray);
    }


    public function News()
    {

        $userId=auth()->user()->id;
        $Newss=News::where('department_id',"=",Manager::where('emp_id',"=",$userId)->get()[0]['manager_id'])->get();
        $InformationArray=array(
       'posts'=>$Newss
        );



        return view('IwAgent.News',$InformationArray);
    }


    public function StoreNews(Request $request)
    {

        // StoreNews

        $userId=auth()->user()->id;
        News::create([
            'user_id'=>$userId,
            'doucment_name'=>$request['doucment_name'],
            'doucment_type'=>$request['doucment_type'],
            'department_id'=>Manager::where('emp_id',"=",$userId)->get()[0]['manager_id'],
            'descrption'=>$request['reply']
        ]);



        return redirect()->back();



    }




}
