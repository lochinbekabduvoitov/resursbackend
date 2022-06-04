<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pride;
use App\Models\Resurs;
use App\Models\ResursMain;


class HomeController extends Controller
{
    public function home(){
        $pridedata=Pride::all();
        $resursmaindata=ResursMain::all();
        return view('home.home',compact('resursmaindata','pridedata'));
    }

    
    public function resurspage(){
        return view('resource.resurspage');
    }
}
