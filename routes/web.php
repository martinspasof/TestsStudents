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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function(){
  return view('AddStudent');
});

Route::get('/AddTest', function(){
  return view('AddTest');
});
Route::get('/TestSave', 'TestController@TestSave');

Route::get('/StudentsAll','StudentsController@StudentsGetAll');

Route::get('/AddStudent', function(){
  return view('AddStudent');
});
Route::get('/StudentSave', 'StudentsController@StudentSave');

Route::delete('/StudentsAll/{id}', 'StudentsController@DeleteStudentId');

Route::get('/EditStudentId/{id}/edit', 'StudentsController@FindStudentId');
Route::get('/SaveEditedStudent', 'StudentsController@SaveEditedStudent');

Route::get('/StudentTestRegistration', 'StudentTestRegistrationController@GetData');
Route::get('/SaveData', 'StudentTestRegistrationController@SaveData');
Route::get('/GetAllStudentTest', 'StudentTestRegistrationController@GetAllStudentTest');