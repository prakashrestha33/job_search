<?php
/**
 * Created by PhpStorm.
 * User: nimesh
 * Date: 3/13/17
 * Time: 10:50 AM
 */


Route::get('/jobseekers', 'AdminController@jobseekers')->name('jobseekers');
Route::resource('/job','JobAdminController');