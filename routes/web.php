<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['auth']], function () {
    Route::get('/projects', 'ProjectController@index')->name('project.index');
    Route::get('/projects/create', 'ProjectController@create')->name('project.create');
    Route::post('/projects', 'ProjectController@store')->name('project.store');
    Route::get('/projects/{project}', 'ProjectController@show')->name('project.show');
    Route::get('/projects/{project}/edit', 'ProjectController@edit')->name('project.edit');
    Route::put('/projects/{project}', 'ProjectController@update')->name('project.update');
    Route::get('/projects/{project}/destroy', 'ProjectController@destroy')->name('project.destroy');

    Route::get('/projects/{project}/task/create', 'TaskController@create')->name('task.create');
    Route::post('/task', 'TaskController@store')->name('task.store');
    Route::get('/projects/{project}/task/{task}', 'TaskController@show')->name('task.show');
    Route::get('/task/{task}/edit', 'TaskController@edit')->name('task.edit');
    Route::put('/task/{task}', 'TaskController@update')->name('task.update');
    Route::get('/task/{task}/destroy', 'TaskController@destroy')->name('task.destroy');
});
