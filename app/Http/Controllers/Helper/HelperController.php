<?php

namespace App\Http\Controllers\Helper;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HelperController extends Controller
{

    public function arabic(){



        $locale='ar';
        Session::put('locale', $locale);
        return redirect()->back();
    }




    public function english(){


        $locale='en';
        Session::put('locale', $locale);
        return redirect()->back();
    }
}
