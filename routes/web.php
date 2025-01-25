<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IssueController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [IssueController::class, 'index'])->name('issues.index');
Route::get('/issues/{id}', [IssueController::class, 'show'])->name('issues.show');
