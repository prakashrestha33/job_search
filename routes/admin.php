<?php
/**
 * Created by PhpStorm.
 * User: nimesh
 * Date: 3/13/17
 * Time: 10:50 AM
 */


Route::get('/jobseekers', 'AdminController@jobseekers')->name('jobseekers');
Route::get('/jobseekers/applied', 'AdminController@jobapplied')->name('jobapplied');
Route::get('/jobseekers/{user_id}/cv', 'AdminController@cv')->name('seeker_cv');
Route::resource('/job','JobAdminController');