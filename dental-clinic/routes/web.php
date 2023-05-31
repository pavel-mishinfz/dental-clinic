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

Route::get('/', 'MainController@index')->name('main.index');
Route::get('/departments', 'DepartmentController@index')->name('department.index');
Route::get('/doctors', 'DoctorController@index')->name('doctor.index');
Route::get('/doctors/helper/{id}', 'DoctorController@showHelper');
Route::get('/doctors/doctor/{id}', 'DoctorController@showDoctor');
Route::get('/about', 'AboutController@index')->name('about.index');
Route::get('/contacts', 'ContactController@index')->name('contact.index');
Route::post('/feedback-form', 'FeedbackController@store');
Route::get('/reload', 'FeedbackController@reload');
Route::get('/reviews', 'ReviewController@index')->name('review.index');
Route::post('/image-resize', 'ReviewController@imageResize');
Route::post('/review-send', 'ReviewController@store');

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/', function () {
        $title = 'Admin panel';
        $route = 'admin.index';
        return view('templates.admin', compact('title', 'route'));
    })->name('admin.index');

    Route::group(['namespace' => 'Department'], function () {
        Route::get('/departments', 'IndexController')->name('admin.department.index');
        Route::get('/departments/create', 'CreateController')->name('admin.department.create');
        Route::post('/departments', 'StoreController')->name('admin.department.store');
        Route::get('/departments/{department}', 'ShowController')->name('admin.department.show');
        Route::get('/departments/{department}/edit', 'EditController')->name('admin.department.edit');
        Route::patch('/departments/{department}', 'UpdateController')->name('admin.department.update');
        Route::delete('/departments/{department}', 'DestroyController')->name('admin.department.delete');
    });

    Route::group(['namespace'=>'Doctor'], function (){
        Route::get('/doctors', 'IndexController')->name('admin.doctor.index');
        Route::get('/doctors/create', 'CreateController')->name('admin.doctor.create');
        Route::post('/doctors', 'StoreController')->name('admin.doctor.store');
        Route::get('/doctors/{doctor}', 'ShowController')->name('admin.doctor.show');
        Route::get('/doctors/{doctor}/edit', 'EditController')->name('admin.doctor.edit');
        Route::patch('/doctors/{doctor}', 'UpdateController')->name('admin.doctor.update');
        Route::delete('/doctors/{doctor}', 'DestroyController')->name('admin.doctor.delete');
    });

    Route::group(['namespace'=>'DepartmentDoctors'], function () {
        Route::get('/department-doctors','IndexController')->name('admin.department-doctor.index');
        Route::get('/department-doctors/create','CreateController')->name('admin.department-doctor.create');
        Route::post('/department-doctors', 'StoreController')->name('admin.department-doctor.store');
        Route::get('/department-doctors/{departmentDoctor}', 'ShowController')->name('admin.department-doctor.show');
        Route::get('/department-doctors/{departmentDoctor}/edit', 'EditController')->name('admin.department-doctor.edit');
        Route::patch('/department-doctors/{departmentDoctor}', 'UpdateController')->name('admin.department-doctor.update');
        Route::delete('/department-doctors/{departmentDoctor}', 'DestroyController')->name('admin.department-doctor.delete');
    });

    Route::group(['namespace'=>'Patient'], function () {
        Route::get('/patients', 'IndexController')->name('admin.patient.index');
        Route::get('/patients/create', 'CreateController')->name('admin.patient.create');
        Route::post('/patients', 'StoreController')->name('admin.patient.store');
        Route::get('/patients/{patient}', 'ShowController')->name('admin.patient.show');
        Route::get('/patients/{patient}/edit', 'EditController')->name('admin.patient.edit');
        Route::patch('/patients/{patient}', 'UpdateController')->name('admin.patient.update');
        Route::delete('/patients/{patient}', 'DestroyController')->name('admin.patient.delete');
    });

    Route::group(['namespace'=>'FormPatient'], function () {
        Route::get('/form-patients','IndexController')->name('admin.form-patient.index');
        Route::get('/form-patients/create','CreateController')->name('admin.form-patient.create');
        Route::post('/form-patients', 'StoreController')->name('admin.form-patient.store');
        Route::get('/form-patients/{formPatient}', 'ShowController')->name('admin.form-patient.show');
        Route::get('/form-patients/{formPatient}/edit', 'EditController')->name('admin.form-patient.edit');
        Route::patch('/form-patients/{formPatient}', 'UpdateController')->name('admin.form-patient.update');
        Route::delete('/form-patients/{formPatient}', 'DestroyController')->name('admin.form-patient.delete');
    });

    Route::group(['namespace'=>'License'], function () {
        Route::get('/licenses', 'IndexController')->name('admin.license.index');
        Route::get('/licenses/create', 'CreateController')->name('admin.license.create');
        Route::post('/licenses', 'StoreController')->name('admin.license.store');
        Route::get('/licenses/{license}', 'ShowController')->name('admin.license.show');
        Route::get('/licenses/{license}/edit', 'EditController')->name('admin.license.edit');
        Route::patch('/licenses/{license}', 'UpdateController')->name('admin.license.update');
        Route::delete('/licenses/{license}', 'DestroyController')->name('admin.license.delete');
    });

    Route::group(['namespace'=>'Review'], function () {
        Route::get('/reviews', 'IndexController')->name('admin.review.index');
        Route::get('/reviews/{review}', 'ShowController')->name('admin.review.show');
        Route::delete('/reviews/{review}', 'DestroyController')->name('admin.review.delete');
        Route::delete('/reviews', 'DestroyAllController')->name('admin.review.deleteAll');
    });
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
