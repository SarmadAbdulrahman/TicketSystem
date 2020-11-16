<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Branch;
use App\service;
use App\Post;


class ClinetController extends Controller
{
    //service

    public  function PostRequest(Request $request)
    {
        # code...

       // dd($request);

        Post::create([
             'branches_id'  =>$request['Bracnhes']
            , 'serviceType_id'=>$request['services']
            , 'username'=>$request['your_name']
            , 'email'=>$request['your_email']
            , 'phonenumber'=>$request['your_phone']
            , 'date'=>$request['Requset_date']
            , 'cr_count'=>1
        ]);


        return redirect()->back();
    }


     public function CreateView()
    {
        # code... service

        $Baranchers=Branch::all();
        $services=service::all();
        $InfromationArray=Array(
            'Baranchers'=>$Baranchers,
            'services'=>$services
        );

        return view('welcome',$InfromationArray);
    }
}
