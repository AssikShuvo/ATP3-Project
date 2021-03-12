<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\client_job_controller;
use App\Http\Controllers\client_home_controller;

Route::get('/client_homepage', [client_home_controller::class, 'client_home']);

Route::get('/client_create_job', [client_job_controller::class, 'client_create_job']);
