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

    public function client_upcoming_events(){

        $client_event_info = client_event_info::where('event_status', '=' , 'Upcoming Event')->paginate(10);;

        return view('Client_Event.view_event')->with('client_event_info', $client_event_info);
    }

    public function client_ongoing_events(){

        $client_event_info = client_event_info::where('event_status', '=' , 'Ongoing Event')->paginate(10);;

        return view('Client_Event.readonly_view_event')->with('client_event_info', $client_event_info);
    }

    public function client_finished_events(){

        $client_event_info = client_event_info::where('event_status', '=' , 'Finished Event')->paginate(10);;

        return view('Client_Event.readonly_view_event')->with('client_event_info', $client_event_info);
    }

    public function client_event_details($id){

        $client_event_info = client_event_info::find($id);

        return view('Client_Event.event_details')->with('client_event_info', $client_event_info);
    }
}