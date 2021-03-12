<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class client_home_controller extends Controller
{
    public function client_home(){
        return view('Client_Home.client_homepage');
    }
}
