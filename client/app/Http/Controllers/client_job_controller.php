<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\client_job_info;
use Illuminate\Support\Facades\DB;

class client_job_controller extends Controller
{


//////////////////////////////// Create Job /////////////////////////////

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





///////////////////////////////// Views ///////////////////////////////////////

    public function client_previous_posts(){

        $client_job_info = client_job_info::where('job_status', '=' , 'New Project')->paginate(10);

        return view('Client_Job.view_job')->with('client_job_info', $client_job_info);
    }

    public function client_completed_projects(){

        $client_job_info = client_job_info::orderBy('job_delivery_time', 'DESC')
                                            ->where('job_status', '=' , 'Completed Project')
                                            ->paginate(10);

        return view('Client_Job.completed_view_job')->with('client_job_info', $client_job_info);
    }

    public function client_ongoing_projects(){

        $client_job_info = client_job_info::orderBy('job_delivery_time', 'ASC')
                                            ->where('job_status', '=' , 'Ongoing Project')
                                            ->paginate(10);

        return view('Client_Job.ongoing_view_job')->with('client_job_info', $client_job_info);
    }





////////////////////////// Details Functions //////////////////////////////////////////////

    public function client_job_details($id){

        $client_job_info = client_job_info::find($id);

        return view('Client_Job.job_details')->with('client_job_info', $client_job_info);
    }

    public function client_ongoing_job_details($id){

        $client_job_info = client_job_info::find($id);

        return view('Client_Job.ongoing_job_details')->with('client_job_info', $client_job_info);
    }

    public function client_completed_job_details($id){

        $client_job_info = client_job_info::find($id);

        return view('Client_Job.completed_job_details')->with('client_job_info', $client_job_info);
    }





//////////////////////////// Update Functions ///////////////////////////////

    public function client_job_edit($id){

        $client_job_info = client_job_info::find($id);

        return view('Client_Job.client_job_edit')->with('client_job_info', $client_job_info);
    }


    public function client_job_update($id, Request $req){

        $client_job_info = client_job_info::find($id);

        $client_job_info->job_title = $req->job_title;
        $client_job_info->job_price = $req->job_price;
        $client_job_info->job_category = $req->job_category;
        $client_job_info->job_description = $req->job_description;
        $client_job_info->job_delivery_time = $req->job_delivery_time;

        $client_job_info->save();

        return Redirect('/client_previous_posts')->with('message', 'Updated Successfully.');
    }





///////////////// Delete Functions ///////////////////////////

    public function client_job_delete($id){

        $client_job_info = client_job_info::find($id);

        return view('Client_Job.delete_job')->with('client_job_info', $client_job_info);
    }

    public function client_job_destroy($id){
        if(client_job_info::destroy($id)){
            return redirect('/client_previous_posts')->with('message', 'Deleted Successfully.');
        }
        else{
            return redirect('/client_previous_posts'.$id);
        }        
    }





//////////////////// Sorting Functions /////////////////////////

    public function client_previous_posts_by_date(){

        $client_job_info = client_job_info::orderBy('job_delivery_time', 'ASC')
                                            ->where('job_status', '=' , 'New Project')
                                            ->paginate(10);                                           

        return view('Client_Job.view_job')->with('client_job_info', $client_job_info);
    }

    public function client_previous_posts_by_price(){

        $client_job_info = client_job_info::orderByRaw('CONVERT(job_price, SIGNED) ASC')
                                            ->where('job_status', '=' , 'New Project')
                                            ->paginate(10);                                            

        return view('Client_Job.view_job')->with('client_job_info', $client_job_info);
    }






///////////////// Search Functions ///////////////////

    public function search_category(Request $req){

        $client_job_info = client_job_info::where('job_category', '=', $req->job_category)
                                            ->where('job_status', '=', 'New Project')
                                            ->get();

         return view('Client_Job.view_job')->with('client_job_info', $client_job_info);
    }

    public function ongoing_search_category(Request $req){

        $client_job_info = client_job_info::where('job_category', '=', $req->job_category)
                                            ->where('job_status', '=', 'Ongoing Project')
                                            ->get();

         return view('Client_Job.ongoing_view_job')->with('client_job_info', $client_job_info);
    }

    public function completed_search_category(Request $req){

        $client_job_info = client_job_info::where('job_category', '=', $req->job_category)
                                            ->where('job_status', '=', 'Completed Project')
                                            ->get();

         return view('Client_Job.completed_view_job')->with('client_job_info', $client_job_info);
    }
}
