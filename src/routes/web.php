<?php

use Darshan\Crud\Controllers\HelloWorldController;
use Illuminate\Support\Facades\Route;

Route::get('helloWorld', HelloWorldController::class);
