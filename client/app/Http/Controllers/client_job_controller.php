<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class client_job_controller extends Controller
{
    public function client_create_job(){
        return view('Client_Job.create_job');
    }
}
