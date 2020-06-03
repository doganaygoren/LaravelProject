<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Settings;
use View;
class HomeController extends Controller
{
   
    //12-08-19
    public function __construct(){

        $share=Settings::all();
        View::share('share',$share);
    }

    public function index()
    {
        return view('index');
    }
}
