<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::post('/login', 'api\UserController@login');
Route::post('/register', 'api\UserController@register');

Route::get('/jobs', 'api\JobController@joblist');
Route::get('/job/{job_id}', 'api\JobController@jobdetail');

Route::post('/user/job', 'api\JobController@apply');

//cv
Route::post('/user/cv', 'api\UserController@cv');
Route::get('/user/{user_id}/cv', 'api\UserController@getcv');


