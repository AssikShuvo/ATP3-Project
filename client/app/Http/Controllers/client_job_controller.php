<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\client_job_info;

class client_job_controller extends Controller
{
    public function client_create_job(){
        return view('Client_Job.create_job');
    }

    public function store_job_info(Request $req){

        $client_job_info = new client_job_info();

        $client_job_info->job_title = $req->job_title;
        $client_job_info->job_price = $req->job_price;
        $client_job_info->job_category = $req->job_category;
        $client_job_info->job_description = $req->job_description;
        $client_job_info->job_delivery_time = $req->job_delivery_time;

        $client_job_info->save();

        return redirect('/client_homepage');
    }

    public function client_previous_posts(){

        $client_job_info = client_job_info::where('job_status', '=' , 'New Project')->paginate(10);;

        return view('Client_Job.view_job')->with('client_job_info', $client_job_info);
    }

    public function client_completed_projects(){

        $client_job_info = client_job_info::where('job_status', '=' , 'Completed Project')->paginate(10);;

        return view('Client_Job.view_job')->with('client_job_info', $client_job_info);
    }

    public function client_ongoing_projects(){

        $client_job_info = client_job_info::where('job_status', '=' , 'Ongoing Project')->paginate(10);;

        return view('Client_Job.view_job')->with('client_job_info', $client_job_info);
    }
}
