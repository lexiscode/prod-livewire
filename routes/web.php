<?php

use App\Livewire\Tasks\TaskShow;
use App\Livewire\Tasks\TaskIndex;
use App\Livewire\Tasks\TaskCreate;
use App\Livewire\Tasks\TaskUpdate;
use Illuminate\Support\Facades\Route;


Route::get('/tasks/create', TaskCreate::class);
Route::get('/', TaskIndex::class)->name('tasks');
//Route::get('/tasks/{id}', TaskShow::class); or alternatively below
Route::get('/tasks/update', TaskUpdate::class);
Route::get('/tasks/{task}', TaskShow::class);


