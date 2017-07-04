<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','PagesController@index');

Route::get('/home', 'PagesController@index');

Route::get('/contact', 'PagesController@contact');

Route::get('/registry','PagesController@registry');

Route::get('/login', 'PagesController@login');

Route::get('/students', 'StudentsController@index');

Route::get('/classes', 'StudentsController@classes');

Route::get('/selectedClass/{classId}', 'StudentsController@selectedClass');

Route::get('/editStudent/{studentsId}', 'StudentsController@selectedStudent');

Route::get('/newStudent', 'PagesController@newStudent');

Route::get('/newClass', 'PagesController@newClass');

Route::post('/saveClass', array('uses'=>'StudentsController@createClass'));

Route::post('/saveStudent', array('uses'=>'StudentsController@createStudent'));

Route::post('/updateStudent', array('uses'=>'StudentsController@updateStudent'));

Auth::routes();

Route::get('/logout', function ()
{
	Auth::logout();
	return redirect('/');
});

Route::auth();
