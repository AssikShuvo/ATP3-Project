<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\client_event_info;

class client_event_controller extends Controller
{
    public function client_create_event(){
        return view('Client_Event.create_event');
    }

    public function store_event_info(Request $req){

        $client_event_info = new client_event_info();

        $client_event_info->event_title = $req->event_title;
        $client_event_info->event_prize = $req->event_prize;
        $client_event_info->event_category = $req->event_category;
        $client_event_info->event_description = $req->event_description;
        $client_event_info->event_start_datetime = $req->event_start_datetime;
        $client_event_info->event_stop_datetime = $req->event_stop_datetime;

        $client_event_info->save();

        return redirect('/client_homepage');
    }
}
