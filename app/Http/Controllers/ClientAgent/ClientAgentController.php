<?php

namespace App\Http\Controllers\ClientAgent;

use App\Http\Controllers\Controller;
use App\Ticket;
use App\TicketDetail;
use App\TicketType;
use App\ProblemType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Validator;
use App\Newer;

class ClientAgentController extends Controller
{
    // this is for get details


    public function __construct()
    {

        app()->setLocale(Session::get('locale'));
        $this->middleware('auth');
    }





    public function Index()
    {


     //   app()->setLocale(Session::get('locale'));
     $News=Newer::where('comp_id',auth()->user()->comp_id)->get();

     $informationArray=array(
         "News"=>$News
     );
        return view('ClientAgent.index',$informationArray);
    }


    public function CreateTicket()
    {

        app()->setLocale(Session::get('locale'));
        $TicketTypes=TicketType::all();
        $ProblemTypes=ProblemType::where('comp_id','=',auth()->user()->comp_id)->get();


        $informationArray=array(
            'TicketTypes'=>$TicketTypes,
            'ProblemTypes'=>$ProblemTypes
        );
        return view('ClientAgent.CreateTicket',$informationArray);
    }

    public function StoreTicket(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'ticket_type' => 'required',
            'ticket' => 'required',
          //  'FILE'=>'required'
        ]);

        if ($validator->fails()) {

            return response()->json(['status'=>'fail','reasons'=>$validator->messages()],400);
        }



        // StoreTicket



        $name="";
        if($files=$request->file('FILE'))
        {

            $name=$files->getClientOriginalName();
            $files->move('FILE',$name);

        }

        Ticket::create([
              'user_id'=>auth()->user()->id
            , 'ticket_type_id'=>$request["ticket_type"]
            , 'issue_name'=>$request["ticket"]
            ,'progress'=>'open'
            ,'comp_id'=>auth()->user()->comp_id
             ,'attach_path'=>$name
            ,'problem_name'=>ProblemType::find($request["Prblem_Name"])->name

        ]);

        return response()->json(['status'=>'success'],200);
    }


    public function ShowTicket()
    {



        app()->setLocale(Session::get('locale'));

        $tickets=Ticket::where('user_id','=',auth()->user()->id)->get();




        $informationArray=array(
            'tickets'=>$tickets
        );
        return view('ClientAgent.showTicket',$informationArray);



    }


    public function GetDetails(Request $request)
    {


        $TicketDetails=TicketDetail::where('ticket_id','=',$request->id)->orderBy('created_at', 'desc')->get();


        $informationArray=array(
            'TicketDetails'=>$TicketDetails,
            'id'=>$request->id
        );
        return view('ClientAgent.timeline',$informationArray);

    }

    public function StoreReply(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'reply' => 'required',
            'id' => 'required',
        ]);

        if ($validator->fails()) {

            return redirect()->back();
        }


        $name="";
        if($files=$request->file('FILE'))
        {

            $name=$files->getClientOriginalName();
            $files->move('FILE',$name);

        }



        TicketDetail::create([
             'customer_comment'=>$request["reply"],
               'customer_id'=>auth()->user()->id,
             'ticket_id'=>$request["id"],
              'img_path'=>$name,
        ]);



        return redirect()->back();

    }
}
