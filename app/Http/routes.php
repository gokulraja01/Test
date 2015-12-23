<?php

use App\Task;
use Illuminate\Http\Request;

Route::group(['middleware' => 'web'], function () {
    
    Route::get('/', [
    'as' => 'home',
    'uses' => 'PagesController@home'
]);
Route::get('/tasks', [
    'as' => 'tasks',
    'uses' => 'TasksController@index'
]);
Route::get('/tasks/create', [
    'as' => 'create',
    'uses' => 'TasksController@create'
]);
});
