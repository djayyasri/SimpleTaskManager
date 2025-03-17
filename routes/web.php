<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('tasks.index'); // Single redirect
});

Route::resource('tasks', TaskController::class);



