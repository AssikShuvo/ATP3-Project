<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\client_job_controller;
use App\Http\Controllers\client_home_controller;
use App\Http\Controllers\client_event_controller;





Route::get('/client_homepage', [client_home_controller::class, 'client_home']);

Route::get('/client_create_job', [client_job_controller::class, 'client_create_job']);
Route::post('/client_create_job', [client_job_controller::class, 'store_job_info']);

Route::get('/client_previous_posts', [client_job_controller::class, 'client_previous_posts']);
Route::get('/client_completed_projects', [client_job_controller::class, 'client_completed_projects']);
Route::get('/client_ongoing_projects', [client_job_controller::class, 'client_ongoing_projects']);

Route::get('/client_job_details/{id}', [client_job_controller::class, 'client_job_details']);

Route::get('/client_job_edit/{id}', [client_job_controller::class, 'client_job_edit']);
Route::post('/client_job_edit/{id}', [client_job_controller::class, 'client_job_update']);

Route::get('/client_job_delete/{id}', [client_job_controller::class, 'client_job_delete']);
Route::post('/client_job_delete/{id}', [client_job_controller::class, 'client_job_destroy']);

Route::get('/client_previous_posts_by_date', [client_job_controller::class, 'client_previous_posts_by_date']);
Route::get('/client_previous_posts_by_price', [client_job_controller::class, 'client_previous_posts_by_price']);










Route::get('/client_create_event', [client_event_controller::class, 'client_create_event']);
Route::post('/client_create_event', [client_event_controller::class, 'store_event_info']);

Route::get('/client_upcoming_events', [client_event_controller::class, 'client_upcoming_events']);
Route::get('/client_ongoing_events', [client_event_controller::class, 'client_ongoing_events']);
Route::get('/client_finished_events', [client_event_controller::class, 'client_finished_events']);

Route::get('/client_event_details/{id}', [client_event_controller::class, 'client_event_details']);

Route::get('/client_event_edit/{id}', [client_event_controller::class, 'client_event_edit']);
Route::post('/client_event_edit/{id}', [client_event_controller::class, 'client_event_update']);

Route::get('/client_event_delete/{id}', [client_event_controller::class, 'client_event_delete']);
Route::post('/client_event_delete/{id}', [client_event_controller::class, 'client_event_destroy']);