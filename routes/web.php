<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('tasks.index');  // Redirects (302)
});

Route::resource('tasks', TaskController::class);


