<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Ticket;
// TbiTicket
use App\TbiTicket;


class ClinetApi extends Controller
{
    //


    public function APIStoreTicket(Request $request)
    {
        # code...

        $validator = Validator::make($request->all(), [
            'UserSp_ID'=> 'required',
'UserRp_ID'=> 'required',
'Date'=> 'required',
'TypePr'=> 'required',
'Details'=> 'required',
'SolveProb'=> 'required',
'ITM_ScID'=> 'required',
'HeDs_ScID'=> 'required',
'SectionID'=> 'required',
'UserBR'=> 'required',
'CloDate'=> 'required',
'Details_So'=> 'required',
'IsActive'=> 'required',
'CaseType'=> 'required',
'Valuation'=> 'required',
'PhoneNo'=> 'required',
'IPAddress'=> 'required',
'Name_Conv'=> 'required',
        ]);

        if ($validator->fails()) {

            return response()->json(['status'=>'fail','reasons'=>$validator->messages()],400);
        }

        $t=TbiTicket::create([
            'UserSp_ID'=>$request["UserSp_ID"],
            'UserRp_ID'=>$request["UserRp_ID"],
            'Date'=>$request["Date"],
            'TypePr'=>$request["TypePr"],
            'Details'=>$request["Details"],
            'SolveProb'=>$request["SolveProb"],
            'ITM_ScID'=>$request["ITM_ScID"],
            'HeDs_ScID'=>$request["HeDs_ScID"],
            'SectionID'=>$request["SectionID"],
            'UserBR'=>$request["UserBR"],
            'CloDate'=>$request["CloDate"],
            'Details_So'=>$request["Details_So"],
            'IsActive'=>$request["IsActive"],
            'CaseType'=>$request["CaseType"],
            'Valuation'=>$request["Valuation"],
            'PhoneNo'=>$request["PhoneNo"],
            'IPAddress'=>$request["IPAddress"]

        ]);

        return response()->json(['status'=>'success',"TicketID"=>$t->id],200);


    }

}
