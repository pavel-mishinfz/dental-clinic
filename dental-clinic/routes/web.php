<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function(){
   return 'Welcome!';
});

Route::get('/', 'MainController@index')->name('main.index');
Route::get('/departments', 'DepartmentController@index')->name('department.index');
Route::get('/doctors', 'DoctorController@index')->name('doctor.index');
Route::get('/about', 'AboutController@index')->name('about.index');
Route::get('/contacts', 'ContactController@index')->name('contact.index');

Route::get('/departments/create', 'DepartmentController@create');

Route::get('/doctors/create', 'DoctorController@create');

Route::get('/department_doctors/create', 'DepartmentDoctorsController@create');

Route::get('/popup/helpers', 'PopupController@helpers');
Route::get('/popup/doctor', 'PopupController@doctor');

